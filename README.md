# Author : Kalim M Puthawala
# Description :
 1. We can register customers using register api, log them in using login api.
 2. After that we can create a loan for that customer. 
 3. By default loan is not approved.
 4. once the admin with user id = 1 approves the loan, loan is approved
 5. After that customer with his device, the device will hit api and add a loan amount.
 6. The repay api in point 5, will return back the total amount the customer needs to pay.
  

Create a db:seed initial user

-------------------------------------

Docs

1. fork repository or download zip
2. create a database called aspire
3. change .env details for database credentials, with new one
4. php artisan migrate && php artisan db:seed --class=create_admin_user_seeder
5. composer install
6. npm run dev
7. php artisan key:generate
8. php artisan passport:install
9. once the application is up and running, open Postman
10. create a user with register api, and the login  
11. copy the token given, and use that in the createloan api
12. admin then needs to list using /all/loans api
13. admin then needs to approve the latest one using /2/edit/loan api 
14. once loan is approved, the customer, with his device, hit the loan repay api
15. the loan repay api, will deduct the amount, and then give the customer, how much he has to pay to complete the loan and how much he paid.

- I assume, that in users table, record, with id = 1 is Admin, and only admin can approve a loan.
- Every user in the users table, is a customer, which needs to be registered.
