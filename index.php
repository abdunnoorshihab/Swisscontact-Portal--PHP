<?php require_once('header.php') ?>
    <div class="bg-gray-100 md:container md:mx-auto">
        <!-- Main Content -->
            <main class="container mx-auto px-6 py-8">
        <!-- Banner -->
            <div class="relative max-w-full overflow-hidden">
            
                <div id="carousel" class="flex w-[500%] transition-transform duration-500">
                    <div class="w-full flex-shrink-0">
                    <img class="w-full h-96 object-fill rounded-lg" src="img/banner---11.jpeg" alt="Slide 1">
                    </div>
                    <div class="w-full flex-shrink-0">
                    <img class="w-full h-96 object-cover rounded-lg" src="img/banner2.png" alt="Slide 2">
                    </div>
                    <div class="w-full flex-shrink-0">
                    <img class="w-full h-96 object-cover rounded-lg" src="img/banner2.png" alt="Slide 3">
                    </div>
                    <div class="w-full flex-shrink-0">
                    <img class="w-full h-96 object-cover rounded-lg" src="img/banner2.png" alt="Slide 4">
                    </div>
                    <div class="w-full flex-shrink-0">
                    <img class="w-full h-96 object-cover rounded-lg" src="img/banner2.png" alt="Slide 5">
                    </div>
                </div>

            <!-- Navigation Buttons -->
            <button
                id="prev"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-500 bg-opacity-50 text-white p-2 rounded-full z-10">
                &#10094;
            </button>
            <button
                id="next"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-500 bg-opacity-50 text-white p-2 rounded-full z-10">
                &#10095;
            </button>

            <!-- Pagination Dots -->
            <div id="pagination" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            </div>
            </div>


        <!-- Quick Links -->
            <style>
                .swiper-slide{
                    height:120px;
                }
                .swiper-wrapper{
                    height: 120px;
                }
            </style>
            <section>
                <h2 class="text-2xl font-semibold mb-4 mt-6">Quick Links</h2>
                <div class="container relative relative group w-full h-full mx-auto px-4">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Card 1 -->
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64">
                                <a href="#guidelines" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center relative items-center full">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="pb-2">
                                        <h3 class="text-xs absulate text-center">Swisscontact Bangladesh</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64 h-30">
                                <a href="#guidelines" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-xs text-center">IT Requisition</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide  rounded-lg shadow-lg overflow-hidden w-64 h-30">
                                <a href="#guidelines" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-xs text-center">Staff Directory</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide  rounded-lg shadow-lg overflow-hidden w-64 h-30">
                                <a href="#guidelines" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-xs text-center">MIS SCBD</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64 h-30">
                                <a href="#guidelines" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="py-3">
                                        <h3 class="text-xs text-center">Request For Proposal</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide  rounded-lg shadow-lg overflow-hidden w-64 h-30">
                                <a href="#guidelines" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="pb-2">
                                        <h3 class="text-xs text-center">Microsoft Sign in Security Authanticator</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide  rounded-lg shadow-lg overflow-hidden w-64 h-30">
                                <a href="#guidelines" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-xs text-center">Sharepoint</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64 h-30">
                                <a href="#guidelines" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-xs text-center">MIS SCBD</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64 h-30">
                                <a href="#guidelines" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="py-3">
                                        <h3 class="text-xs text-center">Request For Proposal</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide  rounded-lg shadow-lg overflow-hidden w-64 h-30">
                                <a href="#guidelines" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="pb-2">
                                        <h3 class="text-xs text-center">Microsoft Sign in Security Authanticator</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide  rounded-lg shadow-lg overflow-hidden w-64 h-30">
                                <a href="#guidelines" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-xs text-center">Sharepoint</h3>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Swiper Navigation buttons -->
                        
                            <!-- Swiper Button Next -->
                            <div class="swiper-button-next text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            
                            <!-- Swiper Button Prev -->
                            <div class="swiper-button-prev text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        


                        <!-- Swiper Pagination -->
                        <!-- <div style="pt-20;"class="swiper-pagination"></div> -->
                    </div>
                </div>
            </section>

        <!-- Forms & Templates -->
            <div class="container mx-auto p-2">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">Forms & Templates</h1>

                <!-- Search Bar -->

                <div class="flex justify-between mb-5">
                <div class="w-full">
                    <div class="relative w-full max-w-md">
                        <input
                            id="search_text_forms" 
                            type="text"
                            class="w-full p-3 border rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Search for forms..."
                        />
                        <button class="absolute right-3 top-3 text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="w-full flex justify-end">
                    <button type="button" class="py-2 px-2 w-1/4 text-sm font-semibold text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    <a href="forms.php">Show all Forms</a>
                    </button>
                </div>

                </div>
                
                <!-- Results Table -->
                <div id="result_forms" class="bg-white shadow-lg rounded-lg overflow-hidden h-60"> <!-- Changed ID -->
                    <!-- Fetched data will load here -->
                </div>

            </div>
        <!-- Staff Directory Section -->
            <div class="container mx-auto p-2">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">Staff Directory</h1>

                <!-- Search Bar -->

                <div class="flex justify-between mb-5">
                <div class="w-full">
                    <div class="relative w-full max-w-md">
                        <input
                            id="search_text_staff" 
                            type="text"
                            class="w-full p-3 border rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Search for forms..."
                        />
                        <button class="absolute right-3 top-3 text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="w-full flex justify-end">
                    <button type="button" class="py-2 px-2 w-1/4 text-sm font-semibold text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    <a href="staff-list.php">Show all Staffs</a>
                    </button>
                </div>

                </div>

                <!-- Results Table -->
                <div id="result_staff" class="bg-white shadow-lg rounded-lg overflow-hidden h-60"> <!-- Changed ID -->
                    <!-- Fetched data will load here -->
                </div>

            </div>
        <!-- Vendors Section -->
            <div class="container mx-auto p-2">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">Vendors</h1>

                <!-- Search Bar -->

                <div class="flex justify-between mb-5">
                    <div class="w-full">
                        <div class="relative w-full max-w-md">
                            <input
                                id="search_text_vendor" 
                                type="text"
                                class="w-full p-3 border rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Search for Vendors..."
                            />
                            <button class="absolute right-3 top-3 text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="w-full flex justify-end">
                        <button type="button" class="py-2 px-2 w-1/4 text-sm font-semibold text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        <a href="staff-list.php">Show all Vendors</a>
                        </button>
                    </div>

                    </div>

                <!-- Results Table -->
                    <div id="result_vendor" class="bg-white shadow-lg rounded-lg overflow-hidden h-60">
                        <!-- Fetched data will load here -->
                    </div>
            </div>

        <!-- Project Templates -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 mt-6">Project Templates</h2>
                <div class="container relative relative group w-full h-full mx-auto px-4">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Card 1 -->
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a href="Project-page.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/astha.png" alt="Placeholder Image" class="w-24 h-24 object-cover flex m-auto">

                                    </div>
                                    <div class="">
                                        <h3 class="text-xs text-center">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a href="Project-page.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/astha.png" alt="Placeholder Image" class="w-24 h-24 object-cover flex m-auto">

                                    </div>
                                    <div class="">
                                        <h3 class="text-xs text-center">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a href="Project-page.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/astha.png" alt="Placeholder Image" class="w-24 h-24 object-cover flex m-auto">

                                    </div>
                                    <div class="">
                                        <h3 class="text-xs text-center">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a href="Project-page.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/astha.png" alt="Placeholder Image" class="w-24 h-24 object-cover flex m-auto">

                                    </div>
                                    <div class="">
                                        <h3 class="text-xs text-center">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a href="Project-page.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/astha.png" alt="Placeholder Image" class="w-24 h-24 object-cover flex m-auto">

                                    </div>
                                    <div class="">
                                        <h3 class="text-xs text-center">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a href="Project-page.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/astha.png" alt="Placeholder Image" class="w-24 h-24 object-cover flex m-auto">

                                    </div>
                                    <div class="">
                                        <h3 class="text-xs text-center">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a href="Project-page.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/astha.png" alt="Placeholder Image" class="w-24 h-24 object-cover flex m-auto">

                                    </div>
                                    <div class="">
                                        <h3 class="text-xs text-center">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a href="Project-page.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/astha.png" alt="Placeholder Image" class="w-24 h-24 object-cover flex m-auto">

                                    </div>
                                    <div class="">
                                        <h3 class="text-xs text-center">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a href="Project-page.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/astha.png" alt="Placeholder Image" class="w-24 h-24 object-cover flex m-auto">

                                    </div>
                                    <div class="">
                                        <h3 class="text-xs text-center">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a href="Project-page.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/astha.png" alt="Placeholder Image" class="w-24 h-24 object-cover flex m-auto">

                                    </div>
                                    <div class="">
                                        <h3 class="text-xs text-center">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a href="Project-page.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition  flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/astha.png" alt="Placeholder Image" class="w-24 h-24 object-cover flex m-auto">

                                    </div>
                                    <div class="">
                                        <h3 class="text-xs text-center">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            
                            

                            <!-- Add more cards here -->
                        </div>

                        <!-- Swiper Navigation buttons -->
                        
                            <!-- Swiper Button Next -->
                            <div class="swiper-button-next text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            
                            <!-- Swiper Button Prev -->
                            <div class="swiper-button-prev text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        


                        <!-- Swiper Pagination -->
                        <!-- <div style="pt-20;"class="swiper-pagination"></div> -->
                    </div>
                </div>
            </section>
        <!-- Events -->
           
            <section id="tutorials" class="mb-8 w-full">
                <h2 class="text-2xl font-semibold mb-4">Events</h2>
                <div class="swiper my-tutorial-swiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="IT-Tutorials/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/VPN.png" alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="IT-Tutorials/card1.php" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        How to Use the New VPN
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                    </p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="IT-Tutorials/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/troubleshooting.jpg" alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="IT-Tutorials/card1.php" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        How to Use the New VPN
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                    </p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="IT-Tutorials/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/VPN.png" alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="IT-Tutorials/card1.php" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        How to Use the New VPN
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                    </p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="IT-Tutorials/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/setting-up-emails-picture.jpg" alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="IT-Tutorials/card1.php" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        How to Use the New VPN
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                    </p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="IT-Tutorials/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/VPN.png" alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="IT-Tutorials/card1.php" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        How to Use the New VPN
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                    </p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 6 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="IT-Tutorials/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/VPN.png" alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="IT-Tutorials/card1.php" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        How to Use the New VPN
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                    </p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 7 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="IT-Tutorials/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/VPN.png" alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="IT-Tutorials/card1.php" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        How to Use the New VPN
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                    </p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 8 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="IT-Tutorials/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/VPN.png" alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="IT-Tutorials/card1.php" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        How to Use the New VPN
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                    </p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 9 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="IT-Tutorials/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/VPN.png" alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="IT-Tutorials/card1.php" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        How to Use the New VPN
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                    </p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat similar slides for card2, card3, card4 -->
                    </div>
                    <!-- Add Swiper navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- Add Swiper pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>

        <!-- Knowledge Sharing -->
            <section id="knowledge" class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Knowledge Sharing</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-2">Best Practices for Data Security</h3>
                    <a href="knowledge_sharing.php" class="text-blue-500 hover:underline">Read Article</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-2">Effective IT Communication Strategies</h3>
                    <a href="knowledge_sharing.php" class="text-blue-500 hover:underline">Read Article</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-2">Optimizing Your IT Infrastructure</h3>
                    <a href="knowledge_sharing.php" class="text-blue-500 hover:underline">Read Article</a>
                </div>
                </div>
            </section>

        <!-- Gender Equality -->
            <section id="guidelines" class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Gender Equality</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Guideline Card -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-2"><a href="gender_equality.php">Policies</a></h3>
                    <p class="text-gray-600">Ensure all data is protected according to the company's data protection policies.<br><a href="gender_equality.php" class="text-blue-500 hover:underline">Read More</a>
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-2">E-Learning Course</h3>
                    <p class="text-gray-600">Only authorized personnel should have access to critical systems and information.<br><a href="gender_equality.php" class="text-blue-500 hover:underline">Read More</a>
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-2">Incident Reporting</h3>
                    <p class="text-gray-600">Report any incidents immediately to ensure swift resolution.<br><a href="gender_equality.php" class="text-blue-500 hover:underline">Read More</a></p>
                </div>
                </div>
            </section>
  </div>
<?php require_once('footer.php') ?>
