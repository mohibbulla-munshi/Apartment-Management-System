## About AMS

Apartment Management System (AMS) is a comprehensive software solution designed to streamline the management of apartment buildings or complexes. The system includes a wide range of features to help property managers keep track of all aspects of their properties and ensure smooth operations.

Key features of AMS include:
- **Tenant and owner management:** Keep track of tenant and owner information, including contact details, lease agreements, and payment history.
- **Rent and payment processing:** Easily manage rent payments and other charges, with options for online payments and automatic reminders.
- **Maintenance tracking:** Schedule and track maintenance tasks, including regular inspections and repairs.
- **Communication tools:** Communicate with tenants and owners through a built-in messaging system, with options for sending announcements and notifications.

With AMS, property managers can save time and effort while providing top-notch service to their tenants and owners.

Apartment Management System - Laravel Project

This is a web application for apartment management system built using Laravel framework. It provides a platform for apartment managers to manage their apartment units, tenants, and leases. It also allows tenants to login and view their lease information, submit maintenance requests and communicate with their apartment managers.

## Requirements

    PHP 7.3 or higher
    Laravel 8.x
    MySQL 5.7 or higher

## Installation

    Clone the repository to your local machine: git clone https://github.com/your-username/apartment-management-system-laravel.git
    CD into the project directory: cd apartment-management-system-laravel
    Install dependencies using composer: composer install
    Copy .env.example to .env: cp .env.example .env
    Generate an application key: php artisan key:generate
    Set up your database in the .env file
    Run database migrations: php artisan migrate
    Seed the database: php artisan db:seed
    Start the development server: php artisan serve
    Visit http://localhost:8000 in your browser to view the application.

## Usage

    To login as an administrator, use the credentials: admin@example.com and password.
    To login as a tenant, use the credentials of a tenant created during the seeding process.

## Features

    Dashboard for apartment managers to view tenant and lease information.
    Tenants can login and view their lease information.
    Tenants can submit maintenance requests.
    Apartment managers can communicate with tenants through the application.

## Contributing

If you would like to contribute to the project, please follow these steps:

    Fork the repository
    Create a new branch: git checkout -b new-feature
    Make changes and commit: git commit -m "your commit message"
    Push to the branch: git push origin new-feature
    Create a pull request

## License

This project is licensed under the Opensource license.
