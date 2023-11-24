<?php

    include("../../component/database.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM `sliders` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('Location: ../../slider.php');
    }