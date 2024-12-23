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
                            
                            <div class="swiper-slide rounded-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full">
                
                                    <!-- Logo/Image Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                        <div class="p-3">
                                            <h3 class="text-xs text-center">IT Requisition</h3>
                                        </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full">
                
                                    <!-- Logo/Image Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                        <div class="p-3">
                                            <h3 class="text-xs text-center">IT Requisition</h3>
                                        </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full">
                
                                    <!-- Logo/Image Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                        <div class="p-3">
                                            <h3 class="text-xs text-center">IT Requisition</h3>
                                        </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full">
                
                                    <!-- Logo/Image Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                        <div class="p-3">
                                            <h3 class="text-xs text-center">IT Requisition</h3>
                                        </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full">
                
                                    <!-- Logo/Image Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                        <div class="p-3">
                                            <h3 class="text-xs text-center">IT Requisition</h3>
                                        </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full">
                
                                    <!-- Logo/Image Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                        <div class="p-3">
                                            <h3 class="text-xs text-center">IT Requisition</h3>
                                        </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full">
                
                                    <!-- Logo/Image Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                        <div class="p-3">
                                            <h3 class="text-xs text-center">IT Requisition</h3>
                                        </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg overflow-hidden">
                                <a 
                                    href="#" 
                                    class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full">
                
                                    <!-- Logo/Image Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                        <div class="p-3">
                                            <h3 class="text-xs text-center">IT Requisition</h3>
                                        </div>
                                </a>
                            </div>
                             
                        </div>

                        <!-- Swiper Navigation buttons -->
                     
                            <div class="swiper-button-next text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div> 
                            <div class="swiper-button-prev text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                    </div>
                </div>
            </section>
        <!-- Project Templates -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 mt-6">Projects</h2>
                <div class="container relative relative group w-full h-full mx-auto px-4">
                    <div class="swiper mySwiper1">
                        <div class="swiper-wrapper">
                            <!-- Card  -->
                            <div class="swiper-slide bg-white p-4 rounded-lg shadow-sm hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                                <a 
                                    href="Project-page.php" 
                                    class="">
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                    <!-- Logo/Image Placeholder -->
                                    <img 
                                        src="img/bmmdp.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                    >
                                    </div>
                                    <div class="text-center">
                                    <h3 class="text-sm font-medium text-gray-800 truncate">BMMDB</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide bg-white p-4 rounded-lg shadow-sm hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                                <a 
                                    href="#" 
                                    class="">
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                    <!-- Logo/Image Placeholder -->
                                    <img 
                                        src="img/bmmdp.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                    >
                                    </div>
                                    <div class="text-center">
                                    <h3 class="text-sm font-medium text-gray-800 truncate">BMMDB</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide bg-white p-4 rounded-lg shadow-sm hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                                <a 
                                    href="#" 
                                    class="">
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                    <!-- Logo/Image Placeholder -->
                                    <img 
                                        src="img/bmmdp.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                    >
                                    </div>
                                    <div class="text-center">
                                    <h3 class="text-sm font-medium text-gray-800 truncate">BMMDB</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide bg-white p-4 rounded-lg shadow-sm hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                                <a 
                                    href="#" 
                                    class="">
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                    <!-- Logo/Image Placeholder -->
                                    <img 
                                        src="img/bmmdp.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                    >
                                    </div>
                                    <div class="text-center">
                                    <h3 class="text-sm font-medium text-gray-800 truncate">BMMDB</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide bg-white p-4 rounded-lg shadow-sm hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                                <a 
                                    href="#" 
                                    class="">
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                    <!-- Logo/Image Placeholder -->
                                    <img 
                                        src="img/bmmdp.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                    >
                                    </div>
                                    <div class="text-center">
                                    <h3 class="text-sm font-medium text-gray-800 truncate">BMMDB</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide bg-white p-4 rounded-lg shadow-sm hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                                <a 
                                    href="#" 
                                    class="">
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                    <!-- Logo/Image Placeholder -->
                                    <img 
                                        src="img/bmmdp.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                    >
                                    </div>
                                    <div class="text-center">
                                    <h3 class="text-sm font-medium text-gray-800 truncate">BMMDB</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide bg-white p-4 rounded-lg shadow-sm hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                                <a 
                                    href="#" 
                                    class="">
                                    <div class="flex justify-center items-center h-2/3 mb-2">
                                    <!-- Logo/Image Placeholder -->
                                    <img 
                                        src="img/bmmdp.png" 
                                        alt="Project Logo" 
                                        class="w-40 h-16 object-contain"
                                    >
                                    </div>
                                    <div class="text-center">
                                    <h3 class="text-sm font-medium text-gray-800 truncate">BMMDB</h3>
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
            <div class="flex justify-between">
                <h2 class="text-2xl font-semibold mb-4">Events</h2>
                <div class="justify-end w-full flex mb-5">
                <button 
                    type="button" 
                    class="relative flex items-center justify-center py-2 px-4 w-1/7 text-sm font-semibold text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md transition-transform transform hover:from-blue-700 hover:to-blue-600 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 group">
                    <a href="all_events.php" class="w-full text-center flex items-center justify-center">
                        Show All Events
                        <!-- Arrow -->
                        <span 
                        class="ml-2 transform transition-transform translate-x-0 opacity-0 group-hover:translate-x-2 group-hover:opacity-100 duration-300 ease-in-out">
                        »
                        </span>
                    </a>
                </button>


                </div>

            </div>
            
            <section id="tutorials" class="mb-8 px-4 w-full">
                <div class="swiper my-tutorial-swiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-scroll h-96 hide-scrollbar">
                                <a href="Events/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                               
                                    <div class="p-5">
                                    
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="Events/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                    </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-scroll h-96 hide-scrollbar">
                                <a href="Events/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                               
                                    <div class="p-5">
                                    
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="Events/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                    </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-scroll h-96 hide-scrollbar">
                                <a href="Events/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                               
                                    <div class="p-5">
                                    
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="Events/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                    </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-scroll h-96 hide-scrollbar">
                                <a href="Events/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                               
                                    <div class="p-5">
                                    
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="Events/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                    </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-scroll h-96 hide-scrollbar">
                                <a href="Events/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                               
                                    <div class="p-5">
                                    
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="Events/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                    </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-scroll h-96 hide-scrollbar">
                                <a href="Events/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                               
                                    <div class="p-5">
                                    
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="Events/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                    </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-scroll h-96 hide-scrollbar">
                                <a href="Events/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                               
                                    <div class="p-5">
                                    
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="Events/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                    </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-scroll h-96 hide-scrollbar">
                                <a href="Events/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                               
                                    <div class="p-5">
                                    
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="Events/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                    </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-scroll h-96 hide-scrollbar">
                                <a href="Events/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                               
                                    <div class="p-5">
                                    
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="Events/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                    </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-scroll h-96 hide-scrollbar">
                                <a href="Events/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                               
                                    <div class="p-5">
                                    
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="Events/card1.php"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </a>
                                    </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-scroll h-96 hide-scrollbar">
                                <a href="Events/card1.php">
                                    <img class="rounded-t-lg h-48 w-full" src="img/event1.jpg" alt="Event 1" />
                               
                                    <div class="p-5">
                                    
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tech Conference 2024</h5>
                                </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Join industry leaders as they discuss the latest trends in technology and innovation.</p>
                                    <a href="Events/card1.php"
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
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 mt-6">Knowledge Sharing</h2>
                <div class="container relative group w-full h-full mx-auto">
                    <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide p-4 rounded-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h3 class="text-xl font-medium mb-2">Best Practices for Data Security</h3>
                            <a href="knowledge_sharing.php" class="text-blue-500 hover:underline">Read Article</a>
                        </div>
                        </div>
                        <div class="swiper-slide p-4 rounded-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h3 class="text-xl font-medium mb-2">Best Practices for Data Security</h3>
                            <a href="knowledge_sharing.php" class="text-blue-500 hover:underline">Read Article</a>
                        </div>
                        </div>
                        <div class="swiper-slide p-4 rounded-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h3 class="text-xl font-medium mb-2">Best Practices for Data Security</h3>
                            <a href="knowledge_sharing.php" class="text-blue-500 hover:underline">Read Article</a>
                        </div>
                        </div>
                        <div class="swiper-slide p-4 rounded-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h3 class="text-xl font-medium mb-2">Best Practices for Data Security</h3>
                            <a href="knowledge_sharing.php" class="text-blue-500 hover:underline">Read Article</a>
                        </div>
                        </div>
                        <div class="swiper-slide p-4 rounded-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h3 class="text-xl font-medium mb-2">Best Practices for Data Security</h3>
                            <a href="knowledge_sharing.php" class="text-blue-500 hover:underline">Read Article</a>
                        </div>
                        </div>
                        <!-- Repeat other slides -->
                    </div>
                    <!-- Swiper Navigation Buttons -->
                    <div class="swiper-button-next text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="swiper-button-prev text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                </div>
            </section>
        <!-- Gender Equality -->
            <h2 class="text-2xl font-semibold mb-4">Gender Equality</h2>
            <section class="mb-8">
                <div class="container relative group w-full h-full mx-auto">
                    <div class="swiper mySwiper3">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide p-4 rounded-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                            <div class="bg-white p-6 rounded-lg shadow">
                                <h3 class="text-xl font-medium mb-2"><a href="gender_equality.php">Policies</a></h3>
                                <p class="text-gray-600">Ensure all data is protected according to the company's data protection policies.<br><a href="gender_equality.php" class="text-blue-500 hover:underline">Read More</a>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide p-4 rounded-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                            <div class="bg-white p-6 rounded-lg shadow">
                                <h3 class="text-xl font-medium mb-2">E-Learning Course</h3>
                                <p class="text-gray-600">Only authorized personnel should have access to ...<br><a href="gender_equality.php" class="text-blue-500 hover:underline">Read More</a>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide p-4 rounded-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                            <div class="bg-white p-6 rounded-lg shadow">
                                <h3 class="text-xl font-medium mb-2">Incident Reporting</h3>
                                <p class="text-gray-600">Report any incidents immediately to ensure swift resolution.<br><a href="gender_equality.php" class="text-blue-500 hover:underline">Read More</a></p>
                            </div>
                        </div>
                        <div class="swiper-slide p-4 rounded-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                            <div class="bg-white p-6 rounded-lg shadow">
                                <h3 class="text-xl font-medium mb-2">E-Learning Course</h3>
                                <p class="text-gray-600">Only authorized personnel should have access to ...<br><a href="gender_equality.php" class="text-blue-500 hover:underline">Read More</a>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide p-4 rounded-lg hover:shadow-xl transition flex flex-col items-center justify-between h-full overflow-hidden">
                            <div class="bg-white p-6 rounded-lg shadow">
                                <h3 class="text-xl font-medium mb-2">Incident Reporting</h3>
                                <p class="text-gray-600">Report any incidents immediately to ensure swift resolution.<br><a href="gender_equality.php" class="text-blue-500 hover:underline">Read More</a></p>
                            </div>
                        </div>
                        
                        <!-- Repeat other slides -->
                    </div>
                    <!-- Swiper Navigation Buttons -->
                    <div class="swiper-button-next text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="swiper-button-prev text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                </div>      
            </section>


<?php require_once('footer.php') ?>
