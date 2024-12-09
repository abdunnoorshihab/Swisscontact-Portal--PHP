<?php
// Database connection
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "forms";

$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve search query if available
$search = isset($_POST['query']) ? $conn->real_escape_string($_POST['query']) : '';

// Default query to fetch only 3 rows for homepage
$sql = "SELECT * FROM formsdb LIMIT 3";

// Modify the query for search
if ($search) {
    $sql = "SELECT * FROM formsdb 
            -- WHERE Type LIKE '%$search%' 
            OR `Form Name` LIKE '%$search%' 
            OR Download LIKE '%$search%'";
}

$result = $conn->query($sql);

// Generate HTML output
if ($result && $result->num_rows > 0) {
    echo '<table class="w-full text-left table-auto min-w-max">
            <thead>
                <tr class="border-b border-gray-200 bg-gray-100">
                    <th class="p-4">Form Name</th>
                    <th class="p-4">Download</th>
                </tr>
            </thead>
            <tbody>';

    // Fetch and display each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr class="hover:bg-gray-50 border-b">
                
                <td class="p-4">' . htmlspecialchars($row["Form Name"]) . '</td>
                <td class="p-4">
                    <a href="' . htmlspecialchars($row["Download"]) . '" class="text-blue-500 hover:underline" target="_blank">Download</a>
                </td>
              </tr>';
    }

    echo '</tbody></table>';
} else {
    echo '<p class="p-4 text-gray-500 text-center">No records found.</p>';
}

// Close the database connection
$conn->close();
?>
