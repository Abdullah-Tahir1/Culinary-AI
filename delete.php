<?php
include "connect.php";

// Check if 'id' GET parameter is set
if (isset($_GET["id"])) {
    $id = $_GET["id"]; // You might want to validate this as a proper integer if expected to be one

    // Prepare the DELETE statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM `notes` WHERE `sno` = ?");
    
    if ($stmt === false) {
        die('MySQL prepare error: ' . $conn->error);
    }

    // Bind the integer 'id' to the prepared statement
    $stmt->bind_param("i", $id);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Redirect if the deletion is successful
        header("Location: notebook.php");
        exit; // Don't forget to call exit after header redirection
    } else {
        // Print error message if the execution failed
        echo "Error deleting record: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
} else {
    echo "Error: ID parameter missing.";
}

// Close connection
$conn->close();
?>
