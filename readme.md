# Laravel Simple Wallet App Restful API

An Wallet APP Restful API using Laravel API Resource (Laravel Version 5.7, PHP version 7.2).

### Features:
1.	Setting up the environment.
2.  Creating Model, Seed, Migration for Accounts, Transaction, Expense_cat and Income_cat.
3.	Creating API Resource Controller : List,Show,Store,Update,Delete.
4.	Setup migration to create tables.
5.  Database seeding with seeder.
6.  Creating one-many relationship.
7.	Postman Colletion JSON file are provided.


### Setup

1. Clone or download this repository to your local machine
2. You can change .env for connect database
3. Run following command
- <code>composer install</code>
- <code>php artisan migrate</code>
- <code>php artisan db:seed</code>
- <code>php artisan serve</code>
4. Open Postman to testing API

### Endpoint

1. Accounts
View all account : http://localhost:8000/api/accounts (GET)\
View detail,Edit,Delete account : http://localhost:8000/api/accounts/{id} (GET)(PATCH)(DELETE)\
Insert data : http://localhost:8000/api/accounts/create (POST)
2. Transaction
View all transaction : http://localhost:8000/api/transactions (GET)\
View detail,Edit,Delete transaction : http://localhost:8000/api/transactions/{id} (GET)(PATCH)(DELETE)\
Insert data : http://localhost:8000/api/transactions/create (POST)
3. Expense cat
View all expense_cat : http://localhost:8000/api/expensecat (GET)\
View detail,Edit,Delete expense_cat : http://localhost:8000/api/expensecat/{id} (GET)(PATCH)(DELETE)\
Insert data : http://localhost:8000/api/expensecat/create (POST)
4. Income cat
View all income_cat : http://localhost:8000/api/incomecat (GET)\
View detail,Edit,Delete income_cat : http://localhost:8000/api/incomecat/{id} (GET)(PATCH)(DELETE)\
Insert data : http://localhost:8000/api/incomecat/create (POST)

### Requirement

- Start Postgre, Apache service
- PgAdmin
- PHP laravel (Laravel Framework 5.7, PHP version 7.2)
- Text editor
- Postman tool

### Site

URL : https://simplewalletapp.herokuapp.com/api/

Use Postman tool for performing integration testing with your API.
Postman Colletion link: https://www.getpostman.com/collections/c2f2f656d9907c78bb09

Note: You can change environment Postman type Online URL or Local URL

### Database Data Structure
![ecommapi](https://raw.githubusercontent.com/zuams/lapo-project/master/Backend%203.png)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

