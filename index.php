<?php include "inc/function.php";
include "inc/db.php"; 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P.S.M</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .h{
            padding: 30px;
        }
        .pp{
            margin-top: -30px;
            padding: 10px;
            padding-left: 35px;
        }
        .nav-item{
            list-style: none;
            margin-left:600px ;
            margin-top: 395px;
        }
        .article button{
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="we">
Welcome
</div>    
<div class="menu">
    <ul class="w">
    
        <li><a href="index.php">الرئيسيه</a></li>
        <li><a href="addpost.php">New Post</a></li>
        <?php get_cat(); ?>
        <div class="c"></div>
    </ul>
</div>
<div class="Search">
    <div class="w">
        <div class="searchForm l">
            <form action="search.php" method="get">
                <input type="text" name="searchArea" placeholder="Search">
                <input class="go" type="submit" name="search" value="Confirm">
            </form>
        </div>
        <div class="c"></div>
    </div>
</div>
<?php
$query = 'SELECT * FROM posts';
$result = mysqli_query($connect, $query);

if(isset($result)){
    while ($roww = mysqli_fetch_assoc($result)){?>
    
        <div class="article">
            <div class="container">
                <h3 class="h"><a href="post.php?id=<?php echo$roww['id']?>"> <?php  echo $roww['title'];?></a></h3>
                <p class="pp"><?php echo $roww['post'];?></p>
                <a href="post.php?id=<?php echo$roww['id']?>"><button>Read in page</button></a>
            </div>
        </div>

    <?php
    }
    
};
?>
<li class="nav-item">
    <a class="nav-link" href="#">&copy; Soliman Abdallah & Mohammed Abdallah </a>
</li>
</body>
</html>