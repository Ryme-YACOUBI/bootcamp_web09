<?php
function render_body(string $ch){
    if($ch!="sql" and $ch!="home" and $ch!="php"){
        return "<p>Unknown page</p>";
    }
    elseif($ch==="sql"){
        $content=file_get_contents("sql.html");
    }
    elseif($ch==="home"){
        $content=file_get_contents("home.html");
    }
    elseif($ch==="php"){
        $content=file_get_contents("php.html");
    }
    return $content;
}