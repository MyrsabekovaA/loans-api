# Loan

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

## Installation

### Step 1: Clone the repository
```bash
git clone https://github.com/MyrsabekovaA/loans-api.git
cd loans-api
```

### Step 2: Install dependencies
```bash
composer install
```

### Step 3: Set up environment
```bash
cp .env.example .env
```
Edit the .env file to match your settings.


### Step 4: Run migrations
```bash
php artisan migrate
```

### Step 5: Run API
```bash
php -S localhost:8000 -t public
```



## Endpoints

### Create a Loan
URL: /loans <br />
Method: POST <br />
Data Params example: { <br />
  "amount": "5000", <br />
  "creation_date": "2024-05-07" <br />
}

### Get a Loan
URL: /loans/{id}
Method: GET


### Update a Loan
URL: /loans/{id}
Method: PUT
Data Params example: {
  "amount": "5000"
}

### Delete a Loan
URL: /loans/{id}
Method: DELETE
