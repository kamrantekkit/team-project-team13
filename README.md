# Team 13 Project - PlayPortal
This is the project created by team 13, a full stack e-commerce web application
for QuantumQuest. 

## Features
- Order System - Order management system, integrated with Stripe payment for payment processing,
- Product System - Efficient Product management from creating new products, archiving products
- Tag System - All products use tags for quick querying
- Stock System - All in one place stock management

## Team members
- Mohammed kamran ali – 220171437 - Team Project Leader & Back End Developer 
- Rayyan Ali - 220105514 - Front End Leader and Developer
- Mohammed Faisal Al-Sayegh – 220036713 - Backend Developer
- Abdulrahman Al-Meraikhi – 220036562 - Front End Developer
- Khalifa almahmoud – 220036609 - Front End Developer
- Abdulrahman Albasti – 220036263 - Front End Developer
- Kaneshk Kumar - 220256126 - Front End Developer


## Installation
1. install composer 
```
composer install
```
2. install npm
```
2. npm install
```
3. run npm dev
```
3. npm run dev
```
4. Create tables
```
4. php artisan migrate
```
5. Seed tables
```
5. php artisan db:seed
```
6. Run the server
```
6. php artisan serve
```
7. Visit `http://localhost:8000` in your browser

## Notes
Stripe will not function properly unless you have a valid Stripe API key in your .env file. Webhooks requires a public URL to function properly.

