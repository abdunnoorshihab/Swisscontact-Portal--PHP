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
?>
<?php require_once('header.php') ?>


<div class="px-8">
<h1 class="text-center font-bold text-2xl">Device Specification</h1>
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
        <?php 
        $sql = "SELECT * FROM device where id = 1";
        $result = mysqli_query($conn, $sql);
        if ($result) { while ($rows = mysqli_fetch_array($result)) {
        ?>
          <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
          
            
            <ul class="list-disc pl-6 space-y-2">
              <li><span class="font-semibold">Laptop Type:</span> <?php echo $rows['spec_1']; ?></li>
              <li><span class="font-semibold">Brand:</span> <?php echo $rows['spec_2']; ?></li>
              <li><span class="font-semibold">Models:</span> <?php echo $rows['spec_3']; ?></li>
              <li><span class="font-semibold">Processor:</span> <?php echo $rows['spec_4']; ?></li>
              <li><span class="font-semibold">Processor Generation:</span> <?php echo $rows['spec_5']; ?></li>
              <li><span class="font-semibold">Storage:</span> <?php echo $rows['spec_6']; ?></li>
              <li><span class="font-semibold">Memory (RAM):</span> <?php echo $rows['spec_7']; ?></li>
              <li><span class="font-semibold">Weight:</span> <?php echo $rows['spec_8']; ?></li>
              <li><span class="font-semibold">Display Type:</span> <?php echo $rows['spec_9']; ?></li>
              <li><span class="font-semibold">Display:</span> <?php echo $rows['spec_10']; ?></li>
              <li><span class="font-semibold">Warranty:</span> <?php echo $rows['spec_11']; ?></li>
              <li><span class="font-semibold">Operating System:</span> <?php echo $rows['spec_12']; ?></li>
            </ul>
          <?php } } ?>
        </div>

        <!-- Other Staff Laptop Specification -->
        <div>
        <?php
          $sql = "SELECT * FROM device where id = 2";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
          <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
          
            
            <ul class="list-disc pl-6 space-y-2">
              <li><span class="font-semibold">Laptop Type:</span> <?php echo $rows['spec_1']; ?></li>
              <li><span class="font-semibold">Brand:</span> <?php echo $rows['spec_2']; ?></li>
              <li><span class="font-semibold">Processor:</span> <?php echo $rows['spec_4']; ?></li>
              <li><span class="font-semibold">Processor Generation:</span> <?php echo $rows['spec_5']; ?></li>
              <li><span class="font-semibold">Storage:</span> <?php echo $rows['spec_6']; ?></li>
              <li><span class="font-semibold">Memory (RAM):</span> <?php echo $rows['spec_7']; ?></li>
              <li><span class="font-semibold">Weight:</span> <?php echo $rows['spec_8']; ?></li>
              <li><span class="font-semibold">Display Type:</span> <?php echo $rows['spec_9']; ?></li>
              <li><span class="font-semibold">Display:</span> <?php echo $rows['spec_10']; ?></li>
              <li><span class="font-semibold">Warranty:</span> <?php echo $rows['spec_11']; ?></li>
              <li><span class="font-semibold">Operating System:</span> <?php echo $rows['spec_12']; ?></li>
            </ul>
          <?php } } ?>
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
      <?php
          $sql = "SELECT * FROM device where id = 3";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
        <h2 class="text-xl font-semibold mb-4"></span> <?php echo $rows['name']; ?></h2>
        
            <ul class="list-disc pl-6 space-y-2">
              <li><span class="font-semibold">Display Size (Inch):</span> <?php echo $rows['spec_1']; ?></li>
              <li><span class="font-semibold">Panel Type:</span> <?php echo $rows['spec_2']; ?></li>
              <li><span class="font-semibold">Display Type:</span> <?php echo $rows['spec_3']; ?></li>
              <li><span class="font-semibold">Display Resolution:</span> <?php echo $rows['spec_4']; ?></li>
              <li><span class="font-semibold">Display Surface:</span> <?php echo $rows['spec_5']; ?></li>
              <li><span class="font-semibold">Contrast Ratio:</span> <?php echo $rows['spec_6']; ?></li>
              <li><span class="font-semibold">Crop Ratio:</span> <?php echo $rows['spec_7']; ?></li>
              <li><span class="font-semibold">Height/Rotation Adjustments:</span> <?php echo $rows['spec_8']; ?></li>
            </ul>
          <?php } } ?>
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
        <?php
          $sql = "SELECT * FROM device where id = 4";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
          <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
          <ul class="list-disc pl-6 space-y-2">
            <li><span class="font-semibold">Brand:</span> <?php echo $rows['spec_1']; ?></li>
            <li><span class="font-semibold">Function:</span> <?php echo $rows['spec_2']; ?></li>
            <li><span class="font-semibold">Type:</span> <?php echo $rows['spec_3']; ?></li>
            <li><span class="font-semibold">Processor Speed:</span> <?php echo $rows['spec_4']; ?></li>
            <li><span class="font-semibold">Memory:</span> <?php echo $rows['spec_5']; ?></li>
            <li><span class="font-semibold">Connectivity:</span> <?php echo $rows['spec_6']; ?></li>
            <li><span class="font-semibold">Print Speed (PPM):</span><?php echo $rows['spec_7']; ?></li>
            <li><span class="font-semibold">First Page Print:</span> <?php echo $rows['spec_8']; ?></li>
            <li><span class="font-semibold">Reference Link:</span> <a href="https://www.startech.com.bd/hp-laserJet-pro-m404dn-printer" class="text-blue-500 underline">here</a></li>
          </ul>
          <?php } } ?>
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
        <?php
          $sql = "SELECT * FROM device where id = 5";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
          <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
          <ul class="list-disc pl-6 space-y-2">
            <li><span class="font-semibold">Resolution:</span> <?php echo $rows['spec_1']; ?></li>
            <li><span class="font-semibold">Brightness:</span> <?php echo $rows['spec_2']; ?></li>
            <li><span class="font-semibold">Contrast Ratio:</span> <?php echo $rows['spec_3']; ?></li>
            <li><span class="font-semibold">Lamp Life:</span> <?php echo $rows['spec_4']; ?></li>
            <li><span class="font-semibold">Reference Link:</span> <a href="https://www.startech.com.bd/boxlight-alx462-xga-projector" class="text-blue-500 underline">here</a></li>
          </ul>
          <?php } } ?>
        </div>

        <!-- Short Throw Specification -->
        <div>
        <?php
          $sql = "SELECT * FROM device where id = 6";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
          <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
          <ul class="list-disc pl-6 space-y-2">
            <li><span class="font-semibold">Type:</span> <?php echo $rows['spec_1']; ?></li>
            <li><span class="font-semibold">Resolution:</span> <?php echo $rows['spec_2']; ?></li>
            <li><span class="font-semibold">Brightness:</span> <?php echo $rows['spec_3']; ?></li>
            <li><span class="font-semibold">Contrast Ratio:</span> <?php echo $rows['spec_4']; ?></li>
            <li><span class="font-semibold">Lamp Life:</span> <?php echo $rows['spec_5']; ?></li>
          </ul>
          <?php } } ?>
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
      <?php
          $sql = "SELECT * FROM device where id = 7";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
          <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
        <ul class="list-disc pl-6 space-y-2">
          <li><span class="font-semibold">Brand:</span>  <?php echo $rows['spec_1']; ?></li>
          <li><span class="font-semibold">Print/Copy Type:</span>  <?php echo $rows['spec_2']; ?></li>
          <li><span class="font-semibold">Duplex Facility:</span>  <?php echo $rows['spec_3']; ?></li>
          <li><span class="font-semibold">Print/Copy Speed:</span>  <?php echo $rows['spec_4']; ?></li>
          <li><span class="font-semibold">Paper Capacity:</span>  <?php echo $rows['spec_5']; ?></li>
          <li><span class="font-semibold">Function:</span>  <?php echo $rows['spec_6']; ?></li>
          <li><span class="font-semibold">Model:</span>  <?php echo $rows['spec_7']; ?></li>
          <li><span class="font-semibold">Reference Link:</span> <a href="https://www.startech.com.bd/hp-laserJet-pro-mfp-m227fdw" class="text-blue-500 underline">here</a></li>
        </ul>
        <?php } } ?>
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
        <?php
          $sql = "SELECT * FROM device where id = 8";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
            <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
        <ul class="list-disc pl-6 space-y-2">
          <li><span class="font-semibold">Brand:</span> <?php echo $rows['spec_1']; ?></li>
          <li><span class="font-semibold">Function:</span> <?php echo $rows['spec_2']; ?></li>
          <li><span class="font-semibold">Print/Copy Speed:</span> <?php echo $rows['spec_3']; ?></li>
          <li><span class="font-semibold">Paper Capacity:</span> <?php echo $rows['spec_4']; ?></li>
          <li><span class="font-semibold">Mandatory Functionality:</span> <?php echo $rows['spec_5']; ?></li>
          <li><span class="font-semibold">Required Features:</span> <?php echo $rows['spec_6']; ?></li>
          <li><span class="font-semibold">RAM:</span> <?php echo $rows['spec_7']; ?></li>
          <li><span class="font-semibold">Optional Feature:</span> <?php echo $rows['spec_8']; ?></li>
          <li><span class="font-semibold">Model:</span> <?php echo $rows['spec_9']; ?></li>
          <li><span class="font-semibold">Description:</span> <?php echo $rows['spec_10']; ?></li>
          <li><span class="font-semibold">Reference Link:</span> <a href="https://bme.com.bd/toshiba-e-studio-2528a-auto-duplex-photocopier" class="text-blue-500 underline">here</a></li>
        </ul>
        <?php } } ?>
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
            <?php
          $sql = "SELECT * FROM device where id = 9";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
            <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
              <ul class="list-disc pl-6 space-y-2">
                <li><span class="font-semibold">Model:</span> <?php echo $rows['spec_1']; ?></li>
                <li><span class="font-semibold">Required Unit:</span> <?php echo $rows['spec_2']; ?></li>
              </ul>
              <?php } } ?>
            </div>
            <div>

            <?php
          $sql = "SELECT * FROM device where id = 10";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
            <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
              <ul class="list-disc pl-6 space-y-2">
                <li><span class="font-semibold">Memory Card:</span> <?php echo $rows['spec_1']; ?></li>
                <li><span class="font-semibold">Carry Bag:</span><?php echo $rows['spec_2']; ?></li>
                <li><span class="font-semibold">Gimbal:</span> <?php echo $rows['spec_3']; ?></li>
              </ul>
              <?php } } ?>
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
        <?php
          $sql = "SELECT * FROM device where id = 11";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
            <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
        <ul class="list-disc pl-6 space-y-2">
          <li><span class="font-semibold">MPN:</span> <?php echo $rows['spec_1']; ?></li>
          <li><span class="font-semibold">Model:</span><?php echo $rows['spec_2']; ?></li>
          <li><span class="font-semibold">Number Of Ports:</span> <?php echo $rows['spec_3']; ?></li>
          <li><span class="font-semibold">Interface:</span> <?php echo $rows['spec_4']; ?></li>
          <li><span class="font-semibold">Devices:</span> <?php echo $rows['spec_5']; ?></li>
          <li><span class="font-semibold">Input:</span> <?php echo $rows['spec_6']; ?></li>
          <li><span class="font-semibold">Reference Link:</span> <a href="https://www.startech.com.bd/ugreen-cm179-10-in-1-usb-c-multifunction-hub" class="text-blue-500 underline">here</a></li>
        </ul>
        <?php } } ?>
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
          <?php
          $sql = "SELECT * FROM device where id = 12";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
            <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
            <ul class="list-disc pl-6 space-y-2">
              <li><strong>Model:</strong><?php echo $rows['spec_1']; ?></li>
              <li><strong>Connection Type:</strong> <?php echo $rows['spec_2']; ?></li>
              <li><strong>Frequency:</strong> <?php echo $rows['spec_3']; ?></li>
              <li><strong>Reference Link:</strong> <a href="https://www.ryans.com/havit-hv-h610bt-over-ear-bluetooth-black-headphone" class="text-blue-500 hover:underline">here</a></li>
            </ul>
            <?php } } ?>
          </div>
          
          <div class="p-4">
          <?php
          $sql = "SELECT * FROM device where id = 13";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
            <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
            <ul class="list-disc pl-6 space-y-2">
              <li><strong>Model:</strong><?php echo $rows['spec_1']; ?></li>
              <li><strong>Connection Type:</strong> <?php echo $rows['spec_2']; ?></li>
              <li><strong>Frequency:</strong> <?php echo $rows['spec_3']; ?></li>
              <li><strong>Reference Link:</strong> <a href="https://www.startech.com.bd/havit-h214u-wired-led-usb-headset" class="text-blue-500 hover:underline">here</a></li>
            </ul>
            <?php } } ?>
          </div>

          <div class="p-4">
          <?php
          $sql = "SELECT * FROM device where id = 14";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
            <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
            <ul class="list-disc pl-6 space-y-2">
              <li><strong>Model:</strong><?php echo $rows['spec_1']; ?></li>
              <li><strong>Connection Type:</strong> <?php echo $rows['spec_2']; ?></li>
              <li><strong>Frequency:</strong> <?php echo $rows['spec_3']; ?></li>
              <li><strong>Reference Link:</strong> <a href="https://www.startech.com.bd/edifier-w600bt-bluetooth-stereo-headphone" class="text-blue-500 hover:underline">here</a></li>
            </ul>
            <?php } } ?>
          </div>

          <div class="p-4">
          <?php
          $sql = "SELECT * FROM device where id = 15";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
            <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
            <ul class="list-disc pl-6 space-y-2">
              <li><strong>Model:</strong> <?php echo $rows['spec_1']; ?></li>
              <li><strong>Connection Type:</strong> <?php echo $rows['spec_2']; ?></li>
              <li><strong>Frequency:</strong><?php echo $rows['spec_3']; ?></li>
              <li><?php echo $rows['spec_4']; ?></li>
              <li><strong>Reference Link:</strong> <a href="https://www.startech.com.bd/edifier-wh700nb-bluetooth-headphone" class="text-blue-500 hover:underline">here</a></li>
            </ul>
            <?php } } ?>
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
            <?php
          $sql = "SELECT * FROM device where id = 16";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
            <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
              <ul class="list-disc pl-6 space-y-2">
                <li><strong>Model:</strong> <?php echo $rows['spec_1']; ?></li>
                <li><strong>Connection Type:</strong> <?php echo $rows['spec_2']; ?></li>
                <li><strong>Battery:</strong><?php echo $rows['spec_3']; ?></li>
                <li><strong>Adjustable Keyboard Legs:</strong> <?php echo $rows['spec_4']; ?></li>
                <li><strong>Reference Link:</strong> <a href="https://www.startech.com.bd/a4tech-fg1112-keyboard-mouse-combo" class="text-blue-500 hover:underline">here</a></li>
              </ul>
              <?php } } ?>
            </div>

            <div class="p-4">
            <?php
          $sql = "SELECT * FROM device where id = 17";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
            <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
              <ul class="list-disc pl-6 space-y-2">
                <li><strong>Model:</strong> <?php echo $rows['spec_1']; ?></li>
                <li><strong>Connection Type:</strong>  <?php echo $rows['spec_2']; ?></li>
                <li><strong>Battery:</strong>  <?php echo $rows['spec_3']; ?></li>
                <li><strong>Interface:</strong> <?php echo $rows['spec_4']; ?></li>
                <li><strong>Reference Link:</strong> <a href="https://www.startech.com.bd/Logitech-M187-Wireless-Extra-small-Mouse" class="text-blue-500 hover:underline">here</a></li>
              </ul>
              <?php } } ?>
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
            <?php
          $sql = "SELECT * FROM device where id = 18";
          $result = mysqli_query($conn, $sql);
          ?>
          <?php if ($result) { while ($rows = mysqli_fetch_array($result)) {
            ?>
            <h2 class="text-xl font-semibold mb-4"><?php echo $rows['name']; ?></h2>
              <ul class="list-disc pl-6 space-y-2">
                <li><strong>Model:</strong><?php echo $rows['spec_1']; ?></li>
                <li><strong>Compatible with:</strong> <?php echo $rows['spec_2']; ?></li>
                <li><strong>Design:</strong> <?php echo $rows['spec_3']; ?></li>
                <li><strong>Adjustable viewing angle:</strong> <?php echo $rows['spec_4']; ?></li>
                <li><strong>Stepless height adjustable:</strong> <?php echo $rows['spec_5']; ?></li>
                <li><strong>Reference Link:</strong> <a href="https://www.startech.com.bd/baseus-lujs000012-metal-adjustable-laptop-stand" class="text-blue-500 hover:underline">here</a></li>
              </ul>
              <?php } } ?>
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