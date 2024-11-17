<?php
// Connect to SQLite
$sqlite = new SQLite3('C:/Users/Pavan Desai/OneDrive/Desktop/zeolite/predictions.db');

// Connect to MySQL (XAMPP)
$mysqli = new mysqli('localhost', 'root', '', 'volkswagen');

// Check MySQL connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch data from SQLite
$result = $sqlite->query('SELECT * FROM predictions');

if (!$result) {
    die("SQLite query failed: " . $sqlite->lastErrorMsg());
}

// Loop through SQLite results
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    // Check if the 'full_message' column exists and has data
    if (!isset($row['full_message'])) {
        die("SQLite column 'full_message' does not exist or is empty.");
    }

    // Prepare SQL insert statement for MySQL
    $stmt = $mysqli->prepare("INSERT INTO notify (notification) VALUES (?)");

    if (!$stmt) {
        die("MySQL prepare failed: " . $mysqli->error);
    }

    // Bind the 'full_message' data to the MySQL 'notification' column
    $stmt->bind_param("s", $row['full_message']);

    // Execute the statement and check for errors
    if (!$stmt->execute()) {
        die("MySQL execute failed: " . $stmt->error);
    }
}

echo "Data transferred successfully";

// Close connections
$mysqli->close();
$sqlite->close();
?>
