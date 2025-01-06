<?php require_once('header.php') ?>
    <form class="w-full max-w-5xl mx-auto bg-white shadow-lg rounded-lg p-6" action="submit.php" method="POST">
        <!-- Form Header -->
        <div class="text-center border-b pb-4 mb-6">
            <h1 class="text-3xl font-bold text-gray-800">User Information</h1>
        </div>

        <!-- Name Section -->
        <div class="border-b pb-6 mb-6">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Name</h2>
            <div class="flex flex-wrap -mx-3 p-4">
                <!-- First Name -->
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="fname">First Name</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="fname" name="fname" type="text" required>
                </div>
                <!-- Middle Name -->
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="mname">Middle Name</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="mname" name="mname" type="text">
                </div>
                <!-- Last Name -->
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="lname">Last Name</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="lname" name="lname" type="text" required>
                </div>
            </div>
        </div>

        <!-- Designation Section -->
        <div class="border-b pb-6 mb-6">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Professional Information</h2>
            <div class="flex flex-wrap -mx-3 p-4">
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="designation">Designation</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="designation" name="designation" type="text">
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="department">Department</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="department" name="department" type="text">
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="organization">Organization</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="organization" name="org" type="text">
                </div>
            </div>
        </div>

        <!-- Address Section -->
        <div class="border-b pb-6 mb-6">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Address</h2>
            <div class="flex justify-between -mx-3 p-4">
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="street1">Street 1</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="street1" name="st_1" type="text">
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="street2">Street 2</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="street2" name="st_2" type="text">
                </div>
            </div>
            <div class="flex justify-between -mx-3 p-4">
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="city">City</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="city" name="city" type="text">
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="zip">Zip</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="zip" name="zip" type="text">
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="border-b pb-6 mb-6">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Contact</h2>
            <div class="flex flex-wrap -mx-3 p-4">
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="email_1">Email 1</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="email_1" name="email_1" type="email" required>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="contact_1">Contact 1</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="contact_1" name="contact_1" type="contact">
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="telephone">Telephone</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="telephone" name="telephone" type="tel" required>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="email_2">Email 2</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="email_2" name="email_2" type="email">
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="contact_2">Contact 2</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="contact_2" name="contact_2" type="contact">
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6">
                    <label class="block text-gray-600 text-sm font-medium mb-2" for="fax">Fax</label>
                    <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4" 
                           id="fax" name="fax" type="tel">
                </div>
            </div>
        </div>

        <!-- Status Section -->
        <div class="flex justify-between space-x-8 mb-6">
            <div class="border-b pb-6 flex-1">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Status</h2>
                <div class="flex items-center space-x-8">
                    <!-- Active Option -->
                    <div class="flex items-center space-x-3 group">
                        <input id="radio-active" type="radio" value="active" name="status" class="hidden peer" checked>
                        <label for="radio-active" class="flex items-center justify-center w-6 h-6 border-2 border-gray-300 rounded-full peer-checked:border-green-500 peer-checked:bg-green-500 transition duration-200 ease-in-out">
                            <span class="hidden peer-checked:block w-2.5 h-2.5 bg-white rounded-full"></span>
                        </label>
                        <label for="radio-active" class="cursor-pointer text-base font-medium text-gray-700 group-hover:text-green-600 transition duration-200">Active</label>
                    </div>
                    <!-- Inactive Option -->
                    <div class="flex items-center space-x-3 group">
                        <input id="radio-inactive" type="radio" value="inactive" name="status" class="hidden peer">
                        <label for="radio-inactive" class="flex items-center justify-center w-6 h-6 border-2 border-gray-300 rounded-full peer-checked:border-red-500 peer-checked:bg-red-500 transition duration-200 ease-in-out">
                            <span class="hidden peer-checked:block w-2.5 h-2.5 bg-white rounded-full"></span>
                        </label>
                        <label for="radio-inactive" class="cursor-pointer text-base font-medium text-gray-700 group-hover:text-red-600 transition duration-200">Inactive</label>
                    </div>
                </div>
            </div>

            <div class="border-b pb-6 flex-1 relative">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Stakeholders</h2>
    <!-- Hidden input to store selected stakeholder -->
    <input type="hidden" id="selected-stakeholder" name="stakeholders" value="">

    <!-- Dropdown Trigger Button -->
    <button id="stakeholders-btn" class="flex items-center justify-between w-full text-black bg-gray-200 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5" type="button">
        Stakeholders
        <svg class="w-2.5 h-2.5 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
        </svg>
    </button>

    <!-- Dropdown Menu -->
    <div id="stakeholders-menu" class="z-10 hidden absolute top-full mt-2 left-0 w-60 bg-gray-100 rounded-lg shadow-lg">
        <ul class="h-32 py-2 overflow-y-auto text-gray-700 divide-y divide-gray-200" aria-labelledby="">
            <li class="px-4 py-3 flex items-center gap-2 hover:bg-gray-100 cursor-pointer" data-value="User 1">
                <span class="block w-2.5 h-2.5 bg-green-500 rounded-full"></span> User 1
            </li>
            <li class="px-4 py-3 flex items-center gap-2 hover:bg-gray-100 cursor-pointer" data-value="User 2">
                <span class="block w-2.5 h-2.5 bg-red-500 rounded-full"></span> User 2
            </li>
            <li class="px-4 py-3 flex items-center gap-2 hover:bg-gray-100 cursor-pointer" data-value="User 3">
                <span class="block w-2.5 h-2.5 bg-blue-500 rounded-full"></span> User 3
            </li>
            <li class="px-4 py-3 flex items-center gap-2 hover:bg-gray-100 cursor-pointer" data-value="User 4">
                <span class="block w-2.5 h-2.5 bg-yellow-500 rounded-full"></span> User 4
            </li>
        </ul>
    </div>
</div>

<!-- JavaScript -->
<script>
    // Toggle the visibility of the dropdown menu
    document.querySelector("#stakeholders-btn").addEventListener("click", function () {
        document.querySelector("#stakeholders-menu").classList.toggle("hidden");
    });

    // Get all stakeholder list items and set selected stakeholder
    document.querySelectorAll("#stakeholders-menu li").forEach(function (item) {
        item.addEventListener("click", function () {
            const selectedValue = item.getAttribute("data-value"); // Get the stakeholder value
            document.querySelector("#selected-stakeholder").value = selectedValue; // Set hidden input value
            document.querySelector("#stakeholders-menu").classList.add("hidden"); // Hide dropdown
            alert("Selected Stakeholder: " + selectedValue); // Optional: Show selected stakeholder
        });
    });
</script>

        </div>

        <!-- Submit Button -->
        <div class="text-center mb-6">
            <button type="submit" class="bg-green-500 text-white font-medium py-3 px-8 rounded-md shadow-md hover:bg-green-600 transition duration-300 focus:outline-none focus:ring focus:ring-green-300">
                Submit
            </button>
        </div>
    </form>


<?php require_once('footer.php') ?>
