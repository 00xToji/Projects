<?php

include '../config.php';
include 'admin_check.php';

checkAdminAccess($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope online | add products </title>
    <link rel="stylesheet" href="index.css">
    <style>
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #4CAF50; /* Cool green */
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2> Online Shopping Store </h2>
                <img src="logo.png" alt="logo" width="450px">
                <input type="text" name='name' placeholder="Enter product name">
                <br>
                <input type="text" name='price' placeholder="Enter product price">
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> Select product image </label>
                <button name='upload'>Upload product✅</button>
                <br><br>
                <a href="products.php"> Show all products </a>
            </form>

            <a href="../index_admin.php" class="back-button">Back to Dashboard</a>
        </div>
        <p>Developer By Mostafa Hamza</p>
    </center>
</body>
</html>
