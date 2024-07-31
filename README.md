Obituary Management Platform

This project is an obituary management platform that allows users to submit and view obituaries.

Setup
Set Up Your Development Environment:
Install PHP, Composer, and a web server like Apache.
Install Laravel using Composer: composer create-project --prefer-dist laravel/laravel obituary-platform.

Clone the repository.
 Navigate to the project directory.
Install dependencies: npm

Create a Database:
Set up a MySQL database and configure the .env file in your Laravel project to connect to it.

Build the Form:
Create a migration for the obituaries table: php artisan make:migration create_obituaries_table.
Define the table schema in the migration file and run php artisan migrate.
Create a model and controller for Obituaries: php artisan make:model Obituary -mcr.
Implement form validation and submission logic in the controller.

Create Views:
Use Blade templates to create form and display views.

Obituary Form
The obituary form is located in `resources/views/obituary_form.blade.php`. It allows users to submit obituaries with the following fields:
- Name
- Date of Birth
- Date of Death
- Content
- Author

Handling Form Submission

The form submission is handled by the `submitObituary` method in `ObituaryController`. It validates the input data and stores it in the `obituaries` table.

Viewing Obituaries

The stored obituaries can be viewed at `/view-obituaries`. The `viewObituaries` method in `ObituaryController` retrieves the data from the `obituaries` table and displays it in a paginated table.

SEO and Social Media Optimization

The application includes the following SEO and social media optimization features:
- Dynamic meta tags (title, description, keywords)
- Semantic HTML tags and structured data (schema.org)
- Open Graph tags for social media sharing
- Social media sharing buttons
- Canonical tags to avoid duplicate content issues

 Usage

1. Navigate to `/submit-obituary` to submit a new obituary.
2. Navigate to `/view-obituaries` to view the stored obituaries.

Sitemap

To generate and update the sitemap, a command `generate:sitemap` is included. It can be scheduled to run daily.

```sh
php artisan generate:sitemap

