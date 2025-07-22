<?php
if (isset($_COOKIE['theme'])) {
    echo "Your selected theme is: " . $_COOKIE['theme'];
} else {
    echo "No theme selected.";
}
?>
