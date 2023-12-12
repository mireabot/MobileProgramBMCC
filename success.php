<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="application.css">
    <title>Success</title>
</head>
<body>
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center">
            <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-primary-500">Success</h1>
            <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">We have received your submission and will get back soon!</p>
            <a href="index.html" class="actionButton">Back to Homepage</a>
        </div>
    </div>
</section>
</body>
</html>

<?php
$servername = "localhost";
$username = "id21563087_super";
$password = "BMCCMobile44$";
$database = "id21563087_main";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo "Error Connecting DataBase. Try Again...";
}
else{
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $cunyID = $_POST['CUNYID'];
        $name = $_POST['name'];

        $query = "INSERT INTO Student (email, CUNYID, name) VALUES('$email', '$cunyID', '$name')";

        $result = mysqli_query($conn, $query);
    }
}

?>