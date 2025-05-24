<?php
require_once __DIR__ . '/config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>

    <link rel="stylesheet" href="<?= $base_url ?>/src/css/main.css">
  </head>

  <body class="bg-white font-sans text-gray-800">
    <header>
      <nav class="border-gray-200 bg-[#7DBAFF] dark:bg-gray-900">
        <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-3">
          <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="<?= $base_url ?>/src/images/logo.png" class="h-14" alt="DIPENS Logo" />
          </a>
          <div class="flex">
            <button
              type="button"
              data-collapse-toggle="navbar-search"
              aria-controls="navbar-search"
              aria-expanded="false"
              class="me-1 rounded-lg p-2.5 text-sm text-gray-500 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 focus:outline-none md:hidden dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
            >
              <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                />
              </svg>
              <span class="sr-only">Search</span>
            </button>
            <div class="relative hidden w-[40vw] md:block">
              <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                <svg
                  class="h-4 w-4 text-gray-500 dark:text-gray-400"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 20 20"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                  />
                </svg>
                <span class="sr-only">Search icon</span>
              </div>
              <input
                type="text"
                id="search-navbar"
                class="block w-full rounded-full bg-gray-50 p-3 ps-10 text-sm text-gray-900 focus:outline-0"
                placeholder="Search..."
              />
            </div>
            <button
              data-collapse-toggle="navbar-search"
              type="button"
              class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-gray-200 focus:outline-none md:hidden dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
              aria-controls="navbar-search"
              aria-expanded="false"
            >
              <span class="sr-only">Open main menu</span>
              <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
              </svg>
            </button>
          </div>
          <div class="hidden w-full items-center justify-between gap-8 md:flex md:w-auto" id="navbar-search">
            <div class="relative mt-3 md:hidden">
              <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                <svg
                  class="h-4 w-4 text-gray-500 dark:text-gray-400"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 20 20"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                  />
                </svg>
              </div>
              <input
                type="text"
                id="search-navbar"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                placeholder="Search..."
              />
            </div>
            <ul
              class="mt-4 flex flex-col space-y-2 rounded-lg bg-blue-200 p-4 font-medium md:mt-0 md:flex-row md:items-center md:space-y-0 md:space-x-8 md:border-0 md:bg-transparent md:p-0 rtl:space-x-reverse dark:border-gray-700 dark:bg-gray-800 md:dark:bg-gray-900"
            >
              <li>
                <a href="#" class="block rounded-sm bg-blue-500 px-3 py-2 text-white md:bg-transparent md:p-0 md:text-blue-600" aria-current="page"
                  >Home</a
                >
              </li>
              <li>
                <a href="#" class="block rounded-sm px-3 py-2 text-white hover:bg-blue-500 md:p-0 md:hover:bg-transparent md:hover:text-blue-700"
                  >Event</a
                >
              </li>
              <li>
                <button
                  type="button"
                  class="w-full cursor-pointer rounded-lg border border-white bg-transparent px-4 py-2 text-center text-sm font-medium text-white hover:bg-gray-100 hover:text-black focus:ring-4 focus:ring-blue-300 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                  Log in
                </button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section class="flex flex-col items-center justify-between px-6 py-10 md:px-20 lg:flex-row lg:py-10 lg:pl-40">
        <div class="max-w-xl space-y-6 pt-10 lg:w-1/2 lg:max-w-none">
          <h1 class="text-6xl font-lemon-milk leading-snug font-bold text-[#1C2D5A]">
            FIND YOUR <br />
            INTEREST SEMINAR <br />
            <div class="flex items-center space-x-3">
              <span>IN</span>
              <img src="<?= $base_url ?>/src/images/logo.png" alt="DIPENS Logo" class="h-20 w-50" />
            </div>
          </h1>

          <p class="text-lg text-gray-800">
            DiPENS is the largest platform for finding seminars. <br />
            There are various types of seminars you need. <br />
            So register yourself now and find the seminar that interests you!
          </p>
          <a href="#" class="inline-block rounded-full bg-[#1C2D5A] px-8 py-2 font-semibold text-white shadow hover:bg-[#162447]">Start now</a>
        </div>

        <div class="mt-12 flex justify-center lg:mt-0 lg:w-1/2">
          <img
            src="<?= $base_url ?>/src/images/profile-member.png"
            alt="Profile Member"
            class="mx-auto h-auto w-full max-w-xl lg:w-[700px] lg:max-w-none"
          />
        </div>
      </section>
    </main>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  </body>
</html>
