
  <footer class="bg-white shadow py-4 w-full">
        <div class="container mx-auto px-6 text-center text-gray-700">
          <p>&copy; 2024 Swisscontact. All rights reserved.</p>
        </div>
  </footer>
  <!-- Header JS -->
    <script>
          function toggleMenu() {
              document.getElementById("menuItems").classList.toggle("active");
          }
    </script>

  <!-- Swiper JS -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        // Initialize Swiper
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 6,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                150: {
                    slidesPerView: 2,
                },
                300: {
                    slidesPerView: 3,
                },
                450: {
                    slidesPerView: 4,
                },
                600: {
                    slidesPerView: 5,
                },
                750: {
                    slidesPerView: 6,
                },
                1000: {
                    slidesPerView: 7,
                },
            }
        });
    </script>

  <!-- Forms & Templates JS -->
    <script>
          $(document).ready(function() {
              // Load data initially (3 rows)
              load_data();

              // Function to load data
              function load_data(query = '') {
                  $.ajax({
                      url: "fetch_forms.php",
                      method: "POST",
                      data: { query: query },
                      success: function(data) {
                          $('#result_forms').html(data); // Display fetched data
                      },
                      error: function() {
                          $('#result_forms').html('<p class="p-4 text-red-500">Error fetching data.</p>');
                      }
                  });
              }

              // Event listener for search input
              $('#search_text_forms').on('keyup', function() {
                  var search = $(this).val();
                  load_data(search); // Fetch filtered data
              });
          });
    </script>

    
  <!-- Staff Directory js -->
    <script>
        $(document).ready(function() {
            // Load data initially (3 rows)
            load_data();

            // Function to load data
            function load_data(query = '') {
                $.ajax({
                    url: "fetch_staff.php",  // Use your staff fetch endpoint
                    method: "POST",
                    data: { query: query },
                    success: function(data) {
                        $('#result_staff').html(data); // Display fetched data
                    },
                    error: function() {
                        $('#result_staff').html('<p class="p-4 text-red-500">Error fetching data.</p>');
                    }
                });
            }

            // Event listener for search input
            $('#search_text_staff').on('keyup', function() {
                var search = $(this).val();
                load_data(search); // Fetch filtered data
            });
        });
    </script>

  <!--vendors js -->
    <script>
            document.getElementById('search_text_vendor').addEventListener('input', function() {
                var searchQuery = this.value;
                if (searchQuery.length >= 3 || searchQuery.length == 0) {
                    fetchVendors(searchQuery);
                }
            });

            function fetchVendors(search) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'fetch_vendors.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        document.getElementById('result_vendor').innerHTML = xhr.responseText;
                    } else {
                        document.getElementById('result_vendor').innerHTML = 'Error loading vendors';
                    }
                };
                xhr.send('query=' + encodeURIComponent(search));
            }
    </script>
    <!-- JavaScript for AJAX Call (Staff Directory) -->
    <script>
              $(document).ready(function() {
                  // Load data initially (3 rows)
                  load_data();

                  // Function to load data
                  function load_data(query = '') {
                      $.ajax({
                          url: "fetch_vendor.php",  // Use your staff fetch endpoint
                          method: "POST",
                          data: { query: query },
                          success: function(data) {
                              $('#result_vendor').html(data); // Display fetched data
                          },
                          error: function() {
                              $('#result_vendor').html('<p class="p-4 text-red-500">Error fetching data.</p>');
                          }
                      });
                  }

                  // Event listener for search input
                  $('#search_text_vendor').on('keyup', function() {
                      var search = $(this).val();
                      load_data(search); // Fetch filtered data
                  });
              });
    </script>
  <!--Project templates-->
  <!--staff list-->
  <!--staff list-->
    


</body>
</html>