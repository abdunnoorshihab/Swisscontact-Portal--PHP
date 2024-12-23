<?php require_once('header.php') ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    /* Apply global font styling */
    body {
      font-family: "Raleway", sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Main Container -->
  <div class="container mx-auto px-4 py-8">

    <!-- Header -->
    <header class="border-b border-gray-300 pb-6 mb-6">
      <h1 class="text-5xl font-bold text-gray-800 text-center mb-4">Best Practices for Data Security</h1>
      <p class="text-center text-gray-600 text-sm italic">Updated on <span class="font-medium">April 7, 2014</span></p>
    </header>

    <!-- News Article -->
    <article class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">

      <!-- Image Section -->
      <img 
        src="https://www.matc.edu/course-catalog/stem/it-computer-support-specialist_aas_procard_2016-17_107946.png" 
        alt="Data Security Illustration" 
        class="w-full h-64 object-cover"
      >

      <!-- Content Section -->
      <div class="p-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">TITLE HEADING</h2>
        <p class="text-gray-500 text-sm mb-6">By <span class="font-medium">John Doe</span> | <span class="italic">April 7, 2014</span></p>
        
        <p class="text-gray-700 leading-relaxed mb-6">
          In today's digital age, online privacy and security are more important than ever. Whether you're concerned 
          about protecting your personal information on public Wi-Fi, accessing geo-restricted content, or just 
          maintaining privacy while browsing, a Virtual Private Network (VPN) can provide the protection you need. 
        </p>
        <p class="text-gray-700 leading-relaxed mb-6">
          If you’ve recently acquired a new VPN service and are unsure how to set it up and use it, don't worry! This 
          guide will walk you through the entire process, helping you get the most out of your investment in online 
          security and privacy.
        </p>

        <!-- Action Section -->
        <div class="flex justify-between items-center border-t border-gray-300 pt-6">
          <button class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-md shadow-md hover:from-blue-600 hover:to-blue-800 transform transition-transform hover:scale-105 focus:ring-4 focus:ring-blue-300">
            READ MORE »
          </button>
          <div class="text-gray-600">
            <span class="font-bold">Comments:</span> 
            <span class="bg-gray-200 text-gray-800 rounded-full px-3 py-1 ml-1">0</span>
          </div>
        </div>
      </div>
    </article>
  </div>



<?php require_once('footer.php') ?>
