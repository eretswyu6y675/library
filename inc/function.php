<?php

$connect = mysqli_connect('localhost','root','','bebe',);



function get_cat() {

    global $connect;

    $get_cat = "select * from category";

    $run_cat = mysqli_query($connect, $get_cat);

    while($row_cat = mysqli_fetch_array($run_cat)) {


        echo '<li><a href="#">'.$row_cat['c_name'].'</a></li>';


    }


}



?>