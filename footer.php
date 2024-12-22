
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
 

    
  <!-- Staff Directory js -->


  <!--vendors js -->
 
  <!--Project templates-->

    <script>
        // Initialize Swiper
        var swiper = new Swiper('.mySwiper1', {
            slidesPerView: 4,
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
                800: {
                    slidesPerView: 6,
                },
            }
        });
    </script>
  <!--IT Tutorials-->
    <!--swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const myTutorialSwiper = new Swiper(".my-tutorial-swiper", {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
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




    


  <!--Knowledge Sharing -->
        <script>
            // Initialize Swiper
            var swiper = new Swiper('.mySwiper2', {
                slidesPerView: 3,
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
                }
            });
        </script>
  <!--Gender Equality -->
        <script>
            // Initialize Swiper
            var swiper = new Swiper('.mySwiper3', {
                slidesPerView: 3,
                spaceBetween: 10,
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
                }
            });
        </script>


<!--all events -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
        $(document).ready(function () {
        var mySwiper = new Swiper(".swiper-container", {
            autoHeight: true,
            speed: 600,
            direction: "horizontal",
            pagination: {
            el: ".swiper-pagination-progressbar-fill",
            type: "progressbar",
            },
            loop: false,
            effect: "slide",
            spaceBetween: 30,
            on: {
            init: function () {
                $(".swiper-pagination-switch").removeClass("text-indigo-500");
                $(".swiper-pagination-switch").eq(0).addClass("text-indigo-500");
            },
            slideChangeTransitionStart: function () {
                $(".swiper-pagination-switch").removeClass("text-indigo-500");
                $(".swiper-pagination-switch").eq(mySwiper.realIndex).addClass("text-indigo-500");
            },
            },
        });

        $(".swiper-pagination-switch").click(function () {
            mySwiper.slideTo($(this).index());
            $(".swiper-pagination-switch").removeClass("text-indigo-500");
            $(this).addClass("text-indigo-500");
        });
        });
    </script>
</body>
</html>