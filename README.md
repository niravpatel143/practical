Dynamic CMS with Nested Pages (Laravel & Vue 3)
Overview
This project implements a dynamic CMS where pages can be nested to any depth, and their content is resolved based on parent-child relationships. It allows for a flexible page structure with dynamic routing, CRUD operations, and a tree view visualization on the frontend.

The system supports:

Pages with unlimited nesting.
Dynamic route resolution based on page hierarchy.
CRUD functionality for creating, updating, deleting, and viewing pages.
A tree view that dynamically reflects changes to the page structure.
Features
Dynamic Nested Page Structure: Pages can be nested with no limit on depth.
Dynamic Routing: Routes dynamically resolve page content based on the hierarchical structure.
CRUD Operations: Interface for creating, updating, deleting, and viewing pages.
Frontend Tree View: A collapsible, dynamic tree view that represents the page hierarchy.
Self-referencing Eloquent Relationships: Uses Laravel's Eloquent ORM to handle nested relationships.
Requirements
PHP 8.1+
Laravel 11+
MySQL
Node.js (for Vue 3 frontend)
Composer (for Laravel dependencies)
NPM (for Vue 3 dependencies)
Installation
Backend (Laravel)
Clone the repository:

bash
Copy code
git clone https://github.com/yourusername/dynamic-cms.git
cd dynamic-cms
Install Laravel dependencies:

bash
Copy code
composer install
Set up the environment file:

bash
Copy code
cp .env.example .env
Update .env with your database credentials.

Run migrations to set up the database:

bash
Copy code
php artisan migrate
(Optional) Seed the database with sample data:

bash
Copy code
php artisan db:seed
Start the Laravel development server:

bash
Copy code
php artisan serve
Frontend (Vue 3)
Navigate to the frontend directory:

bash
Copy code
cd frontend
Install Vue 3 dependencies:

bash
Copy code
npm install
Start the development server:

bash
Copy code
npm run dev
The frontend will be available at http://localhost:3000.

