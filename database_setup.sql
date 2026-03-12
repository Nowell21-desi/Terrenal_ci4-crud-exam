-- Create database
CREATE DATABASE IF NOT EXISTS ci4_crud_exam;
USE ci4_crud_exam;

-- Users table for authentication
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Records table for CRUD operations
CREATE TABLE IF NOT EXISTS records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    description TEXT NOT NULL,
    category VARCHAR(100) NOT NULL,
    status ENUM('active', 'inactive', 'pending') DEFAULT 'active',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert sample user (password: password123)
INSERT INTO users (name, email, password) VALUES 
('Admin User', 'admin@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- Insert sample records
INSERT INTO records (title, description, category, status) VALUES 
('Sample Record 1', 'This is a sample record for testing purposes', 'Technology', 'active'),
('Sample Record 2', 'Another sample record with different content', 'Business', 'active'),
('Sample Record 3', 'Third sample record for demonstration', 'Education', 'pending');
