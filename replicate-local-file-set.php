<?php

$jsonraw = file_get_contents("../file-set.json");
$file_set = json_decode($jsonraw);
$baseurl = "../";

mkdir("data");
mkdir("plots");

foreach($file_set as $value){
    copy($baseurl.$value,$value);
}


?>
<a href = "index.html">CLICK ME(3/3)</a>
<style>
body{
    background-color:BLACK;
    font-family:Comic Sans MS;
    font-size:3em;
}
a{
        font-size:3em;
        color:#ff2cb4;

}
</style>
