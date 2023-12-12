<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <title>Faculty</title>
</head>
<body>
<!-- NAVIGATION -->
<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://www.bmcc.cuny.edu/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://mybmcc.bmcc.cuny.edu/public/images/customization/Common/mybmcc.bmcc.cuny.edu_APM_act_logon_page_ag/image07_en.jpg" class="h-8" alt="BMCC Logo">
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a href="application.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Apply to Club</a>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="index.html" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Program Goals</button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="goal1.html" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Goal 1</a>
                            </li>
                            <li>
                                <a href="goal2.html" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Goal 2</a>
                            </li>
                            <li>
                                <a href="goal3.html" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Goal 3</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="faculty.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Faculty</a>
                </li>
                <li>
                    <a href="events.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">News & Events</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- MAIN CONTENT -->
<section class="bg-white dark:bg-gray-900" style="margin-top: 50px">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h1 class="mb-4 text-lg font-medium leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Program <mark class="px-2 text-white bg-blue-600 rounded">faculty</mark></h1>
        </div>
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
            <?php
            // Include the database connection file
            include("connect.php");

            // SQL query to fetch data from the 'event' table
            $sql = "SELECT id, fullName, position, bio FROM Faculty";

            // Perform the query and check for errors
            $result = $conn->query($sql);
            if (!$result) {
                die("Error fetching data: " . $conn->error);
            }

            // Check if there are rows in the result set
            if ($result->num_rows > 0) {
                // Output data of each row as event cards
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="items-start bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">';
                    echo '<div class="p-5">';
                    echo '<h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">' . $row["fullName"] .'</h3>';
                    echo '<span class="text-gray-500 dark:text-gray-400">' . $row["position"] . '</span>';
                    echo '<p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">' . $row["bio"] .'</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No records found";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>
</section>
<!-- FOOTER -->
<footer class="bg-white rounded-lg shadow m-4">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <img src="https://www.cuny.edu/wp-content/uploads/sites/4/page-assets/about/administration/offices/communications-marketing/university-identity/cuny-block-logo-1.jpg" class="h-8" alt="CUNY Logo" />
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="https://www.bmcc.cuny.edu/" class="hover:underline me-4 md:me-6">BMCC Website</a>
            </li>
        </ul>
    </div>
</footer>
</body>
</html>