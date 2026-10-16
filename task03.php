<?php
function dynamic_body(){
    if(!isset($_GET["page"])){
        return "<p>Unknown page</p>";
    }
    $ch=$_GET["page"];
    if($ch!="sql" and $ch!="home" and $ch!="php"){
        return "<p>Unknown page</p>";
    }
    $ch1=$ch;
    $ch1.=".html";
    $content=file_get_contents($ch1);
    return $content;
    
}