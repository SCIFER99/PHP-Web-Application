<!DOCTYPE html>
<html>
<head>
    <title>Greeting</title>
</head>
<body>
    <h1>Greeting</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        if (!empty($name)) {
            echo "<p>Hello, $name! Nice to meet you.</p>";
        } else {
            echo "<p>Please enter your name.</p>";
        }
    } else {
        echo "<p>No form submission detected.</p>";
    }
    ?>
    
    <p><a href="index.php">Go back</a></p>
</body>
</html>
