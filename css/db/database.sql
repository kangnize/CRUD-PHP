-- Create database
CREATE DATABASE IF NOT EXISTS crud_php;
USE crud_php;

-- Create customers table
CREATE TABLE IF NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Optional: Sample data (uncomment if needed)
-- INSERT INTO customers (name, email, phone) VALUES
-- ('Victor Kazungu', 'kazunguvictor12@gmail.com', '0790578739');
