CREATE DATABASE CarRentalDB1;

USE CarRentalDB1;

CREATE TABLE bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    payment_method ENUM('Credit Card', 'PayPal', 'Bank Transfer') NOT NULL,
    card_number VARCHAR(16) NULL,
    expiry_date VARCHAR(7) NULL,
    cvv VARCHAR(3) NULL,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
