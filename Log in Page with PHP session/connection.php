<?php

    $con=mysqli_connect('localhost','root','','phplabfinal');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>