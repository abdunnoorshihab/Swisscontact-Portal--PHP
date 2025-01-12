<?php 
// Database connection
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "device_spec";
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    echo "Could not connect to the database!";
    exit;
}

// Fetch staff data
$sql = "SELECT * FROM device where id = 1";
$result = mysqli_query($conn, $sql);
?>
<?php require_once('header.php') ?>


<div class="px-8">
  <div class="border-b border-slate-200">
    <button onclick="toggleAccordion(1)" class="w-full flex justify-between items-center py-5 text-slate-800">
      <span>Laptop Specification</span>
      <span id="icon-1" class="text-slate-800 transition-transform duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
          <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
        </svg>
      </span>
    </button>
    <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
      <div class="pb-5 text-sm text-slate-500">
      <div class="p-8 flex justify-between">
        <!-- Team Leader Laptop Specification -->
        <div class="mb-10">
          <h2 class="text-xl font-semibold mb-4">Team Leader Laptop Specification:</h2>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            // $sql = "SELECT * FROM device WHERE id = 0";?>
            
            <ul class="list-disc pl-6 space-y-2">
              <li><span class="font-semibold">Laptop Type:</span> <?php echo $rows['type']; ?></li>
              <li><span class="font-semibold">Brand:</span> <?php echo $rows['brand']; ?></li>
              <li><span class="font-semibold">Models:</span> <?php echo $rows['model']; ?></li>
              <li><span class="font-semibold">Processor:</span> <?php echo $rows['processor']; ?></li>
              <li><span class="font-semibold">Processor Generation:</span> <?php echo $rows['generation']; ?></li>
              <li><span class="font-semibold">Storage:</span> <?php echo $rows['storage']; ?></li>
              <li><span class="font-semibold">Memory (RAM):</span> <?php echo $rows['memory']; ?></li>
              <li><span class="font-semibold">Weight:</span> <?php echo $rows['weight']; ?></li>
              <li><span class="font-semibold">Display Type:</span> <?php echo $rows['display_type']; ?></li>
              <li><span class="font-semibold">Display:</span> <?php echo $rows['display_size']; ?></li>
              <li><span class="font-semibold">Warranty:</span> <?php echo $rows['warrenty']; ?></li>
              <li><span class="font-semibold">Operating System:</span> <?php echo $rows['os']; ?></li>
            </ul>
          <?php } } ?>
        </div>

        <!-- Other Staff Laptop Specification -->
        <div>
          <h2 class="text-xl font-semibold mb-4">Other Staff Laptop Specification:</h2>
          <?php
          $sql = "SELECT * FROM device where id = 1";
          $result = mysqli_query($conn, $sql);
          ?>
          <ul class="list-disc pl-6 space-y-2">
            <li><span class="font-semibold">Laptop Type:</span> Professional Series</li>
            <li><span class="font-semibold">Brand:</span> HP/Lenovo/Dell (ProBook/ThinkPad/Vostro/Latitude)</li>
            <li><span class="font-semibold">Processor:</span> Intel Core i5 / AMD Ryzen 5</li>
            <li><span class="font-semibold">Processor Generation:</span> 13 Gen or higher/ Ryzen 6 Gen or higher</li>
            <li><span class="font-semibold">Storage:</span> 512GB SSD NVMe/M.2</li>
            <li><span class="font-semibold">Memory (RAM):</span> 16 GB</li>
            <li><span class="font-semibold">Weight:</span> &lt; 1.5 KG</li>
            <li><span class="font-semibold">Display Type:</span> FHD</li>
            <li><span class="font-semibold">Display:</span> 14” (approx. size)</li>
            <li><span class="font-semibold">Warranty:</span> 3 Years</li>
            <li><span class="font-semibold">Operating System:</span> Win 10 Pro</li>
          </ul>
        </div>
      </div>

      </div>
    </div>
  </div>
  
 
  <div class="border-b border-slate-200">
    <button onclick="toggleAccordion(2)" class="w-full flex justify-between items-center py-5 text-slate-800">
      <span>Monitor Specification</span>
      <span id="icon-2" class="text-slate-800 transition-transform duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
          <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
        </svg>
      </span>
    </button>
    <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out text-sm text-slate-500"">
      <div class="p-6">
        <h2 class="text-xl font-semibold mb-4">Monitor Specification:</h2>
        <ul class="list-disc pl-6 space-y-2">
          <li><span class="font-semibold">Display Size (Inch):</span> &gt; 23 Inch</li>
          <li><span class="font-semibold">Panel Type:</span> IPS</li>
          <li><span class="font-semibold">Display Type:</span> FHD/UHD</li>
          <li><span class="font-semibold">Display Resolution:</span> 1920 x 1080 (at least)</li>
          <li><span class="font-semibold">Display Surface:</span> Anti-Glare</li>
          <li><span class="font-semibold">Contrast Ratio:</span> 1000:1 static</li>
          <li><span class="font-semibold">Crop Ratio:</span> 16:10 (preferred) / 16:09</li>
          <li><span class="font-semibold">Height/Rotation Adjustments:</span> Must have height/rotation adjustments facility.</li>
        </ul>
      </div>

    </div>
  </div>
  
  
  <div class="border-b border-slate-200">
    <button onclick="toggleAccordion(3)" class="w-full flex justify-between items-center py-5 text-slate-800">
      <span>Printer Specification Small Team/Team Leader Printer</span>
      <span id="icon-3" class="text-slate-800 transition-transform duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
          <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
        </svg>
      </span>
    </button>
    <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
      <div class="pb-5 text-sm text-slate-500">
        <div class="p-6">
          <h2 class="text-xl font-semibold mb-4">Printer Specification:</h2>
          <ul class="list-disc pl-6 space-y-2">
            <li><span class="font-semibold">Brand:</span> HP (Network Duplexing)</li>
            <li><span class="font-semibold">Function:</span> Print Only (Auto duplexing)</li>
            <li><span class="font-semibold">Type:</span> Single Function Mono Laser</li>
            <li><span class="font-semibold">Processor Speed:</span> &gt; 1 GHz</li>
            <li><span class="font-semibold">Memory:</span> 128 (minimum)</li>
            <li><span class="font-semibold">Connectivity:</span> USB & LAN (Wi-Fi optional)</li>
            <li><span class="font-semibold">Print Speed (PPM):</span> &gt; 35 ppm</li>
            <li><span class="font-semibold">First Page Print:</span> &lt; 6 sec</li>
            <li><span class="font-semibold">Reference Link:</span> <a href="#" class="text-blue-500 underline">here</a></li>
          </ul>
        </div>
      </div>
      
    </div>
  </div>

  <div class="border-b border-slate-200 text-slate-800">
    <button onclick="toggleAccordion(4)" class="w-full flex justify-between items-center py-5 text-slate-800">
      <span>Projector Specification</span>
      <span id="icon-4" class="text-slate-800 transition-transform duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
          <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
        </svg>
      </span>
    </button>
    <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
      <div class="p-6 flex justify-between text-sm text-slate-500">
        <!-- Standard Throw Specification -->
        <div>
          <h2 class="text-xl font-semibold mb-4">Projector Specification - Standard Throw:</h2>
          <ul class="list-disc pl-6 space-y-2">
            <li><span class="font-semibold">Resolution:</span> WXGA / SXGA / FHD</li>
            <li><span class="font-semibold">Brightness:</span> &gt;= 4,000 (4000-4500) Lumens</li>
            <li><span class="font-semibold">Contrast Ratio:</span> &gt;= 16,000:1</li>
            <li><span class="font-semibold">Lamp Life:</span> &gt;= 6000 Hours (Normal)</li>
            <li><span class="font-semibold">Reference Link:</span> <a href="#" class="text-blue-500 underline">here</a></li>
          </ul>
        </div>

        <!-- Short Throw Specification -->
        <div>
          <h2 class="text-xl font-semibold mb-4">Projector Specification - Short Throw:</h2>
          <ul class="list-disc pl-6 space-y-2">
            <li><span class="font-semibold">Type:</span> Short Throw Projector</li>
            <li><span class="font-semibold">Resolution:</span> WXGA / XGA</li>
            <li><span class="font-semibold">Brightness:</span> &gt;= 3,500 (3500-4500) Lumens</li>
            <li><span class="font-semibold">Contrast Ratio:</span> &gt;= 16,000:1</li>
            <li><span class="font-semibold">Lamp Life:</span> &gt;= 6000 Hours (Normal)</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="border-b border-slate-200">
    <button onclick="toggleAccordion(5)" class="w-full flex justify-between items-center py-5 text-slate-800">
      <span>Multipurpose Printer/Photocopier - Small/Medium Field Office (Up to 3
      person)</span>
      <span id="icon-5" class="text-slate-800 transition-transform duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
          <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
        </svg>
      </span>
    </button>
    <div id="content-5" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
      <div class="p-6 text-sm text-slate-500">
        <h2 class="text-xl font-semibold mb-4">Specifications:</h2>
        <ul class="list-disc pl-6 space-y-2">
          <li><span class="font-semibold">Brand:</span> HP</li>
          <li><span class="font-semibold">Print/Copy Type:</span> Black</li>
          <li><span class="font-semibold">Duplex Facility:</span> Auto</li>
          <li><span class="font-semibold">Print/Copy Speed:</span> 25 ppm (minimum)</li>
          <li><span class="font-semibold">Paper Capacity:</span> Standard 250 Sheets (minimum)</li>
          <li><span class="font-semibold">Function:</span> Print, Copy & Scan</li>
          <li><span class="font-semibold">Model:</span> HP LaserJet Pro MFP M227fdw Multifunction Mono Laser Printer</li>
          <li><span class="font-semibold">Buy:</span> Buy HP LaserJet Pro MFP M227fdw Multifunction Mono Laser Printer at competitive price in Bangladesh. Order online or visit your nearest Star Tech branch.</li>
          <li><span class="font-semibold">Reference Link:</span> <a href="#" class="text-blue-500 underline">here</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="border-b border-slate-200">
    <button onclick="toggleAccordion(6)" class="w-full flex justify-between items-center py-5 text-slate-800">
      <span>Multifunctional Device Specifications - Big Team/ All Project Staff</span>
      <span id="icon-6" class="text-slate-800 transition-transform duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
          <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
        </svg>
      </span>
    </button>
    <div id="content-6" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
      <div class="pb-5 text-sm text-slate-500">
        <div class="p-6">
        <h2 class="text-xl font-semibold mb-4">Specifications:</h2>
        <ul class="list-disc pl-6 space-y-2">
          <li><span class="font-semibold">Brand:</span> Toshiba / Canon / Ricoh</li>
          <li><span class="font-semibold">Function:</span> Auto Duplex Facilities (must include RADF)</li>
          <li><span class="font-semibold">Print/Copy Speed:</span> 25 ppm (at least)</li>
          <li><span class="font-semibold">Paper Capacity:</span> Standard 350 Sheets</li>
          <li><span class="font-semibold">Mandatory Functionality:</span> Print & Scan</li>
          <li><span class="font-semibold">Required Features:</span> Scan to email</li>
          <li><span class="font-semibold">RAM:</span> 2 GB</li>
          <li><span class="font-semibold">Optional Feature:</span> 128 GB (minimum) storage to facilitate “Scan to File/Share Location” feature</li>
          <li><span class="font-semibold">Model:</span> Toshiba e-Studio 2528A + RADF</li>
          <li><span class="font-semibold">Description:</span> Buy Toshiba e-Studio 2528A (with RADF) Auto Duplex Multifunctional Monochrome 25 cpm/ppm Copier Machine with the Best Price available in our Online Shop and in Store at BME.</li>
          <li><span class="font-semibold">Reference Link:</span> <a href="#" class="text-blue-500 underline">here</a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>

  <div class="border-b border-slate-200">
    <button onclick="toggleAccordion(7)" class="w-full flex justify-between items-center py-5 text-slate-800">
      <span>Camera Specification</span>
      <span id="icon-7" class="text-slate-800 transition-transform duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
          <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
        </svg>
      </span>
    </button>
    <div id="content-7" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
      <div class="pb-5 text-sm text-slate-500">
          <div class="p-6 flex justify-between">
            <div>
              <h2 class="text-xl font-semibold mb-4">Camera Specifications:</h2>
              <ul class="list-disc pl-6 space-y-2">
                <li><span class="font-semibold">Model:</span> Sony ZV-E10 with 16-50mm Lens</li>
                <li><span class="font-semibold">Required Unit:</span> 01</li>
              </ul>
            </div>
            <div>

              <h2 class="text-xl font-semibold mb-4">Camera Accessories:</h2>
              <ul class="list-disc pl-6 space-y-2">
                <li><span class="font-semibold">Memory Card:</span> 128GB 90 Mbps, 01 unit</li>
                <li><span class="font-semibold">Carry Bag:</span> 01 unit</li>
                <li><span class="font-semibold">Gimbal:</span> Any reputed brand with image and video stabilizer feature, 01 unit</li>
              </ul>
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="border-b border-slate-200">
    <button onclick="toggleAccordion(8)" class="w-full flex justify-between items-center py-5 text-slate-800">
      <span>Docking Specification</span>
      <span id="icon-8" class="text-slate-800 transition-transform duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
          <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
        </svg>
      </span>
    </button>
    <div id="content-8" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
      <div class="pb-5 text-sm text-slate-500">
        <div class="p-6">
        <h2 class="text-xl font-semibold mb-4">Docking Specification</h2>
        <ul class="list-disc pl-6 space-y-2">
          <li><span class="font-semibold">MPN:</span> 80133</li>
          <li><span class="font-semibold">Model:</span> CM179</li>
          <li><span class="font-semibold">Number Of Ports:</span> 10</li>
          <li><span class="font-semibold">Interface:</span> VGA, Ethernet, HDMI, USB 3.0</li>
          <li><span class="font-semibold">Devices:</span> Smartphones, Tablets, Laptops, Desktops</li>
          <li><span class="font-semibold">Input:</span> 1x USB-C Male, 1x USB-C Female</li>
          <li><span class="font-semibold">Reference Link:</span> <a href="#" class="text-blue-500 underline">here</a></li>
        </ul>
      </div>

      </div>
    </div>
  </div>

  <div class="border-b border-slate-200">
    <button onclick="toggleAccordion(10)" class="w-full flex justify-between items-center py-5 text-slate-800">
      <span>Headphone Specification</span>
      <span id="icon-10" class="text-slate-800 transition-transform duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
          <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
        </svg>
      </span>
    </button>
    <div id="content-10" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
      <div class="pb-5 text-sm text-slate-500">
        <div class="space-y-4 flex justify-between">
          <div class="p-4">
            <h2 class="text-xl font-semibold mb-4">Wired</h2>
            <ul class="list-disc pl-6 space-y-2">
              <li><strong>Model:</strong> H214U</li>
              <li><strong>Connection Type:</strong> USB</li>
              <li><strong>Frequency:</strong> 20Hz to 20KHz</li>
              <li><strong>Reference Link:</strong> <a href="#" class="text-blue-500 hover:underline">here</a></li>
            </ul>
          </div>
          
          <div class="p-4">
            <h2 class="text-xl font-semibold mb-4">Wireless</h2>
            <ul class="list-disc pl-6 space-y-2">
              <li><strong>Model:</strong> Havit H610BT</li>
              <li><strong>Connection Type:</strong> Wireless</li>
              <li><strong>Frequency:</strong> 20Hz - 20KHz</li>
              <li><strong>Reference Link:</strong> <a href="#" class="text-blue-500 hover:underline">here</a></li>
            </ul>
          </div>

          <div class="p-4">
            <h2 class="text-xl font-semibold mb-4">Wireless</h2>
            <ul class="list-disc pl-6 space-y-2">
              <li><strong>Model:</strong> Edifier W600BT</li>
              <li><strong>Connection Type:</strong> Wireless</li>
              <li><strong>Frequency:</strong> 20Hz - 20KHz</li>
              <li><strong>Reference Link:</strong> <a href="#" class="text-blue-500 hover:underline">here</a></li>
            </ul>
          </div>

          <div class="p-4">
            <h2 class="text-xl font-semibold mb-4">Wireless</h2>
            <ul class="list-disc pl-6 space-y-2">
              <li><strong>Model:</strong> Edifier WH700NB ANC</li>
              <li><strong>Connection Type:</strong> Wireless</li>
              <li><strong>Frequency:</strong> 20Hz - 20KHz</li>
              <li><strong>Noise cancellation</strong></li>
              <li><strong>Reference Link:</strong> <a href="#" class="text-blue-500 hover:underline">here</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="border-b border-slate-200">
      <button onclick="toggleAccordion(11)" class="w-full flex justify-between items-center py-5 text-slate-800">
        <span>Mouse & Keyboard Specification</span>
        <span id="icon-11" class="text-slate-800 transition-transform duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
          </svg>
        </span>
      </button>
      <div id="content-11" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
        <div class="pb-5 text-sm text-slate-500">
          <div class="px-8 flex justify-between">
            <div class="p-4">
              <h2 class="text-xl font-semibold mb-4">Mouse & Keyboard Combo</h2>
              <ul class="list-disc pl-6 space-y-2">
                <li><strong>Model:</strong> A4TECH FG1112</li>
                <li><strong>Connection Type:</strong> Wireless</li>
                <li><strong>Battery:</strong> 2*AAA Alkaline Batteries</li>
                <li><strong>Adjustable Keyboard Legs:</strong> Yes</li>
                <li><strong>Reference Link:</strong> <a href="#" class="text-blue-500 hover:underline">here</a></li>
              </ul>
            </div>

            <div class="p-4">
              <h2 class="text-xl font-semibold mb-4">Mouse</h2>
              <ul class="list-disc pl-6 space-y-2">
                <li><strong>Model:</strong> Logitech M187</li>
                <li><strong>Connection Type:</strong> Wireless</li>
                <li><strong>Battery:</strong> 1 AA battery</li>
                <li><strong>Interface:</strong> USB receiver</li>
                <li><strong>Reference Link:</strong> <a href="#" class="text-blue-500 hover:underline">here</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div class="border-b border-slate-200">
      <button onclick="toggleAccordion(12)" class="w-full flex justify-between items-center py-5 text-slate-800">
        <span>Laptop Stand Specification</span>
        <span id="icon-12" class="text-slate-800 transition-transform duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
          </svg>
        </span>
      </button>
      <div id="content-12" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
        <div class="pb-5 text-sm text-slate-500">
          <div class="space-y-4 flex justify-between">
            <div class="p-4">
              <h3 class="text-xl font-semibold mb-4">Laptop Stand</h3>
              <ul class="list-disc pl-6 space-y-2">
                <li><strong>Model:</strong> Baseus LUJS000012</li>
                <li><strong>Compatible with:</strong> 11 to 17.3-inch Laptops</li>
                <li><strong>Design:</strong> Hollow-carved design</li>
                <li><strong>Adjustable viewing angle:</strong> Yes</li>
                <li><strong>Stepless height adjustable:</strong> Yes</li>
                <li><strong>Reference Link:</strong> <a href="#" class="text-blue-500 hover:underline">here</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>

  </div>
 
<script>
  function toggleAccordion(index) {
    const content = document.getElementById(`content-${index}`);
    const icon = document.getElementById(`icon-${index}`);
 
    // SVG for Minus icon
    const minusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
      </svg>
    `;
 
    // SVG for Plus icon
    const plusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    `;
 
    // Toggle the content's max-height for smooth opening and closing
    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
      content.style.maxHeight = '0';
      icon.innerHTML = plusSVG;
    } else {
      content.style.maxHeight = content.scrollHeight + 'px';
      icon.innerHTML = minusSVG;
    }
  }
</script>

<?php require_once('footer.php') ?>