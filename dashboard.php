<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<?php
if (isset($_SESSION['user'])) {
    echo "Welcome back, " . $_SESSION['user'];
    echo "<br><br>";
    echo '<form action="logout.php" method="post">
            <button type="submit">Logout</button>
          </form>';
} else {
    echo "Please log in.";
}
?>

</body>
</html>
