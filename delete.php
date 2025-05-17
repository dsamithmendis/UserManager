<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if ($id) {
        try {
            $stmt = $db->prepare("DELETE FROM users WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "User with ID $id deleted successfully!";
            } else {
                echo "No user found with ID $id.";
            }
        } catch (PDOException $e) {
            echo "Delete error: " . $e->getMessage();
        }
    } else {
        echo "No ID provided.";
    }
}
?>