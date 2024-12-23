<?php require_once('header.php') ?>
<body class="bg-gray-100">

  <!-- Main Container -->
  <div class="container mx-auto px-4 py-8">
    
    <!-- Header Section -->
    <header class="text-center mb-12">
      <h1 class="text-4xl font-extrabold text-gray-800">Getting Started with Tailwind CSS</h1>
      <p class="text-gray-500 mt-2">Your guide to mastering the basics of Tailwind CSS.</p>
    </header>

    <!-- Article Content -->
    <div class="bg-white rounded-lg shadow-md p-8">
      
      <!-- Introduction -->
      <section class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Introduction</h2>
        <p class="text-gray-600">
          Tailwind CSS is a utility-first CSS framework that provides low-level utility classes to build custom designs 
          without having to write custom CSS. This guide will help you get started with Tailwind CSS and walk you through 
          its basic usage.
        </p>
      </section>

      <!-- Getting Started -->
      <section class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">How to Get Started</h2>
        <ol class="list-decimal list-inside space-y-2 text-gray-600">
          <li>
            <b>Install Tailwind CSS:</b> Start by adding Tailwind to your project. You can do this using npm, yarn, or a CDN link.
          </li>
          <li>
            <b>Configure Tailwind:</b> Create a configuration file by running <code class="bg-gray-200 px-1 py-0.5 rounded text-sm">npx tailwindcss init</code>. This file allows you to customize Tailwind’s default settings.
          </li>
          <li>
            <b>Include Tailwind in Your CSS:</b> Add Tailwind's directives like <code class="bg-gray-200 px-1 py-0.5 rounded text-sm">@tailwind base;</code>, <code class="bg-gray-200 px-1 py-0.5 rounded text-sm">@tailwind components;</code>, and <code class="bg-gray-200 px-1 py-0.5 rounded text-sm">@tailwind utilities;</code> in your CSS file.
          </li>
          <li>
            <b>Start Coding:</b> Use Tailwind’s utility classes directly in your HTML to design your project.
          </li>
        </ol>
      </section>

      <!-- Example Usage -->
      <section class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Example: A Simple Button</h2>
        <p class="text-gray-600">
          Here’s an example of a simple button styled with Tailwind CSS:
        </p>
        <pre class="bg-gray-100 p-4 rounded mt-4 text-gray-800 overflow-auto">
&lt;button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600"&gt;
  Click Me
&lt;/button&gt;
        </pre>
      </section>

      <!-- Benefits of Tailwind CSS -->
      <section class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Why Use Tailwind CSS?</h2>
        <ul class="list-disc list-inside space-y-2 text-gray-600">
          <li>Highly customizable with a configuration file.</li>
          <li>Speeds up development with utility-first classes.</li>
          <li>Responsive and mobile-friendly by design.</li>
          <li>Eliminates the need for writing custom CSS in most cases.</li>
        </ul>
      </section>

      <!-- Conclusion -->
      <section>
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Conclusion</h2>
        <p class="text-gray-600">
          Tailwind CSS is a powerful tool for building modern, responsive designs quickly. By understanding its utility-first 
          approach and getting familiar with its classes, you can create highly customized and professional designs with ease.
        </p>
      </section>

    </div>

  </div>

  <?php require_once('footer.php') ?>

