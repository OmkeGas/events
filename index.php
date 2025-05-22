    <?php
    require_once __DIR__ . '/config.php';
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Landing Page</title>
        <style>
        @import url("https://fonts.cdnfonts.com/css/lemonmilk");
        @import url("https://fonts.cdnfonts.com/css/product-sans");
        h1 {
            font-family: "Lemon/Milk", sans-serif;
        }
        p {
            font-family: "Product Sans", sans-serif;
        }
        a {
            font-family: "Product Sans", sans-serif;
        }
        </style>
        <link rel="stylesheet" href="./src/css/main.css">
    </head>
    <body class="bg-white font-sans text-gray-800">
        <header
        class="bg-[#7DBAFF] px-6 py-4 flex items-center justify-between shadow-md"
        >
        <div>
            <img  
            src="<?= $base_url ?>/src/images/logo fix maksimal.png"
            alt="DI PENS Logo" class="px-6 h-12" />
        </div>

        <div class="flex-1 mx-[100px] relative w-[800px]">
            <div
            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
            >
            <svg
                class="w-5 h-5 text-gray-500"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z"
                />
            </svg>
            </div>

            <input
            type="text"
            placeholder="Search"
            class="w-full pl-10 pr-4 py-2 border bg-[#ffffff] border-gray-300 rounded-full shadow-sm focus:outline-none"
            />
        </div>

        <nav class="flex items-center space-x-6 text-base">
            <a href="test.html" class="text-white hover:underline">Home</a>
            <a href="#" class="text-white hover:underline">Event</a>
            <a
            href="#"
            class="px-4 py-1 border border-[#FFFFFF] text-white rounded hover:bg-[#dbe9ff]"
            >Log in</a
            >
            <a
            href="#"
            class="px-4 py-1 bg-white text-[#1C2D5A] border border-[#1C2D5A] rounded hover:bg-[#c6dbff]"
            >Sign Up</a
            >
        </nav>
        </header>

        <section
        class="flex flex-col lg:flex-row items-center justify-between px-6 md:px-20 lg:pl-40 py-10 lg:py-10"
        >
        <div class="max-w-xl space-y-6 lg:w-1/2 lg:max-w-none pt-10">
            <h1 class="text-6xl font-bold leading-snug text-[#1C2D5A]">
            FIND YOUR <br />
            INTEREST SEMINAR <br />
            <div class="flex items-center space-x-3">
                <span>IN</span>
                <img
                src="<?= $base_url ?>/src/images/logo fix maksimal.png"
                alt="DIPENS Logo"
                class="w-50 h-20"
                />
            </div>
            </h1>

            <p class="text-gray-800 text-lg">
            DiPENS is the largest platform for finding seminars. <br />
            There are various types of seminars you need. <br />
            So register yourself now and find the seminar that interests you!
            </p>
            <a
            href="#"
            class="inline-block px-8 py-2 bg-[#1C2D5A] text-white font-semibold rounded-full shadow hover:bg-[#162447]"
            >Start now</a
            >
        </div>

        <div class="mt-12 lg:mt-0 lg:w-1/2 flex justify-center">
            <img
            src="<?= $base_url ?>/src/images/Landing Page Photo.png"
            alt="Dipens Team"
            class="w-full max-w-xl mx-auto lg:max-w-none lg:w-[700px] h-auto"
            />
        </div>
        </section>
    </body>
    </html>
