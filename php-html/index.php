<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Home</title>
</head>

<body>
  <h1>Halaman Login</h1>
  <form action="backend/login.php" method="post">
    <input type="email" name="email" id="email" placeholder="Masukkan Email" />
    <input type="password" name="password" id="password" placeholder="Masukkan Password" />
    <button type="submit">Login</button>
  </form>
</body>

</html>

<!-- <?php
if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  echo "Email: " . $email . "<br>";
  echo "Password: " . $password . "<br>";
}
?> -->