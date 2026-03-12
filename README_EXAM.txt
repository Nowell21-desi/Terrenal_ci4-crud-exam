# CodeIgniter 4 CRUD Examination Application

## Project Overview
This is a complete web application built with CodeIgniter 4 demonstrating MVC architecture, CRUD operations, user authentication, and Bootstrap 5 UI design.

## Features Implemented
✅ User Registration and Login System
✅ Session Management with Authentication Filters
✅ Complete CRUD Operations (Create, Read, Update, Delete)
✅ Server-side Form Validation
✅ Bootstrap 5 Responsive UI
✅ Flash Messages for User Feedback
✅ Password Hashing with bcrypt
✅ Protected Routes with Middleware
✅ Pagination Support
✅ Clean MVC Architecture

## Database Setup

### Database Name: ci4_crud_exam

### Installation Steps:

1. **Import the Database**
   - Open phpMyAdmin or MySQL command line
   - Import the file: `database_setup.sql`
   - Or manually run the SQL commands in the file

2. **Database Configuration**
   - Database is already configured in `.env` file
   - Database Name: `ci4_crud_exam`
   - Username: `root`
   - Password: (empty)
   - Host: `localhost`
   - Port: `3306`

## Test Credentials

### Login Credentials:
- **Email:** admin@example.com
- **Password:** password123

You can also register a new account using the registration form.

## Application Structure

### Models
- `UserModel.php` - Handles user authentication data
- `RecordModel.php` - Manages CRUD operations for records

### Controllers
- `Auth.php` - Registration, Login, Logout
- `Dashboard.php` - Dashboard page
- `Records.php` - Complete CRUD operations

### Views
- `layouts/main.php` - Base template with Bootstrap 5
- `auth/login.php` - Login form
- `auth/register.php` - Registration form
- `dashboard/index.php` - Dashboard with welcome message
- `records/index.php` - List all records with pagination
- `records/show.php` - View single record details
- `records/create.php` - Create new record form
- `records/edit.php` - Edit existing record form

### Filters
- `AuthFilter.php` - Protects authenticated routes
- `GuestFilter.php` - Redirects logged-in users from login/register pages

## How to Run

1. **Start XAMPP**
   - Start Apache and MySQL services

2. **Import Database**
   - Import `database_setup.sql` into MySQL

3. **Access the Application**
   - URL: http://localhost/Terrenal_CI4-StarterPanel-masterfinal/CI4-StarterPanel-master/public/
   - Or configure a virtual host for cleaner URLs

4. **Login**
   - Use the test credentials above
   - Or register a new account

## Application Routes

### Public Routes (Guest Only)
- `/` or `/login` - Login page
- `/register` - Registration page

### Protected Routes (Authenticated Users Only)
- `/dashboard` - Dashboard
- `/records` - List all records
- `/records/create` - Create new record
- `/records/show/{id}` - View record details
- `/records/edit/{id}` - Edit record
- `/records/delete/{id}` - Delete record
- `/logout` - Logout

## Security Features

1. **Password Hashing**
   - All passwords are hashed using PHP's `password_hash()` with PASSWORD_BCRYPT

2. **Session Management**
   - User sessions are managed securely
   - Session data includes: id, name, email, isLoggedIn

3. **Route Protection**
   - Authentication filter prevents unauthorized access
   - Guest filter redirects logged-in users from auth pages

4. **Form Validation**
   - Server-side validation on all forms
   - Field-specific error messages
   - Input sanitization with `esc()` function

5. **CSRF Protection**
   - Available in CI4 (can be enabled in Filters.php)

## Database Tables

### users table
- id (INT, PK, AUTO_INCREMENT)
- name (VARCHAR 100)
- email (VARCHAR 100, UNIQUE)
- password (VARCHAR 255) - Hashed
- created_at (DATETIME)

### records table
- id (INT, PK, AUTO_INCREMENT)
- title (VARCHAR 200)
- description (TEXT)
- category (VARCHAR 100)
- status (ENUM: active, inactive, pending)
- created_at (DATETIME)
- updated_at (DATETIME)

## Technologies Used

- **Backend:** CodeIgniter 4
- **Frontend:** Bootstrap 5, Bootstrap Icons
- **Database:** MySQL
- **PHP Version:** 8.0.30
- **Server:** Apache (XAMPP)

## Validation Rules

### Registration
- Name: Required, min 3 characters, max 100 characters
- Email: Required, valid email format, unique in database
- Password: Required, min 6 characters
- Confirm Password: Required, must match password

### Login
- Email: Required, valid email format
- Password: Required

### Records (CRUD)
- Title: Required, min 3 characters, max 200 characters
- Description: Required, min 10 characters
- Category: Required, min 3 characters, max 100 characters
- Status: Required, must be one of: active, inactive, pending

## Delete Operation
- **Type:** Hard Delete
- **Confirmation:** JavaScript confirm dialog before deletion
- **Note:** Records are permanently removed from the database

## Additional Notes

1. **Bootstrap 5 CDN** is used for styling (no local files needed)
2. **Flash Messages** appear for all CRUD operations
3. **Pagination** is implemented on the records list page
4. **Responsive Design** works on mobile, tablet, and desktop
5. **Clean URLs** are enabled via .htaccess

## Developer Information

**Developed by:** [Your Name]
**Date:** <?= date('F Y') ?>
**Course:** Web Systems & Technologies
**Project:** CodeIgniter 4 CRUD Practical Examination

## Troubleshooting

### If you get "404 Page Not Found":
1. Check that mod_rewrite is enabled in Apache
2. Verify .htaccess file exists in public folder
3. Check baseURL in .env file

### If database connection fails:
1. Verify MySQL is running in XAMPP
2. Check database name is correct: ci4_crud_exam
3. Verify credentials in .env file

### If session doesn't work:
1. Check writable/session folder has write permissions
2. Clear browser cookies
3. Check session configuration in .env

## License
This project is created for educational purposes as part of a practical examination.
