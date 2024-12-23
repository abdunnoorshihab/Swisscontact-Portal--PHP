<?php require_once('header.php') ?>

<body class="bg-gray-100">

  <!-- Main Container -->
  <div class="container mx-auto px-4 py-8">
    
    <!-- Header Section -->
    <header class="text-center mb-8">
      <h1 class="text-4xl font-extrabold text-gray-800">Tutorial List</h1>
      <p class="text-gray-500 mt-2">Browse through our collection of tutorials to enhance your skills.</p>
    </header>

    <!-- Tutorials Column -->
    <div class="flex flex-col space-y-4">
      
      <!-- Tutorial Card -->
      <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300">
        <h2 class="text-xl font-bold text-gray-800">Getting Started with Tailwind CSS</h2>
        <p class="text-gray-600 mt-1">Learn the basics of Tailwind CSS and how to integrate it into your projects efficiently.</p>
        <a href="it_tutorials_list_page.php" class="mt-2 text-blue-600 font-medium hover:underline inline-block">Read More »</a>
      </div>

      <!-- Another Tutorial Card -->
      <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300">
        <h2 class="text-xl font-bold text-gray-800">Building Responsive Layouts</h2>
        <p class="text-gray-600 mt-1">Discover how to create fully responsive layouts with Tailwind’s utility classes.</p>
        <a href="it_tutorials_list_page.php" class="mt-2 text-blue-600 font-medium hover:underline inline-block">Read More »</a>
      </div>

      <!-- Yet Another Tutorial Card -->
      <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300">
        <h2 class="text-xl font-bold text-gray-800">Mastering Tailwind Typography</h2>
        <p class="text-gray-600 mt-1">Learn how to style text content elegantly with Tailwind's typography utilities.</p>
        <a href="it_tutorials_list_page.php" class="mt-2 text-blue-600 font-medium hover:underline inline-block">Read More »</a>
      </div>

      <!-- Add More Cards -->
      <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300">
        <h2 class="text-xl font-bold text-gray-800">Advanced Tailwind CSS Techniques</h2>
        <p class="text-gray-600 mt-1">Take your Tailwind CSS skills to the next level with advanced utilities and features.</p>
        <a href="it_tutorials_list_page.php" class="mt-2 text-blue-600 font-medium hover:underline inline-block">Read More »</a>
      </div>

    </div>

  </div>

<?php require_once('footer.php') ?>
