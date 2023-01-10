<?php

// connect to database
$conn = mysqli_connect('locolhost', 'root', '123456', 'ajaxtest');

$query = 'SELECT * FROM users';


$result = mysqli_query($conn, $query);


$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_decode($users);