<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Loan;
use Validator;
use App\Http\Resources\Loan as LoanResource;
   
class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Loan::all();
    
        return $this->sendResponse(LoanResource::collection($products), 'Products retrieved successfully.');
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
            // 'loan_frequency' => 'required',
            'customer_id' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $loan = Loan::create($input);
  
        return $this->sendResponse(new LoanResource($product), 'Loan created successfully.');
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
}
