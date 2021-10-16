<?php include "header.php";?>
<?php

    // post value

    $c_name = @$_POST['c_name'];


    // insert category
if(isset($_POST['addcat'])) {

    $insert_cat = "insert into category(c_name) values('$c_name')";

    $run_cat = mysqli_query($dp, $insert_cat);

    if(isset($run_cat)){

        header("Location: addcat.php");


    }

}



?>
<style>
    .name{
        margin-left: 500px;
    }
    .addcat{
        margin-left: 500px;
    }
    .home{
        margin-left: 500px;
    }
</style>
<div class="adminBody">
<form action="addcat.php" method="post">
<div class="home">
    <a href="../index.php">الصفحة الرئيسية</a>
    </div>
    <div class="name">
    <input type="text" name="c_name" placeholder="مدة الاستعارة">
    <br>
    </div>
    <div class="addcat">
    <input type="submit" name="addcat" value="اضافة المعلومات">
    </div>
</form>
</div>

<?php include "footer.php";?>