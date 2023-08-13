<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["response"])) {
    $capturedResponse = $_POST["response"];

    // Do something with the captured response (e.g., store in a database, process, etc.)

    // Send a response back to the client
    echo "Response received and processed on the server.";
}
?>
