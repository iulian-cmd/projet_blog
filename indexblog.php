<?php
    if(isset($_GET['page'])){
            include("headerBlog.php");
            include $_GET['page']; 
            include("footerBlog.php");
        }
    else{
        include("headerBlog.php");
        include("usages.php"); 
        include("footerBlog.php");
    }
?>