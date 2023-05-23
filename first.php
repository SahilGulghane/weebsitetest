<?php
session_start();

// Check if the counter is already set in session
if (!isset($_SESSION['counter'])) {
    // Counter is not set, initialize it to 0
    $_SESSION['counter'] = 0;
}

// Increment the counter
if (isset($_POST['increment'])) {
    if ($_SESSION['counter'] < 100) {
        $_SESSION['counter']++;
    }
}

// Decrement the counter
if (isset($_POST['decrement'])) {
    if ($_SESSION['counter'] > 0) {
        $_SESSION['counter']--;
    }
}

// Reset the counter
if (isset($_POST['reset'])) {
    $_SESSION['counter'] = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Counter</title>
</head>
<body>
    <h1>Counter</h1>

    <p>Count: <?php echo $_SESSION['counter']; ?></p>

    <form method="post">
        <button type="submit" name="increment">Increment</button>
        <button type="submit" name="decrement">Decrement</button>
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
