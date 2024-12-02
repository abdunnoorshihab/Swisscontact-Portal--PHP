<?php
// Database connection
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "staff_list";
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize search variable and get the value from POST
$search = isset($_POST['query']) ? $_POST['query'] : ''; // Default to empty string if not set

// Default query to fetch only 3 rows for homepage
$sql = "SELECT * FROM staffdb LIMIT 3";

// Modify the query for search if a search term is provided
if ($search) {
    $sql = "SELECT * FROM staffdb 
            WHERE SL LIKE '%$search%' 
            OR `Name` LIKE '%$search%' 
            OR Designation LIKE '%$search%' 
            OR Project LIKE '%$search%' 
            OR Mobile LIKE '%$search%' 
            OR PBX LIKE '%$search%' 
            OR Email LIKE '%$search%' 
            OR `Location` LIKE '%$search%'";
}

$result = $conn->query($sql);

// Generate HTML output
if (mysqli_num_rows($result) > 0) {
    echo '<table class="w-full text-left table-auto min-w-max">
            <thead>
                <tr class="border-b border-gray-200 bg-gray-100">
                    <th scope="col" class="p-4"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M1 20v-2h6v2H1zM1 6V4h22v2H1zm0 7v-2h14v2H1z" fill="#000000"></path></g></svg></th>
                    <th class="p-4">Name</th>
                    <th class="p-4">Designation</th>
                    <th class="p-4">Project</th>
                    <th class="p-4">Mobile</th>
                    <th class="p-4">PBX</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Location</th>
                </tr>
            </thead><tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr class="hover:bg-gray-50 border-b">
                <td class="p-4">' . htmlspecialchars($row["SL"]) . '</td>
                <td class="p-4">' . htmlspecialchars($row["Name"]) . '</td>
                <td class="p-4">' . htmlspecialchars($row["Designation"]) . '</td>
                <td class="p-4">' . htmlspecialchars($row["Project"]) . '</td>
                <td class="p-4">' . htmlspecialchars($row["Mobile"]) . '</td>
                <td class="p-4">' . htmlspecialchars($row["PBX"]) . '</td>
                <td class="p-4">' . htmlspecialchars($row["Email"]) . '</td>
                <td class="p-4">' . htmlspecialchars($row["Location"]) . '</td>
              </tr>';
    }

    echo '</tbody></table>';
} else {
    echo '<p class="p-4 text-gray-500">No records found.</p>';
}
mysqli_close($conn);
?>
