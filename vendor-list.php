<?php
// Database connection
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "vendor_list";
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    echo "Could not connect to the database!";
    exit;
}

// Fetch vendor data
$sql = "SELECT * FROM staffdb";
$result = mysqli_query($conn, $sql);
?>

<?php require_once('header.php'); ?>
<body>
<h2 class="text-2xl text-center font-semibold mb-6">Vendors</h2>
<section id="staff" class="mb-8 flex flex-col md:flex-row gap-4 md:gap-20">
    <!-- Search Bar -->
    <div class="mb-6 w-full">
        <div class="max-w-full mx-auto">
            <div class="overflow-x-auto shadow sm:rounded-lg">
                <div class="p-4">
                    <div class="flex items-center gap-2 mb-5 max-w-full md:max-w-lg">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="w-full">
                            <input type="text" id="simple-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for Vendors..." onkeyup="searchTable()" />
                        </div>
                    </div>

                    <!-- Table -->
                    <table id="vendor-table" class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400 border-separate border-spacing-0">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
                            <tr>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M1 20v-2h6v2H1zM1 6V4h22v2H1zm0 7v-2h14v2H1z" fill="#000000"></path></g></svg></th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Name</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Project</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Mobile</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Email</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300">Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($rows = mysqli_fetch_array($result)) { ?>
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b">
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["SL"]); ?></td>
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["Name"]); ?></td>
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["Project"]); ?></td>
                                    <td class="px-6 py-4"><?php echo htmlspecialchars($rows["Mobile"]); ?></td>
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
// Live search function
function searchTable() {
    let input = document.getElementById("simple-search");
    let filter = input.value.toLowerCase();
    let table = document.getElementById("vendor-table");
    let trs = table.getElementsByTagName("tr");

    for (let i = 1; i < trs.length; i++) {
        let td = trs[i].getElementsByTagName("td");
        let showRow = false;
        
        for (let j = 1; j < td.length; j++) {
            if (td[j].textContent.toLowerCase().includes(filter)) {
                showRow = true;
                break;
            }
        }
        
        trs[i].style.display = showRow ? "" : "none";
    }
}
</script>
<?php require_once('footer.php'); ?>

</body>

