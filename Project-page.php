
<?php require_once('header.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Auto Sidebar</title>
</head>
<body class="font-sans bg-gray-200 text-gray-800">

  <!-- Sidebar -->
  <div class="fixed z-10 right-0 bottom-0 h-96 w-72 border-2 rounded-lg bg-white p-6 shadow-lg">
    <h2 class="text-lg font-bold mb-6 text-blue-500">Other Projects</h2>
    

      <div class="relative overflow-x-auto">
          <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
              <tbody>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th id="header"
                      class="px-6 py-3 text-left cursor-pointer transition-colors 
                            hover:bg-gray-200 hover:text-gray-800 
                            active:bg-gray-400 active:text-black">
                      Astha
                    </th>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th id="header"
                      class="px-6 py-3 text-left cursor-pointer transition-colors 
                            hover:bg-gray-200 hover:text-gray-800 
                            active:bg-gray-400 active:text-black">
                      Astha
                    </th>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th id="header"
                      class="px-6 py-3 text-left cursor-pointer transition-colors 
                            hover:bg-gray-200 hover:text-gray-800 
                            active:bg-gray-400 active:text-black">
                      Astha
                    </th>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th id="header"
                      class="px-6 py-3 text-left cursor-pointer transition-colors 
                            hover:bg-gray-200 hover:text-gray-800 
                            active:bg-gray-400 active:text-black">
                      Astha
                    </th>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th id="header"
                      class="px-6 py-3 text-left cursor-pointer transition-colors 
                            hover:bg-gray-200 hover:text-gray-800 
                            active:bg-gray-400 active:text-black">
                      Astha
                    </th>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th id="header"
                      class="px-6 py-3 text-left cursor-pointer transition-colors 
                            hover:bg-gray-200 hover:text-gray-800 
                            active:bg-gray-400 active:text-black">
                      Astha
                    </th>
                  </tr>
              </tbody>
          </table>
      </div>

  </div>

  <!-- Main Content -->
  <div class="pr-80 p-6 space-y-12">
    <!-- Project Title and Banner -->
    <div class="bg-white py-8 px-6 rounded-lg shadow-md">
      <h1 class="text-4xl font-bold text-center text-gray-900">BMMDB</h1>
      <div class="mt-6 flex justify-center">
        <img src="img/bmmdp.png" alt="BMMDB Banner" class="w-full max-w-4xl h-auto object-cover rounded-lg">
      </div>
      <p class="text-xl mt-4 text-center text-gray-600">
        A groundbreaking initiative in Bangladesh focusing on enhancing healthcare access...
      </p>
    </div>

    <!-- About the Project and Team Leader -->
    <div class="flex flex-col md:flex-row gap-6">
      <!-- About Card -->
      <div class="flex-1 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4 text-gray-900">Project Brief</h2>
        <p>
          <a href="img/astha 4.jpeg" class="text-blue-500 font-semibold hover:underline" target="_blank">Read More</a>
        </p>
      </div>

      <!-- Team Leader Card -->
      <div class="w-full md:w-1/3 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4 text-gray-900">Team Leader</h2>
        <div class="flex items-center gap-4">
          <div class="w-28 h-28 rounded-full overflow-hidden">
            <img src="img/astha 3.jpg" alt="Team Leader" class="w-full h-full object-cover">
          </div>
          <div>
            <p class="text-xl font-medium">Name</p>
            <p class="text-sm text-gray-500">Designation</p>
          </div>
        </div>
      </div>
    </div>

    <!-- External Press Release -->
    <section id="press-release" class="bg-gray-100 p-6 rounded-lg shadow-md">
      <h2 class="text-2xl font-semibold mb-6 text-gray-900">External Press Release</h2>
      <div class="space-y-4">
        <div class="p-4 bg-white rounded-lg shadow-md">
          <a href="https://www.dhakatribune.com/bangladesh/dhaka/163161/ain-o-shalish-kendra-launches-astha-project" class="block text-lg font-medium text-gray-800 hover:text-blue-500">
            Ain o Shalish Kendra launches ASTHA Project
            <span class="block text-sm text-gray-500">Read Article</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Photo Gallery -->
    <section id="gallery" class="p-6">
      <h2 class="text-2xl font-semibold mb-6 text-gray-900">Photo Gallery</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <a href="img/cover.jpg" class="block">
          <img src="img/cover.jpg" alt="Gallery Image" class="w-full h-[250px] object-cover rounded-lg">
        </a>
        <a href="img/astha 2.jpg" class="block">
          <img src="img/astha 2.jpg" alt="Gallery Image" class="w-full h-[250px] object-cover rounded-lg">
        </a>
        <a href="img/astha 3.jpg" class="block">
          <img src="img/astha 3.jpg" alt="Gallery Image" class="w-full h-[250px] object-cover rounded-lg">
        </a>
      </div>
    </section>

    <!-- Resources for Project -->
    <section id="resources" class="bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-2xl font-semibold mb-6 text-gray-900">Resources for Project ASTHA</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
          <h3 class="font-semibold text-gray-800">Project Template</h3>
          <a href="path/to/template.zip" class="mt-2 inline-block text-blue-500 hover:underline">Download Template</a>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
          <h3 class="font-semibold text-gray-800">Logo Files</h3>
          <a href="path/to/logo.zip" class="mt-2 inline-block text-blue-500 hover:underline">Download Logos</a>
        </div>
      </div>
    </section>
  </div>

</body>
</html>


<?php require_once('footer.php') ?>