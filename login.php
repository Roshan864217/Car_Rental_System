<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Car Rental System</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #74ebd5, #9face6);
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background: white;
      padding: 30px 40px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      width: 100%;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-size: 14px;
      margin-bottom: 6px;
      color: #555;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    textarea {
      resize: vertical;
      min-height: 60px;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #4a90e2;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 10px;
      cursor: pointer;
      margin-top: 10px;
    }

    button:hover {
      background-color: #357ab8;
    }

    .back-link {
      display: block;
      margin-top: 20px;
      text-align: center;
      text-decoration: none;
      color: #333;
      font-size: 14px;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Login / Register</h2>
    <form id="login-form" onsubmit="handleSubmit(event)">
      <div class="form-group">
        <label for="name">Full Name (Optional)</label>
        <input type="text" id="name" name="name" placeholder="John Doe" />
      </div>

      <div class="form-group">
        <label for="email" required>Email Address</label>
        <input type="email" id="email" name="email" placeholder="example@email.com" required />
      </div>

      <div class="form-group">
        <label for="phone">Phone Number (Optional)</label>
        <input type="tel" id="phone" name="phone" placeholder="123-456-7890" />
      </div>

      <div class="form-group">
        <label for="address">Address (Optional)</label>
        <textarea id="address" name="address" placeholder="Your address..."></textarea>
      </div>

      <button type="submit">Login</button>
    </form>
    <a href="index.php" class="back-link">← Back to Home</a>
  </div>

  <script>
    function handleSubmit(event) {
      event.preventDefault();
      const email = document.getElementById('email').value;
      alert("Logged in successfully with email: " + email);
      window.location.href = "index.php"; // Redirect to home page after login
    }
  </script>
</body>
</html>
