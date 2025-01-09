# Dynamic CMS with Nested Pages (Laravel & Vue 3)

## Overview

This project implements a dynamic CMS where pages can be nested to any depth, and their content is resolved based on parent-child relationships. It allows for a flexible page structure with dynamic routing, CRUD operations, and a tree view visualization on the frontend.

The system supports:

- Pages with unlimited nesting.
- Dynamic route resolution based on page hierarchy.
- CRUD functionality for creating, updating, deleting, and viewing pages.
- A tree view that dynamically reflects changes to the page structure.

## Features

- **Dynamic Nested Page Structure**: Pages can be nested with no limit on depth.
- **Dynamic Routing**: Routes dynamically resolve page content based on the hierarchical structure.
- **CRUD Operations**: Interface for creating, updating, deleting, and viewing pages.
- **Frontend Tree View**: A collapsible, dynamic tree view that represents the page hierarchy.
- **Self-referencing Eloquent Relationships**: Uses Laravel's Eloquent ORM to handle nested relationships.

## Requirements

- PHP 8.1+
- Laravel 11+
- MySQL
- Node.js (for Vue 3 frontend)
- Composer (for Laravel dependencies)
- NPM (for Vue 3 dependencies)

## Installation

### Backend (Laravel)

1. Clone the repository:

    ```bash
    git clone https://github.com/niravpatel143/practical.git
    cd practical
    ```

2. Install Laravel dependencies:

    ```bash
    composer install
    ```

3. Set up the environment file:

    ```bash
    cp .env.example .env
    ```

4. Update `.env` with your database credentials.

5. Run migrations to set up the database:

    ```bash
    php artisan migrate
    ```

6. Install Vue 3 dependencies:

    ```bash
    npm install
    ```

7. Start the development server:

    ```bash
    npm run dev or build
    ```

7. Start the Laravel development server:

    ```bash
    php artisan serve
    ```




4. The frontend will be available at `http://localhost:8000`.

## Features Breakdown
