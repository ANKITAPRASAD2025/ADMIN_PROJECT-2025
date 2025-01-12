<?php
session_start();
function common_page($page,$page_title="")
{
        include("../client/$page.php");
}
require_once 'conn.php';
$db=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
if(!$db)
{
    die("database is not connection");
}
else
{
    // echo "connection";
}

?>