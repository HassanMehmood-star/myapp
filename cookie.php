<?php

setcookie("username", "Hassan", time() + 3600, "/", "", false, true);

echo "<h3>PHP Cookie Example</h3>";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newName = $_POST["username"];
    setcookie("username", $newName, time() + 3600); 
    echo "✅ Cookie updated! Please refresh the page.";
}


if (isset($_GET['delete'])) {
    setcookie("username", "", time() - 3600); 
    echo "❌ Cookie deleted. Refresh to confirm.";
}


if (isset($_COOKIE['username'])) {
    echo "<p>👤 Welcome back, " . htmlspecialchars($_COOKIE['username']) . "</p>";
} else {
    echo "<p>👋 Hello, guest! No cookie found.</p>";
}
?>


<form method="POST">
    <label>Update your name:</label>
    <input type="text" name="username" required>
    <button type="submit">Update Cookie</button>
</form>

<p><a href="?delete=true">Delete Cookie</a></p>
