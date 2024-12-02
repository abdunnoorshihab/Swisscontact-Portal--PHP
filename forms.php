<?php
// Database connection
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "forms";
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    echo "Could not connect to the database!";
    exit;
}

// Fetch staff data
$sql = "SELECT * FROM formsdb";
$result = mysqli_query($conn, $sql);
?>


<?php require_once('header.php');?>
<body>
<h2 class="text-2xl text-center font-semibold mb-6">Forms & Templates</h2>
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
                                placeholder="Search forms..." onkeyup="searchForms()" />
                        </div>
                    </form>

                    <!-- Table -->
                    <table id="forms-table" class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400 border-separate border-spacing-0">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
                            <tr>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Type</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Form Name</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($rows = mysqli_fetch_array($result)) { ?>
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b form-row">
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["Type"]); ?></td>
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["Form Name"]); ?></td>
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["Download"]); ?></td>
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
// Function to search forms
function searchForms() {
    // Get the search input value
    let input = document.getElementById('simple-search').value.toLowerCase();
    
    // Get all the rows in the table
    let rows = document.querySelectorAll('#forms-table .form-row');
    
    // Loop through each row and check if it matches the search term
    rows.forEach(row => {
        let cells = row.getElementsByTagName('td');
        let found = false;
        
        // Loop through each cell in the row and check if the content matches the search term
        for (let i = 0; i < cells.length; i++) {
            if (cells[i].innerText.toLowerCase().includes(input)) {
                found = true;
                break;  // Exit the loop if a match is found
            }
        }

        // Show or hide the row based on the search result
        if (found) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}
</script>
<?php require_once('footer.php');?>
</body>

