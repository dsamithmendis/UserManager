<?php
include 'connect.php';

try {
    $stmt = $db->query("SELECT * FROM users");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($rows) > 0) {
        foreach ($rows as $row) {
            echo "ID: {$row['id']} | Name: {$row['name']} | Email: {$row['email']}<br>";
        }
    } else {
        echo "No data found.";
    }
} catch (PDOException $e) {
    echo "Read error: " . $e->getMessage();
}
?>