<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
        <link href="{{ asset('frontend/asset') }}/output.css" rel="stylesheet" />
        <link href="{{ asset('frontend/asset') }}/style.css" rel="stylesheet" />
    </head>
    <body>
        <header class="bg-white flex fixed w-full drop-shadow-lg z-20">
            <div class="container mx-auto flex justify-between px-2 py-5">
                <div><img width="200px" src="{{ asset('frontend/asset') }}/assets/logo title 1.png" /></div>
                <i
                    class="fa-solid fa-bars lg:hidden cursor-pointer text-2xl flex items-center text-ptagcolor navClick"
                ></i>
                <nav class="lg:flex hidden items-center justify-center">
                    <ul
                        class="uppercase flex gap-x-10 xl:gap-x-16 text-ptagcolor font-ru font-medium"
                    >
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('home') }}"
                        >
                            HOME
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('about') }}"
                        >
                            ABOUT
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('service') }}"
                        >
                            SERVICES
                        </a>
                        <a
                            class="cursor-pointer transition duration-300 ease-in-out nav_producthover"
                            href="{{ route('products') }}"
                        >
                            <span class="nav_product">
                                <ul class="flex flex-col gap-y-4">
                                    <li class="border-b pb-2">
                                        CIRCULAR KNIT ITEMS
                                    </li>
                                    <li class="border-b pb-2">
                                        SWEATER / FLAT KNIT
                                    </li>
                                    <li class="border-b pb-2">DENIM ITEMS</li>
                                    <li class="border-b pb-2">WOVEN ITEMS</li>
                                    <li>UNDERGARMENTS</li>
                                </ul>
                            </span>
                            Products
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('mission.and.vission') }}"
                        >
                            Mission & Vision
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('contact') }}"
                        >
                            Contact Us
                        </a>
                    </ul>
                </nav>

                <nav
                    class="absolute hidden w-full top-16 left-0 bg-white p-5 navBar"
                >
                    <ul
                        class="uppercase flex flex-col gap-y-5 text-ptagcolor font-ru font-medium"
                    >
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('home') }}"
                        >
                            HOME
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('about') }}"
                        >
                            ABOUT
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('service') }}"
                        >
                            SERVICES
                        </a>
                        <a
                            class="cursor-pointer transition duration-300 ease-in-out nav_producthover"
                            href="{{ route('product') }}"
                        >
                            <span class="nav_product">
                                <ul class="flex flex-col gap-y-4">
                                    <li class="border-b pb-2">
                                        CIRCULAR KNIT ITEMS
                                    </li>
                                    <li class="border-b pb-2">
                                        SWEATER / FLAT KNIT
                                    </li>
                                    <li class="border-b pb-2">DENIM ITEMS</li>
                                    <li class="border-b pb-2">WOVEN ITEMS</li>
                                    <li>UNDERGARMENTS</li>
                                </ul>
                            </span>
                            Products
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('mission.and.vission') }}"
                        >
                            Mission & Vision
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('contact') }}"
                        >
                            Contact Us
                        </a>
                    </ul>
                </nav>
            </div>
        </header>
       @yield('content')

        <footer class="bg-[#0a0a0a] pt-16 pb-8">
            <div class="container mx-auto px-2 flex smd:max-md:flex-col smd:max-md:gap-y-7">
                <div class="md:w-[30%]">
                    <h6 class="font-ru text-white text-3xl mb-8">
                        Get Free Estimate
                    </h6>
                    <a
                        class="uppercase font-ru lg:font-medium text-white z-10 px-[10px] lg:px-8 py-2 button"
                        ><span class="hoverspan"></span>Request Online Form</a
                    >
                </div>
                <div class="md:w-[20%]">
                    <h6 class="font-ru text-white text-3xl mb-8">
                        Useful Links
                    </h6>
                    <ul
                        class="text-white font-ru flex flex-col gap-y-6 font-medium"
                    >
                        <li
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                        >
                            Services
                        </li>
                        <li
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                        >
                            About
                        </li>
                        <li
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                        >
                            Mission Vision
                        </li>
                    </ul>
                </div>
                <div class="md:w-[50%]">
                    <h6 class="font-ru text-white text-3xl mb-8">Contact Us</h6>
                    <div class="flex gap-x-5">
                        <i class="fa-solid fa-location-dot text-primary"></i>
                        <p class="text-white font-ru font-medium">
                            House-36, Road-9, Sector-4 Uttara, Dhaka-1230.
                        </p>
                    </div>
                    <div class="flex gap-x-5 mt-5">
                        <i class="fa-solid fa-phone text-primary"></i>
                        <p class="text-white font-ru font-medium">
                            +8801703017360<br />
                            +8801726225633
                        </p>
                    </div>
                    <div class="flex gap-x-5 mt-5">
                        <i class="fa-solid fa-envelope text-primary"></i>
                        <p class="text-white font-ru font-medium">
                            Md Zaherul Islam<br />
                            zaherul.islam1978@gmail.com<br />
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="font-ru px-2 font-medium text-white mt-12 border-t pt-8 border-[#27272771] flex justify-center"
            >
                Copyright © 2024 LN Associate Limited . Develope By
                <a
                    class="text-primary ml-1 smd:max-md:contents"
                    href="https://synexdigital.com/"
                    target="_blank"
                >
                    Synex digital</a
                >
            </div>
        </footer>

        <!-- JS start -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script>
            $(document).ready(function () {
                $(".carousel1").owlCarousel({
                    loop: true,
                    margin: 10,
                    items: 1,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplaySpeed: 1000,
                    smartSpeed: 1000,
                    dots: false,
                    navText: [
                        "<div class='absolute smd:max-md:hidden top-[45%] right-5 z-[2] text-4xl bg-[#0000002e] w-[50px] h-[50px] rounded-full flex items-center justify-center text-white hover:bg-[#000000ad]'><i class='fa-solid fa-chevron-right'></i></div>",
                        "<div class='absolute top-[45%] left-5 z-[2] text-4xl bg-[#0000002e] w-[50px] h-[50px] smd:max-md:hidden rounded-full flex items-center justify-center text-white hover:bg-[#000000ad]'><i class='fa-solid fa-chevron-left'></i></div>",
                    ],
                    responsiveClass: true,
                    nav: true,
                });
                $(".carousel2").owlCarousel({
                    loop: true,
                    margin: 10,
                    items: 3,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplaySpeed: 1000,
                    smartSpeed: 1000,
                    dots: false,
                    navText: [
                        "<div class='absolute top-[35%] right-2 z-[2] text-xl bg-[#0000002e] w-[50px] h-[50px] rounded-full flex items-center justify-center text-white hover:bg-[#000000ad]'><i class='fa-solid fa-chevron-right'></i></div>",
                        "<div class='absolute top-[35%] left-2 z-[2] text-xl bg-[#0000002e] w-[50px] h-[50px] rounded-full flex items-center justify-center text-white hover:bg-[#000000ad]'><i class='fa-solid fa-chevron-left'></i></div>",
                    ],
                    responsiveClass: true,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 2,
                        },
                        1024: {
                            items: 3,
                        },
                    },
                });
            });
        </script>
        <script>
            let navClick = document.querySelector(".navClick");
            let navBar = document.querySelector(".navBar");

            navClick.addEventListener("click", function () {
                navBar.classList.toggle("hidden");
            });
        </script>
        <!-- JS end -->
    </body>
</html>
