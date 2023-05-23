<!DOCTYPE html>
<html>
<head>
    <title>Counter</title>
</head>
<body>
    <?php
    // Check if the counter file exists
    if (file_exists('counter.txt')) {
        // Read the current count from the file
        $count = (int) file_get_contents('counter.txt');
    } else {
        // Counter file doesn't exist, initialize count to 0
        $count = 0;
    }

    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Increment the count
        $count++;
        // Save the updated count to the file
        file_put_contents('counter.txt', $count);
    }
    ?>
    
    <h1>Counter</h1>
    
    <p>Count: <?php echo $count; ?></p>
    
    <form method="post">
        <button type="submit" name="submit">Increment</button>
    </form>
</body>
</html>
