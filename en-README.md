# Laravel and Vite Project

This project is a modern web application built with the Laravel framework, integrated with Vite for modern front-end tooling. It incorporates powerful packages like Filament, Livewire, Tailwind CSS, and Stripe for various features and enhancements.

---

## Requirements

- **PHP**: ^8.2
- **Node.js**: Latest stable version (for Vite and npm scripts)
- **Composer**: Latest stable version

---

## Features

- **Frontend**:
  - Tailwind CSS for styling
  - Preline for UI components
  - Vite for fast development and optimized builds

- **Backend**:
  - Laravel framework
  - Filament for admin panel and resource management
  - Livewire for dynamic, reactive UI components

- **Third-Party Integrations**:
  - Stripe for payment processing

---

## Installation

### Step 1: Clone the Repository
```bash
git clone "https://github.com/salihakotan/LaravelECommerceApp.git"
cd LaravelECommerceApp
```

### Step 2: Install Dependencies
#### Install PHP Dependencies:
```bash
composer install
```
#### Install Node.js Dependencies:
```bash
npm install
```

### Step 3: Environment Setup
1. Copy the example environment file:
   ```bash
   cp .env.example .env
   ```
2. Update `.env` with your configuration:
   - **Database credentials**
   - **Stripe API keys**
   - **Other settings**

### Step 4: Generate Application Key
```bash
php artisan key:generate
```

### Step 5: Run Database Migrations
```bash
php artisan migrate
```

### Step 6: Start Development Server
Run all necessary services using the following command:
```bash
npm run dev
```

---

## Development Scripts

### Run Vite for Development
```bash
npm run dev
```

### Build for Production
```bash
npm run build
```

### Serve Laravel Application
```bash
php artisan serve
```

### Run Queues
```bash
php artisan queue:listen --tries=1
```

### Combined Services (Using Concurrently)
```bash
npm run dev
```
This runs the Laravel server, queue listener, and Vite dev server simultaneously.

---

## Key Tools and Packages

### Frontend
- **Tailwind CSS**: Utility-first CSS framework for rapid UI development
- **Preline**: Collection of pre-designed Tailwind CSS components
- **Vite**: Next-generation frontend tooling for fast development and optimized builds

### Backend
- **Laravel**: PHP framework for building modern web applications
- **Filament**: Admin panel and resource management system
- **Livewire**: Dynamic, reactive components for Laravel
- **Stripe**: Payment processing integration

### Development
- **Pint**: Laravel's code styling tool
- **Pest**: Testing framework
- **Concurrently**: Run multiple processes in parallel (Laravel server, Vite, queue listener)

---

## Directory Structure

```
├── app/          # Application logic
├── database/     # Migrations, factories, and seeders
├── public/       # Public assets
├── resources/    # Views, styles, and JavaScript
├── routes/       # Application routes
├── storage/      # Logs and cached files
├── tests/        # Testing files
├── vite.config.js # Vite configuration
└── package.json  # Node.js dependencies and scripts
```

---

## Common Commands

### Artisan Commands
- Run migrations:
  ```bash
  php artisan migrate
  ```

- Serve the application:
  ```bash
  php artisan serve
  ```

### Composer Commands
- Install dependencies:
  ```bash
  composer install
  ```

### NPM Commands
- Install dependencies:
  ```bash
  npm install
  ```
- Start development server:
  ```bash
  npm run dev
  ```
- Build assets for production:
  ```bash
  npm run build
  ```

---

## Additional Notes
- Ensure your `.env` file is properly configured for your environment.
- Use the `artisan` command-line tool to manage Laravel-specific tasks.
- Use Vite for a modern, efficient front-end workflow.
- For more information, consult the official documentation:
  - [Laravel Documentation](https://laravel.com/docs)
  - [Vite Documentation](https://vitejs.dev/)
  - [Tailwind CSS Documentation](https://tailwindcss.com/docs)
  - [Filament Documentation](https://filamentphp.com/docs)

