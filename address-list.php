<?php require_once('header.php') ?>
<div class="container mx-auto p-6 bg-gray-50">
    <form class="w-full max-w-5xl mx-auto bg-white shadow-lg rounded-lg p-6">
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
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-first-name">First Name</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300 placeholder-paragraph-style" 
                        id="grid-first-name" type="text" placeholder="">
                    </div>
                    <!-- Middle Name -->
                    <div class="w-full md:w-1/3 px-3 mb-6">
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-middle-name">Middle Name</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300 placeholder-paragraph-style" 
                        id="grid-stakeholder" type="text" placeholder="">
                    </div>
                    <!-- Last Name -->
                    <div class="w-full md:w-1/3 px-3 mb-6">
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-last-name">Last Name</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300 placeholder-paragraph-style" 
                        id="grid-stakeholder" type="text" placeholder="">
                    </div>
                </div>
            </div>
        <!-- Designation and Organization Section -->
            <div class="border-b pb-6 mb-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Professional Information</h2>
                <div class="flex flex-wrap -mx-3 p-4">
                    <div class="w-full md:w-1/3 px-3 mb-6">
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-designation">Designation</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300 placeholder-paragraph-style" 
                        id="grid-designation" type="text" placeholder="Manager">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6">
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-designation">Department</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300 placeholder-paragraph-style" 
                        id="grid-department" type="text" placeholder="Astha">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6">
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-organization">Organization</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300 placeholder-paragraph-style" 
                        id="grid-organization" type="text" placeholder="ABC Corporation">
                    </div>
                </div>
            </div>
        <!-- Address Section -->
            <div class="border-b pb-6 mb-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Address</h2>
                <div class="flex flex-wrap -mx-3 p-4">
                    <!-- House/Road -->
                    <div class="w-full lg:w-1/2 px-3">
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-address-1-house">Street-1</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300 placeholder-paragraph-style" 
                            id="grid-address-1-house" type="text" placeholder="House/Block">
                    </div>
                    <!-- City -->
                    <div class="w-full lg:w-1/2 px-3">
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-address-1-city">Street-2</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300 placeholder-paragraph-style" 
                            id="grid-address-1-city" type="text" placeholder="Road/Street">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 p-4">
                    <!-- House/Road -->
                    <div class="w-full lg:w-1/2 px-3">
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-address-1-house">City</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300 placeholder-paragraph-style" 
                            id="grid-address-1-house" type="text" placeholder="City">
                    </div>
                    <!-- City -->
                    <div class="w-full lg:w-1/2 px-3">
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-address-1-city">Zip Code</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300 placeholder-paragraph-style" 
                            id="grid-address-1-city" type="text" placeholder="1000">
                    </div>
                </div>
            </div>
        <!-- Contact Information Section -->
            <div class="border-b pb-6 mb-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Contact Information</h2>
                <div class="flex flex-wrap -mx-3 p-4">
                    <!-- Email Section -->
                    <div class="w-full md:w-1/2 px-3 mb-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Email</h3>
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-email-1">Email Address 1</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300" 
                            id="grid-email-1" type="email" placeholder="Enter your email">
                        <label class="block text-gray-600 text-sm font-medium mt-4 mb-2" for="grid-email-2">Email Address 2</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300" 
                            id="grid-email-2" type="email" placeholder="Enter another email">
                    </div>

                    <!-- Contact Number Section -->
                    <div class="w-full md:w-1/2 px-3 mb-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Contact Numbers</h3>
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-contact-1">Contact Number 1</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300" 
                            id="grid-contact-1" type="tel" placeholder="Enter contact number">
                        <label class="block text-gray-600 text-sm font-medium mt-4 mb-2" for="grid-contact-2">Contact Number 2</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300" 
                            id="grid-contact-2" type="tel" placeholder="Enter second contact number">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 p-4">
                    <!-- Telephone Section -->
                    <div class="w-full md:w-1/2 px-3 mb-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Telephone</h3>
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-email-1">Telephone Number</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300" 
                            id="grid-email-1" type="email" placeholder="Enter your telephone number">
                    </div>

                    <!-- Fax Number Section -->
                    <div class="w-full md:w-1/2 px-3 mb-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Fax Number</h3>
                        <label class="block text-gray-600 text-sm font-medium mb-2" for="grid-contact-1">Fax Number</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-md py-3 px-4 focus:ring focus:ring-green-200 transition duration-300" 
                            id="grid-contact-1" type="tel" placeholder="Enter fax number">
                    </div>
                </div>
            </div>

        <!-- Status Section -->
            <div class="flex justify-between space-x-8">
                <!-- Status Section -->
                <div class="border-b pb-6 mb-6 flex-1">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Status</h2>
                    <div class="flex items-center space-x-8">
                        <!-- Active Option -->
                        <div class="flex items-center space-x-3 group">
                            <input id="radio-active" type="radio" value="active" name="status" class="hidden peer">
                            <label for="radio-active" 
                                class="flex items-center justify-center w-6 h-6 border-2 border-gray-300 rounded-full peer-checked:border-green-500 peer-checked:bg-green-500 transition duration-200 ease-in-out">
                                <span class="hidden peer-checked:block w-2.5 h-2.5 bg-white rounded-full"></span>
                            </label>
                            <label for="radio-active" 
                                class="cursor-pointer text-base font-medium text-gray-700 group-hover:text-green-600 transition duration-200">
                                Active
                            </label>
                        </div>
                        <!-- Inactive Option -->
                        <div class="flex items-center space-x-3 group">
                            <input id="radio-inactive" type="radio" value="inactive" name="status" checked class="hidden peer">
                            <label for="radio-inactive" 
                                class="flex items-center justify-center w-6 h-6 border-2 border-gray-300 rounded-full peer-checked:border-red-500 peer-checked:bg-red-500 transition duration-200 ease-in-out">
                                <span class="hidden peer-checked:block w-2.5 h-2.5 bg-white rounded-full"></span>
                            </label>
                            <label for="radio-inactive" 
                                class="cursor-pointer text-base font-medium text-gray-700 group-hover:text-red-600 transition duration-200">
                                Inactive
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Stakeholders Section -->
                <div class="border-b pb-6 mb-6 flex-1 relative">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Stakeholders</h2>
                    <!-- Dropdown Trigger Button -->
                    <button id="dropdownUsersButton" 
                        class="flex items-center justify-between w-full text-black bg-gray-200 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" 
                        type="button">
                        Stakeholders
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="dropdownUsers" 
                    class="z-10 hidden absolute top-full mt-2 left-0 w-60 bg-gray-100 rounded-lg shadow-lg dark:bg-gray-700">
                    <ul class="h-32 py-2 overflow-y-auto text-gray-700 dark:text-gray-200 divide-y divide-gray-200 dark:divide-gray-600" aria-labelledby="dropdownUsersButton">
                        <!-- Dynamic User List -->
                        <li class="px-4 py-3 flex items-center gap-2 hover:bg-gray-100 dark:hover:bg-gray-600 cursor-pointer">
                            <span class="block w-2.5 h-2.5 bg-green-500 rounded-full"></span>
                            User 1
                        </li>
                        <li class="px-4 py-3 flex items-center gap-2 hover:bg-gray-100 dark:hover:bg-gray-600 cursor-pointer">
                            <span class="block w-2.5 h-2.5 bg-red-500 rounded-full"></span>
                            User 2
                        </li>
                        <li class="px-4 py-3 flex items-center gap-2 hover:bg-gray-100 dark:hover:bg-gray-600 cursor-pointer">
                            <span class="block w-2.5 h-2.5 bg-blue-500 rounded-full"></span>
                            User 3
                        </li>
                        <li class="px-4 py-3 flex items-center gap-2 hover:bg-gray-100 dark:hover:bg-gray-600 cursor-pointer">
                            <span class="block w-2.5 h-2.5 bg-yellow-500 rounded-full"></span>
                            User 4
                        </li>
                        <!-- Add more users here -->
                    </ul>
                    <a href="#" 
                        class="flex items-center justify-center gap-2 p-3 text-sm font-medium text-blue-600 border-t border-gray-200 bg-gray-50 rounded-b-lg dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-500 hover:underline">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z" />
                        </svg>
                        Add new user
                    </a>
                </div>

                </div>

            </div>

            <script>
                document.getElementById("dropdownUsersButton").addEventListener("click", function () {
                    const dropdown = document.getElementById("dropdownUsers");
                    dropdown.classList.toggle("hidden");
                });

            </script>

            <style>
                /* Apply paragraph style to placeholder text */
                .placeholder-paragraph-style::placeholder {
                    text-align: justify;
                    line-height: 1.6;
                    font-size: 1rem;
                    color: #6b7280; /* Slightly lighter gray for placeholder */
                }
            </style>


        <!-- Submit Button -->
            <div class="text-center mb-6">
                <button type="submit" class="bg-green-500 text-white font-medium py-3 px-8 rounded-md shadow-md hover:bg-green-600 transition duration-300 focus:outline-none focus:ring focus:ring-green-300">
                    Submit
                </button>
            </div>

    </form>
</div>
<?php require_once('footer.php') ?>
