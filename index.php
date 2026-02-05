<?php session_start(); ?>
<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Car Rental Service</h1>
        <p>"Drive your dream, rent with ease."</p>
        <nav>
            <ul>
                <li><a href="#suv">SUVs</a></li>
                <li><a href="#vans">Vans</a></li>
                <li><a href="#electric">Electric</a></li>
                <li><a href="#coupe">Coupes</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="mailto:roshanroshan6285@gmail.com">Email Me</a></li>
                <?php if (isset($_SESSION['email'])): ?>
                <li style="color: #00f;">Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?></li>
                <li><a href="logout.php">Logout</a></li>
            <?php endif; ?>
            </ul>
        </nav>
    </header><section id="cars">
    <div class="category" id="suv">
        <h2>SUVs</h2>
        <p>"Power, space, and adventure combined."</p>
        <img src="hondacrv.jpg" alt="SUV Image" class="car-image"><br>
        <button onclick="location.href='suv/index2.html'">View Details</button></div>
        
    </div>
    <div class="category" id="vans">
        <h2>Vans</h2>
        <p>"Room for everyone, comfort for all."</p>
        <img src="honda_odyssey.jpg" alt="Van Image" class="car-image"><br>
        <button onclick="location.href='vans/vans-cars.html'">View Details</button></div>
       
    </div>
    <div class="category" id="electric">
        <h2>Electric</h2>
        <p>"Eco-friendly, futuristic driving."</p>
        <img src="audi-etron.jpg" alt="Electric Car Image" class="car-image"><br>
        <button onclick="location.href='electric/electric-cars.html'">View Details</button></div>
        
    </div>
    <div class="category" id="coupe">
        <h2>Coupes</h2>
        <p>"Style, speed, and performance in one package."</p>
        <img src="audi_rs5_coupe.jpg" alt="Coupe Image" class="car-image"><br>
        <button onclick="location.href='coupe/coupe-cars.html'">View Details</button></div>
        
    </div>
</section>

<footer>
    <p>&copy; 2025 Car Rental Service. All rights reserved.</p>
    <p>"Your journey, our priority."</p>
</footer>

<script src="main.js"></script>

</body>
</html>