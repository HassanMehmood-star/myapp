<?php
// 🍪 Setting a cookie (name, value, expiry time, path, domain, secure, httponly)
setcookie("username", "Hassan", time() + 3600, "/", "", false, true); // 1 hour, HTTP-only

echo "<h3>PHP Cookie Example</h3>";

// 🔁 Update Cookie if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newName = $_POST["username"];
    setcookie("username", $newName, time() + 3600); // Update cookie for 1 hour
    echo "✅ Cookie updated! Please refresh the page.";
}

// ❌ Delete Cookie
if (isset($_GET['delete'])) {
    setcookie("username", "", time() - 3600); // Past time = delete
    echo "❌ Cookie deleted. Refresh to confirm.";
}

// 📥 Read Cookie
if (isset($_COOKIE['username'])) {
    echo "<p>👤 Welcome back, " . htmlspecialchars($_COOKIE['username']) . "</p>";
} else {
    echo "<p>👋 Hello, guest! No cookie found.</p>";
}
?>

<!-- ✍️ Update form -->
<form method="POST">
    <label>Update your name:</label>
    <input type="text" name="username" required>
    <button type="submit">Update Cookie</button>
</form>

<!-- ❌ Delete link -->
<p><a href="?delete=true">Delete Cookie</a></p>
