<?php require_once('header.php') ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <style>
    body {
      font-family: "Raleway", sans-serif;
    }
  </style>
<body class="bg-gray-50">

  <!-- Main Container -->
  <div class="container mx-auto px-6 py-12">

    <!-- Header Section -->
    <header class="text-center mb-12">
      <h1 class="text-5xl font-extrabold text-gray-800 mb-4">Best Practices for Data Security</h1>
      <p class="text-gray-500 italic">Stay informed, stay secure — Updated on <span class="font-medium">April 7, 2014</span></p>
    </header>

    <!-- Article Section -->
    <article class="bg-white shadow-lg rounded-lg overflow-hidden max-w-4xl mx-auto">
      
      <!-- Image Banner -->
      <div class="relative">
        <img 
          src="https://www.matc.edu/course-catalog/stem/it-computer-support-specialist_aas_procard_2016-17_107946.png" 
          alt="Data Security Illustration" 
          class="w-full h-72 object-cover"
        >
        <div class="absolute bottom-0 left-0 bg-gradient-to-t from-gray-900 to-transparent w-full p-4 text-white">
          <h2 class="text-2xl font-bold">TITLE HEADING</h2>
          <p class="text-sm italic">By <span class="font-medium">John Doe</span> | April 7, 2014</p>
        </div>
      </div>

      <!-- Article Content -->
      <div class="p-8">
        <p class="text-gray-700 leading-relaxed mb-4">
          In today's digital age, online privacy and security are more important than ever. Whether you're concerned 
          about protecting your personal information on public Wi-Fi, accessing geo-restricted content, or just 
          maintaining privacy while browsing, a Virtual Private Network (VPN) can provide the protection you need.
        </p>
        <p class="text-gray-700 leading-relaxed mb-4">
          If you’ve recently acquired a new VPN service and are unsure how to set it up and use it, don't worry! This 
          guide will walk you through the entire process, helping you get the most out of your investment in online 
          security and privacy.
        </p>
        <p class="text-gray-700 leading-relaxed">
          Beyond VPNs, practicing good digital hygiene, such as using strong passwords, enabling two-factor 
          authentication, and staying vigilant against phishing attacks, can significantly enhance your overall 
          cybersecurity.
        </p>
      </div>

      <!-- Footer Actions -->
      <div class="bg-gray-100 p-6 flex flex-col md:flex-row justify-between items-center">
        <a href="https://www.un.org/sustainabledevelopment/gender-equality/">
        <button class="bg-blue-600 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:bg-blue-700 transition">
          READ MORE »
        </button>
        </a>
        <div class="mt-4 md:mt-0 text-gray-600">
          <span class="font-bold">Comments:</span> 
          <span class="bg-gray-200 text-gray-800 rounded-full px-3 py-1 ml-2">0</span>
        </div>
      </div>

    </article>

    <!-- Related Articles Section -->
    <section class="mt-12">
      <h3 class="text-2xl font-semibold text-gray-800 mb-6">Related Articles</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Related Article Card -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img 
            src="https://via.placeholder.com/300" 
            alt="Article Thumbnail" 
            class="w-full h-48 object-cover"
          >
          <div class="p-4">
            <h4 class="text-lg font-bold text-gray-800">Understanding Cyber Threats</h4>
            <p class="text-gray-600 text-sm mt-2">March 15, 2024</p>
            <a href="https://esaro.unfpa.org/en/topics/gender-equality#:~:text=Gender%20equality%20means%20that%20the,in%20dignity%2C%20safety%20and%20security." class="text-blue-600 font-medium text-sm mt-4 inline-block hover:underline">Read More</a>
          </div>
        </div>

        <!-- Another Card -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img 
            src="https://via.placeholder.com/300" 
            alt="Article Thumbnail" 
            class="w-full h-48 object-cover"
          >
          <div class="p-4">
            <h4 class="text-lg font-bold text-gray-800">Top 10 Security Tools</h4>
            <p class="text-gray-600 text-sm mt-2">April 1, 2024</p>
            <a href="#" class="text-blue-600 font-medium text-sm mt-4 inline-block hover:underline">Read More</a>
          </div>
        </div>

        <!-- Another Card -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img 
            src="https://via.placeholder.com/300" 
            alt="Article Thumbnail" 
            class="w-full h-48 object-cover"
          >
          <div class="p-4">
            <h4 class="text-lg font-bold text-gray-800">How to Spot Phishing Scams</h4>
            <p class="text-gray-600 text-sm mt-2">April 3, 2024</p>
            <a href="#" class="text-blue-600 font-medium text-sm mt-4 inline-block hover:underline">Read More</a>
          </div>
        </div>

      </div>
    </section>

  </div>
<?php require_once('footer.php') ?>
