<?php
// Database connection
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "staff_list";
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    echo "Could not connect to the database!";
    exit;
}

// Fetch staff data
$sql = "SELECT * FROM staffdb";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php require_once('header.php'); ?>
<body>
<h2 class="text-2xl text-center font-semibold mb-6">Staff Directory</h2>
<section id="staff" class="mb-8 flex flex-col md:flex-row gap-4 md:gap-20">
    <!-- Search Bar -->
    <div class="mb-6 w-full">
        <div class="max-w-full mx-auto">
            <div class="overflow-x-auto shadow sm:rounded-lg">
                <div class="p-4">
                    <form class="flex items-center gap-2 mb-5 max-w-full md:max-w-lg">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="w-full">
                            <input type="text" id="simple-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for Employee..." onkeyup="searchTable()"/>
                        </div>
                    </form>

                    <!-- Table -->
                    <table id="staff-table" class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400 border-separate border-spacing-0">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
                            <tr>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">SL</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Employee Name</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Designation</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Project</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Mobile</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">PBX</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Email</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($rows = mysqli_fetch_array($result)) { ?>
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b">
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["SL"]); ?></td>
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["Name"]); ?></td>
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["Designation"]); ?></td>
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["Project"]); ?></td>
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["Mobile"]); ?></td>
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["PBX"]); ?></td>
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["Email"]); ?></td>
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["Location"]); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// JavaScript function to search the table
function searchTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById('simple-search');
    filter = input.value.toUpperCase();
    table = document.getElementById("staff-table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those that don't match the search query
    for (i = 1; i < tr.length; i++) { // Skip the header row
        td = tr[i].getElementsByTagName("td");
        let rowContainsSearch = false;
        for (let j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    rowContainsSearch = true;
                    break; // Stop once a match is found in any column
                }
            }
        }
        if (rowContainsSearch) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}
</script>

</body>
<?php require_once('footer.php'); ?>
</html>
