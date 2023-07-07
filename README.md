 ## Apartment Management System

The Apartment Management System is a software application designed to streamline and automate various tasks related to managing apartments, tenants, owners, and related financial activities. It provides a comprehensive solution for apartment management companies, property owners, and residents to efficiently manage their operations.

## Features

- User Management: Create and manage user accounts for employees, managers, owners, and residents.
- Profile Management: Maintain user profiles with personal information, contact details, and additional information.
- Family Status: Record family member information for residents.
- Building Management: Manage information about buildings, including names, addresses, types, units, and owners.
- Flat Details: Maintain details of individual flats within a building, including size, residents, floor, rent, and owners.
- Visitors: Track visitor details such as names, types, check-in/out times, status, references, and comments.
- Income Management: Record and manage income details, including type, checking/deposit dates, status, references, and comments.
- Owner Utility: Track utility expenses for owners, including water, electricity, gas, security bills, and rent amounts.
- Rent Management: Monitor rent payments, including rent month/year, renter details, bills, payment status, and due dates.
- Maintenance Cost: Record maintenance expenses, including dates, titles, costs, and details.
- Fund Management: Track funds related to owners, including monthly selections, issue dates, total amounts, and purposes.
- Bill Management: Manage bills with types, deposit dates, months, years, amounts, bank names, and additional details.
- Notice Board: Publish notices for residents and employees.
- Complain Management: Track and resolve complaints from residents.
- Utilities: Manage utility details such as descriptions, types, costs, and statuses.
- Tenant Interface: Provide a dedicated interface for tenants to access notice boards, payment histories, and lodge complaints.
- Employee Interface: Offer employees features like notice boards, tenant search by name and phone number.

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

## Contributing

If you would like to contribute to the project, please follow these steps:

    Fork the repository
    Create a new branch: git checkout -b new-feature
    Make changes and commit: git commit -m "your commit message"
    Push to the branch: git push origin new-feature
    Create a pull request

## License

This project is licensed under the Opensource license.
