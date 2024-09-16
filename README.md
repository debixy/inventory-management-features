---

# Inventory Management Features

A modular, responsive inventory management system built using **Laravel** and **Vite.js**. This application allows users to track inventory items, manage stock levels, and handle day-to-day inventory-related operations in an efficient and user-friendly interface.

## Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Inventory Management**: Add, update, delete, and view inventory items.
- **Stock Control**: Monitor low-stock and out-of-stock items.
- **Recent Activities**: Track recent inventory changes on the dashboard.
- **Pagination**: Inventory list is paginated for efficient management of large data sets.
- **Responsive UI**: Fully responsive design using SCSS and Bootstrap for different screen sizes.
- **Settings**: Customize application settings such as stock threshold alerts and notification email.

## Tech Stack

- **Backend**: [Laravel 10](https://laravel.com/)
- **Frontend**: [Vite.js](https://vitejs.dev/) (Vue.js or React can be integrated if needed)
- **Styling**: [SCSS](https://sass-lang.com/), [Bootstrap 5](https://getbootstrap.com/)
- **Database**: MySQL (or any relational database supported by Laravel)
- **Tools**: Composer, NPM

## Installation

### Prerequisites

- **PHP 8.1 or higher**
- **Composer**
- **Node.js and NPM**
- **MySQL (or your preferred database)**

### Steps

1. Clone the repository:

   ```bash
   git clone https://github.com/debixy/inventory-management-features.git
   cd inventory-management-features
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Install Node.js dependencies:

   ```bash
   npm install
   ```

4. Copy `.env.example` to `.env` and configure your environment variables:

   ```bash
   cp .env.example .env
   ```

5. Generate application key:

   ```bash
   php artisan key:generate
   ```

6. Configure your database settings in the `.env` file:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

7. Run migrations to create necessary tables:

   ```bash
   php artisan migrate
   ```

8. Build frontend assets:

   ```bash
   npm run build
   ```

9. Run the development server:

   ```bash
   php artisan serve
   ```

10. Open a new terminal and start Vite.js for hot-reloading:

   ```bash
   npm run dev
   ```

You should now be able to access the application at `http://localhost:8000`.

## Configuration

You can configure application settings through the `.env` file. Make sure to update the following configurations for proper functionality:

- **Database**: Ensure database credentials are correct.
- **Vite**: Check that the Vite configuration matches your local environment.

For email notifications and other advanced settings, consult the Laravel documentation on [Mail Configuration](https://laravel.com/docs/10.x/mail).

## Usage

### Inventory Management

1. **View Inventory**: Navigate to the "Inventory" tab to see all items listed. Paginate through items if necessary.
2. **Add New Item**: Use the "Add New Item" button to create a new inventory item with fields like item name, quantity, and price.
3. **Edit/Delete Items**: Use the action buttons next to each item to edit or delete it.
4. **Stock Monitoring**: The system automatically flags items that are low or out of stock, and displays them in the dashboard.

### Dashboard

The dashboard provides a quick summary of key inventory metrics:
- Total number of items
- Items that are low in stock
- Items that are out of stock
- Recent inventory activities

### Settings

You can customize settings such as low-stock thresholds and notification emails under the "Settings" tab.

## File Structure

```
inventory-management-features/
│
├── app/                 # Laravel application code
├── bootstrap/           # Laravel bootstrap files
├── config/              # Laravel and Vite.js configuration
├── database/            # Migrations, factories, and seeders
├── public/              # Publicly accessible files
├── resources/           # Frontend resources (views, JS, SCSS)
│   ├── js/              # JavaScript entry point and components
│   ├── sass/            # SCSS styles organized into modular components
│   └── views/           # Blade templates for the inventory app
├── routes/              # API and web routes
├── storage/             # Storage for logs and cached files
├── tests/               # PHPUnit test cases
├── vite.config.js       # Vite configuration for JS/SCSS compilation
├── package.json         # Node.js dependencies
├── composer.json        # PHP dependencies
└── .env                 # Environment variables
```

## Contributing

Contributions are welcome! Please follow the steps below:

1. Fork the repository.
2. Create a new branch for your feature (`git checkout -b feature/new-feature`).
3. Make your changes and commit them (`git commit -m "Added new feature"`).
4. Push to the branch (`git push origin feature/new-feature`).
5. Open a pull request.

Make sure your code follows best practices, is properly formatted, and does not introduce unnecessary dependencies.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---
