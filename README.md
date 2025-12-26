# Laravel Inertia Vue CRUD Application

A modern CRUD web application built using **Laravel**, **Inertia.js**, **Vue 3**, and **Vite**.  
This project demonstrates how to build a SPA-like experience using Laravel as the backend and Vue as the frontend without a traditional API layer.

---

## 🚀 Tech Stack

- **Backend**: Laravel
- **Frontend**: Vue 3
- **Routing & SPA Bridge**: Inertia.js
- **Bundler**: Vite
- **Auth**: Laravel Fortify (Authentication + 2FA)
- **Database**: SQLite / MySQL
- **Styling**: Tailwind CSS
- **Testing**: Pest / PHPUnit

---

## ✨ Features

- User Authentication (Login, Register, Password Reset)
- Product CRUD (Create, Read, Update, Delete)
- Form validation with error handling
- Reusable Vue UI components
- Inertia-based navigation (SPA experience)
- Clean project structure
- Automated tests included

---

## 📂 Modules Implemented

- Authentication & Authorization
- Product Management
- Dashboard
- UI Component System

---

## 🛠️ Installation & Setup

### 1. Clone the repository
```bash
git clone https://github.com/vikassinghn/laravel-inertia-vue-crud.git
cd laravel-inertia-vue-crud

2. Install backend dependencies
composer install

3. Install frontend dependencies
npm install

4. Environment setup
cp .env.example .env
php artisan key:generate

5. Database setup

Update .env with your database credentials
Then run:

php artisan migrate --seed

6. Run the application
npm run dev
php artisan serve

🧪 Running Tests
php artisan test
