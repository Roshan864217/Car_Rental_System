# 🚗 Car Rental System

A modern, web-based platform designed to simplify the car rental process. This system allows users to browse a diverse fleet of vehicles, view detailed specifications, and book their rentals through an intuitive and interactive interface.

---

## 🌟 Key Features

-   **Multi-Category Fleet**: Browse vehicles organized by categories such as **SUVs**, **Vans**, **Electric**, and **Coupes**.
-   **Detailed Car Listings**: Each category features specific models with details on price, year, and engine specifications.
-   **Interactive Booking Portal**: A streamlined booking form that captures user details, rental dates, and preferred payment methods.
-   **Secure Data Handling**: Integrated with a MySQL database to store and manage booking records efficiently.
-   **User Experience**: Features a dedicated login/registration interface and a clean, responsive design for a premium feel.
-   **Real-time Interactions**: Interactive UI elements and feedback messages (via JavaScript) to guide the user through the booking process.

---

## 🛠️ Tech Stack

-   **Frontend**: HTML5, CSS3, JavaScript (Vanilla JS for interactive elements)
-   **Backend**: PHP (Used for session management and database operations)
-   **Database**: MySQL (Relational database for storing booking and user data)
-   **Styling**: Custom CSS with modern layouts and responsive design principles.

---

## 📂 Project Highlights

-   `index.php`: The central hub where users can explore different car categories.
-   `login.php`: A stylized login and registration portal for users.
-   `book-now.html`: The primary interface for initiating a car rental request.
-   `process_booking.php`: A PHP backend script that validates and processes incoming booking data.
-   `car_rental_db1.sql`: A comprehensive database schema to set up the backend environment.
-   **Category-Specific Modules**: Specialized subdirectories (`suv/`, `vans/`, `electric/`, `coupe/`) each containing dedicated listings.

---

## 🚀 Installation & Setup

Follow these steps to get the project up and running on your local machine:

### 1. Prerequisites
-   Install a local server environment (e.g., [XAMPP](https://www.apachefriends.org/), [WAMP](http://www.wampserver.com/en/), or [Laragon](https://laragon.org/)).
-   Ensure **PHP (7.4+)** and **MySQL** are running.

### 2. Database Configuration
-   Open your database management tool (like **phpMyAdmin**).
-   Create a new database named `CarRentalDB`.
-   Import the `car_rental_db1.sql` file located in the project root.
    *Note: If your SQL file specifies a different database name, ensure your PHP connection string matches it.*

### 3. Clone & Deploy
-   Clone this repository into your server's web root directory (e.g., `C:/xampp/htdocs/`):
    ```bash
    git clone https://github.com/Roshan864217/Car_Rental_System.git
    ```
-   Navigate to `process_booking.php` and update the database credentials if necessary:
    ```php
    $servername = "localhost";
    $username = "root";    // Your MySQL username
    $password = "";        // Your MySQL password
    $dbname = "CarRentalDB"; 
    ```

### 4. Launch
-   Open your browser and visit: `http://localhost/rentalproject/index.php` (or your specific directory path).

---

## 📩 Contact & Socials

-   **Developer**: Roshan
-   **Email**: [roshanroshan6285@gmail.com](mailto:roshanroshan6285@gmail.com)
-   **GitHub**: [@Roshan864217](https://github.com/Roshan864217)

---

Developed as a part of the **SE-MiniProject**. Feel free to fork, contribute, or suggest improvements!
