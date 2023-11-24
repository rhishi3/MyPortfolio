<?php

$conn = mysqli_connect('localhost', 'root', '', 'my_portfolio');

    if ($conn) {
        echo "Successfull Connect";
    }else{
        echo "Not Connect";
    }