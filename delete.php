<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Perform the deletion
    $sql = "DELETE FROM login_db WHERE id = $id";
    $result = $con->query($sql);

    if ($result) {
        // Redirect back to the database page after successful deletion
        header("Location: ../database.php");
        exit();
    } else {
        // Display an error message if the deletion fails
        echo "Error deleting record: " . $con->error;
    }
} else {
    // Redirect to the main page if the delete request is invalid
    echo "error";
}
?>