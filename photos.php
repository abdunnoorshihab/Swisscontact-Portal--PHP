<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.5/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Custom styles for thumbnail hover and border */
    .thumbnail {
      opacity: 0.7;
      transition: opacity 0.3s, transform 0.3s;
    }
    .thumbnail:hover {
      opacity: 1;
      transform: scale(1.05);
    }
    .thumbnail.active {
      border: 3px solid #4299e1; /* Blue border for active image */
      opacity: 1;
    }
  </style>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
  <div class="max-w-4xl mx-auto p-4">
    <!-- Main Image Display -->
    <div class="mb-6 overflow-hidden rounded-lg">
      <img 
        id="mainImage" 
        class="w-full h-[450px] object-cover rounded-lg"
        src="https://images.unsplash.com/photo-1499696010180-025ef6e1a8f9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
        alt="Main Image" />
    </div>

    <!-- Thumbnails Grid -->
    <div class="grid grid-cols-5 gap-4">
      <img 
        src="https://images.unsplash.com/photo-1499696010180-025ef6e1a8f9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80"
        class="thumbnail h-20 w-full rounded-lg cursor-pointer object-cover active" 
        alt="Thumbnail 1" onclick="changeImage(this)" />

      <img 
        src="https://images.unsplash.com/photo-1511163306992-1b181f69dc86?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80"
        class="thumbnail h-20 w-full rounded-lg cursor-pointer object-cover" 
        alt="Thumbnail 2" onclick="changeImage(this)" />

      <img 
        src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80"
        class="thumbnail h-20 w-full rounded-lg cursor-pointer object-cover" 
        alt="Thumbnail 3" onclick="changeImage(this)" />

      <img 
        src="https://images.unsplash.com/photo-1506748687427-c5bc9c5eecf0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80"
        class="thumbnail h-20 w-full rounded-lg cursor-pointer object-cover" 
        alt="Thumbnail 4" onclick="changeImage(this)" />

      <img 
        src="https://images.unsplash.com/photo-1484406566174-9da000fda645?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80"
        class="thumbnail h-20 w-full rounded-lg cursor-pointer object-cover" 
        alt="Thumbnail 5" onclick="changeImage(this)" />
    </div>
  </div>

  <!-- JavaScript for Image Switching -->
  <script>
    function changeImage(thumbnail) {
      const mainImage = document.getElementById('mainImage');
      mainImage.src = thumbnail.src;

      // Remove active class from all thumbnails
      document.querySelectorAll('.thumbnail').forEach(img => img.classList.remove('active'));

      // Add active class to the clicked thumbnail
      thumbnail.classList.add('active');
    }
  </script>
</body>
</html>
