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
                            <!-- Cards -->
                            
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
        <!-- Project Templates -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 mt-6">Project Templates</h2>
                <div class="container relative relative group w-full h-full mx-auto px-4">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Card  -->
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full"
                                    >
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                        <!-- Logo/Image Placeholder -->
                                        <img 
                                        src="img/astha.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                        >
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-sm font-medium text-gray-800 truncate">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full"
                                    >
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                        <!-- Logo/Image Placeholder -->
                                        <img 
                                        src="img/astha.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                        >
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-sm font-medium text-gray-800 truncate">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full"
                                    >
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                        <!-- Logo/Image Placeholder -->
                                        <img 
                                        src="img/astha.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                        >
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-sm font-medium text-gray-800 truncate">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full"
                                    >
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                        <!-- Logo/Image Placeholder -->
                                        <img 
                                        src="img/astha.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                        >
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-sm font-medium text-gray-800 truncate">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full"
                                    >
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                        <!-- Logo/Image Placeholder -->
                                        <img 
                                        src="img/astha.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                        >
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-sm font-medium text-gray-800 truncate">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full"
                                    >
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                        <!-- Logo/Image Placeholder -->
                                        <img 
                                        src="img/astha.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                        >
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-sm font-medium text-gray-800 truncate">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full"
                                    >
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                        <!-- Logo/Image Placeholder -->
                                        <img 
                                        src="img/astha.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                        >
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-sm font-medium text-gray-800 truncate">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full"
                                    >
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                        <!-- Logo/Image Placeholder -->
                                        <img 
                                        src="img/astha.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                        >
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-sm font-medium text-gray-800 truncate">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full"
                                    >
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                        <!-- Logo/Image Placeholder -->
                                        <img 
                                        src="img/astha.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                        >
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-sm font-medium text-gray-800 truncate">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full"
                                    >
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                        <!-- Logo/Image Placeholder -->
                                        <img 
                                        src="img/astha.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                        >
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-sm font-medium text-gray-800 truncate">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full"
                                    >
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                        <!-- Logo/Image Placeholder -->
                                        <img 
                                        src="img/astha.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                        >
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-sm font-medium text-gray-800 truncate">Astha</h3>
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
        <!-- Events -->
            <h2 class="text-2xl font-semibold mb-4">Events</h2>
            <section id="tutorials" class="mb-8 px-4 w-full">
                <div class="swiper my-tutorial-swiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="event1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                                </a>
                                <div class="p-5">
                                    <a href="event1.php">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="event1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                                </a>
                                <div class="p-5">
                                    <a href="event1.php">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">AI & Machine Learning Summit</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore the future of AI and how machine learning is revolutionizing industries.</p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                             <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="event1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                                </a>
                                <div class="p-5">
                                    <a href="event1.php">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cybersecurity Expo</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Learn about the latest cybersecurity threats and how to protect your data.</p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="event1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                                </a>
                                <div class="p-5">
                                    <a href="event1.php">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cloud Computing Webinar</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 overflow-hidden">Join experts as they share insights on how cloud computing is transforming businesses.</p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="event1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                                </a>
                                <div class="p-5">
                                    <a href="event1.php">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 6 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="event1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                                </a>
                                <div class="p-5">
                                    <a href="event1.php">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 7 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="event1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                                </a>
                                <div class="p-5">
                                    <a href="event1.php">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 8 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="event1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                                </a>
                                <div class="p-5">
                                    <a href="event1.php">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 9 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="event1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                                </a>
                                <div class="p-5">
                                    <a href="event1.php">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="IT-Tutorials/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Swiper navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- Add Swiper pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>

        <!-- Knowledge Sharing -->
            <h2 class="text-2xl font-semibold mb-4">Knowledge Sharing</h2>
            <section id="knowledge" class="mb-8 px-4">
                
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
                    <a href="knowledge_sharing.php"><h3 class="text-xl font-medium mb-2">Optimizing Your IT Infrastructure</h3></a>
                    <a href="knowledge_sharing.php" class="text-blue-500 hover:underline">Read Article</a>
                </div>
                </div>
            </section>

        <!-- Gender Equality -->
        
            <h2 class="text-2xl font-semibold mb-4">Gender Equality</h2>
            <section id="guidelines" class="mb-8 px-4">
                
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

        <!-- Guest Register -->
                <div class="GScontainer">
                    <a href="#" class="button type--C">
                        <div class="button__line"></div>
                        <div class="button__line"></div>
                        <span class="button__text">Guest Register</span>
                        <div class="button__drow1"></div>
                        <div class="button__drow2"></div>
                    </a>
                </div>


<?php require_once('footer.php') ?>
