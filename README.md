# CodeIgniter 4 CRUD Examination Project

## 🎓 Project Overview
Complete web application built with CodeIgniter 4 demonstrating MVC architecture, CRUD operations, user authentication, and Bootstrap 5 UI design.

## ✨ Features
- ✅ User Registration & Login System
- ✅ Session Management with Authentication Filters
- ✅ Complete CRUD Operations (Create, Read, Update, Delete)
- ✅ Server-side Form Validation
- ✅ Bootstrap 5 Responsive UI
- ✅ Password Hashing (bcrypt)
- ✅ Protected Routes
- ✅ Flash Messages
- ✅ Pagination

## 🚀 Quick Start

### Prerequisites
- PHP 7.4 or higher
- MySQL
- Composer (optional)

### Installation

1. **Clone the repository**
```bash
git clone YOUR_REPO_URL
cd YOUR_REPO_NAME
```

2. **Setup Database**
- Import `database_setup.sql` into MySQL
- Database name: `ci4_crud_exam`

3. **Configure Environment**
- Copy `env` to `.env`
- Update database credentials in `.env`

4. **Run the Application**
```bash
php spark serve
```

5. **Access the Application**
- URL: http://localhost:8080
- Login: admin@example.com
- Password: password123

## 📁 Project Structure
```
app/
├── Controllers/
│   ├── Auth.php          # Authentication
│   ├── Dashboard.php     # Dashboard
│   └── Records.php       # CRUD Operations
├── Models/
│   ├── UserModel.php     # User data
│   └── RecordModel.php   # Records data
├── Filters/
│   ├── AuthFilter.php    # Route protection
│   └── GuestFilter.php   # Guest redirect
└── Views/
    ├── layouts/          # Base template
    ├── auth/             # Login & Register
    ├── dashboard/        # Dashboard
    └── records/          # CRUD views
```

## 🗄️ Database Schema

### users table
- id (INT, PK, AUTO_INCREMENT)
- name (VARCHAR 100)
- email (VARCHAR 100, UNIQUE)
- password (VARCHAR 255, HASHED)
- created_at (DATETIME)

### records table
- id (INT, PK, AUTO_INCREMENT)
- title (VARCHAR 200)
- description (TEXT)
- category (VARCHAR 100)
- status (ENUM: active, inactive, pending)
- created_at (DATETIME)
- updated_at (DATETIME)

## 🔐 Test Credentials
- **Email:** admin@example.com
- **Password:** password123

## 🛠️ Technologies Used
- **Backend:** CodeIgniter 4
- **Frontend:** Bootstrap 5, Bootstrap Icons
- **Database:** MySQL
- **PHP Version:** 8.0+

## 📝 Features Implemented

### Authentication
- User registration with validation
- Secure login system
- Password hashing
- Session management
- Logout functionality

### CRUD Operations
- Create new records
- View all records (with pagination)
- View single record details
- Update existing records
- Delete records (with confirmation)

### Security
- Password hashing (bcrypt)
- Session-based authentication
- Protected routes with filters
- Input sanitization
- SQL injection prevention
- XSS protection

### UI/UX
- Bootstrap 5 responsive design
- Clean navigation system
- Flash message notifications
- Form validation with error display
- Status badges and icons
- Mobile-friendly layout


## 👨‍💻 Developer
**Name:** Nowell Terrenal
**Course:** Web Systems & Technologies
**Project:** CodeIgniter 4 CRUD Practical Examination

## 📄 License
This project is created for educational purposes.


