<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-bold text-center mb-8">Users List</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">First Name</th>
                        <th class="py-2 px-4 border-b">Middle Name</th>
                        <th class="py-2 px-4 border-b">Last Name</th>
                        <th class="py-2 px-4 border-b">Designation</th>
                        <th class="py-2 px-4 border-b">Department</th>
                        <th class="py-2 px-4 border-b">Organization</th>
                        <th class="py-2 px-4 border-b">City</th>
                        <th class="py-2 px-4 border-b">Zip</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b">Contact</th>
                        <th class="py-2 px-4 border-b">Status</th>
                        <th class="py-2 px-4 border-b">Stakeholders</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Database credentials
                    $host = "localhost";
                    $dbname = "addressdb";
                    $username = "root";
                    $password = "";

                    try {
                        // Establish connection using PDO
                        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Fetch all rows from the users table
                        $stmt = $pdo->query("SELECT * FROM users");
                        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        // Check if any users exist
                        if (count($users) > 0) {
                            // Loop through each user and display in a table row
                            foreach ($users as $user) {
                                echo "<tr>";
                                echo "<td class='py-2 px-4 border-b'>{$user['id']}</td>";
                                echo "<td class='py-2 px-4 border-b'>{$user['fname']}</td>";
                                echo "<td class='py-2 px-4 border-b'>{$user['mname']}</td>";
                                echo "<td class='py-2 px-4 border-b'>{$user['lname']}</td>";
                                echo "<td class='py-2 px-4 border-b'>{$user['designation']}</td>";
                                echo "<td class='py-2 px-4 border-b'>{$user['department']}</td>";
                                echo "<td class='py-2 px-4 border-b'>{$user['org']}</td>";
                                echo "<td class='py-2 px-4 border-b'>{$user['city']}</td>";
                                echo "<td class='py-2 px-4 border-b'>{$user['zip']}</td>";
                                echo "<td class='py-2 px-4 border-b'>{$user['email_1']}</td>";
                                echo "<td class='py-2 px-4 border-b'>{$user['contact_1']}</td>";
                                echo "<td class='py-2 px-4 border-b'>{$user['status']}</td>";
                                echo "<td class='py-2 px-4 border-b'>{$user['stakeholders']}</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='13' class='py-4 px-4 text-center'>No users found.</td></tr>";
                        }

                    } catch (PDOException $e) {
                        echo "<tr><td colspan='13' class='py-4 px-4 text-center text-red-500'>Error: " . $e->getMessage() . "</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
