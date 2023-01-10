<?php

// connect to database
$conn = mysqli_connect('locolhost', 'root', '123456', 'ajaxtest');

echo 'processing...';

//check for post variable
if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
     echo 'POST: Your name is '.$_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if (mysqli_query($conn, $query)) {
        echo 'User Added...';
    } else {
        echo 'Error: '.mysqli_error($conn);
    }
}

// check for get variable
if (isset($_GET['name'])) {
    echo 'GET: Your name is '.$_GET['name'];
}
