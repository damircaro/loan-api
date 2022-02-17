<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Loan;
use App\Models\LoanRepayment;
use Validator;
use App\Http\Resources\Loan as LoanResource;
   
class LoanController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loans = Loan::where('customer_id',auth('api')->user()->id)->get() ;
        // $loans = Loan::all() ;
    
        return $this->sendResponse(LoanResource::collection($loans), 'Loans retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'amount_required' => 'required',
            'loan_term' => 'required',
        ]);
   
        $input['customer_id'] = auth('api')->user()->id;

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $loan = Loan::create($input);
  
        return $this->sendResponse(new LoanResource($loan), 'Loan created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loan = Loan::find($id);
  
        if (is_null($loan)) {
            return $this->sendError('Loan not found.');
        }
   
        return $this->sendResponse(new LoanResource($loan), 'Loan retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'amount_required' => 'required',
            'loan_term' => 'required',
            // 'loan_frequency' => 'required',
            'customer_id' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $loan->amount_required = $input['amount_required'];
        $loan->loan_term = $input['loan_term'];
        // $loan->loan_frequency = $input['loan_frequency'];
        $loan->customer_id = $input['customer_id'];
        $loan->save();
   
        return $this->sendResponse(new LoanResource($loan), 'Loan updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        $loan->delete();
   
        return $this->sendResponse([], 'Loan deleted successfully.');
    }


    // Loan Approve
    public function approveLoan(Request $request){
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'loan_id'=>'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $loan = Loan::find($input['loan_id']);
        if(empty($loan) ){
            return $this->sendError('Loan not found.');
        }
        if($loan->approved == 'yes' ){
            return $this->sendError('Loan is already approved!');
        }
        // This is just added to mimick live scenario
        // if(auth('api')->user()->id != 1 ){
        //     logger('Severe : Un-authorized access to approve a loan by user id: '. auth('api')->user()->id);
        //     return $this->sendError('Only Admin can approve loan!');
        // }

        $loan->approved = 'yes';
        $loan->save();
        return $this->sendResponse([], 'Loan was successfully activated');
    }

    // Loan Repay
    public function repayLoan(Request $request){
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'loan_id'=>'required',
            'amount'=>'required|numeric',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $loan = Loan::find($input['loan_id']);
        if(empty($loan) ){
            return $this->sendError('Loan not found.');
        }
        if($loan->approved == 'no' ){
            return $this->sendError('Loan is not approved!');
        }
        
        $total_emi_paid = LoanRepayment::where(['loan_id'=>$input['loan_id'], 'customer_id'=>auth('api')->user()->id ])->sum('amount');
        $amount_left = (float)$loan->amount_required -  (float)($total_emi_paid + $input['amount']);

        if($amount_left < 0){
            return $this->sendError('Loan already over!');
        }

        $repayment = LoanRepayment::insert([
            'amount'=>$input['amount'],
            'customer_id'=>auth('api')->user()->id,
            'loan_id'=>$input['loan_id'],
            'created_at'=>\Carbon\Carbon::now()
        ]);

        return $this->sendResponse($repayment, 'Emi Added successfully. Original Loan amount : '.$loan->amount_required.' | Amount left to complete loan : '.$amount_left);
    }




}
