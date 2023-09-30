CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    sale_price DECIMAL(10, 2) NOT NULL,
    regular_price DECIMAL(10, 2) NOT NULL,
    status ENUM('Active', 'Inactive') NOT NULL,
    sku_code VARCHAR(50) NOT NULL,
    category VARCHAR(50) NOT NULL,
    image VARCHAR(255) NOT NULL
);