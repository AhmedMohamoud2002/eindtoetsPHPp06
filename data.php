
<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=laptop4u",
        "root", "");
} catch(PDOException $e) {
    die("Error!: " . $e->getMessage());
}
?>


