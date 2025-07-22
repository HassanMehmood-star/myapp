<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['username']);

    if (!empty($name)) {
        $_SESSION['user'] = $name;
        echo " You are logged in as <b>" . $_SESSION['user'] . "</b><br><br>";
        echo '<a href="dashboard.php">Go to Dashboard</a>';
    } else {
        echo " Please enter a valid name.<br><br>";
    }
}
?>

<?php if (!isset($_SESSION['user'])): ?>
    <form method="post" action="">
        <label for="username">Enter your name:</label>
        <input type="text" name="username" id="username" required>
        <button type="submit">Login</button>
    </form>
<?php endif; ?>

</body>
</html>
