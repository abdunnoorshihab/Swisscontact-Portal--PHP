
  <footer class="bg-white shadow py-4 w-full">
        <div class="fcontainer mx-auto px-6 text-center text-gray-700">
          <p>&copy; 2024 Swisscontact. All rights reserved.</p>
        </div>
  </footer>
  <!-- Header JS -->
    <script>
          function toggleMenu() {
              document.getElementById("menuItems").classList.toggle("active");
          }
    </script>


  <!-- Carousel -->
            
    <script>
        const carousel = document.getElementById('carousel');
        const next = document.getElementById('next');
        const prev = document.getElementById('prev');
        const pagination = document.getElementById('pagination');

        let index = 0;
        const totalSlides = carousel.children.length;

        // Function to update carousel position
        const updateCarousel = () => {
        carousel.style.transform = `translateX(-${index * 100}%)`;
        updatePagination();
        };

        // Function to update pagination dots
        const updatePagination = () => {
        Array.from(pagination.children).forEach((dot, dotIndex) => {
            dot.classList.toggle('bg-gray-800', dotIndex === index);
            dot.classList.toggle('bg-gray-400', dotIndex !== index);
        });
        };

        // Automatically change slides every 3 seconds
        let interval = setInterval(() => {
        index = (index + 1) % totalSlides;
        updateCarousel();
        }, 3000);

        // Navigate to next slide
        next.addEventListener('click', () => {
        clearInterval(interval); // Reset interval
        index = (index + 1) % totalSlides;
        updateCarousel();
        interval = setInterval(() => {
            index = (index + 1) % totalSlides;
            updateCarousel();
        }, 3000);
        });

        // Navigate to previous slide
        prev.addEventListener('click', () => {
        clearInterval(interval); // Reset interval
        index = (index - 1 + totalSlides) % totalSlides;
        updateCarousel();
        interval = setInterval(() => {
            index = (index + 1) % totalSlides;
            updateCarousel();
        }, 3000);
        });

        // Generate pagination dots
        for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement('div');
        dot.classList.add('w-3', 'h-3', 'rounded-full', 'cursor-pointer', 'bg-gray-400');
        dot.addEventListener('click', () => {
            clearInterval(interval); // Reset interval
            index = i;
            updateCarousel();
            interval = setInterval(() => {
            index = (index + 1) % totalSlides;
            updateCarousel();
            }, 3000);
        });
        pagination.appendChild(dot);
        }

        // Initialize carousel and pagination
        updateCarousel();


    </script>

  <!-- Quick links -->

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
  <!--IT Tutorials-->
    <!--swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const myTutorialSwiper = new Swiper(".my-tutorial-swiper", {
                slidesPerView: 1,
                spaceBetween: 20,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                },
            });
        });
    </script>



  <!--staff list-->
    


</body>
</html>