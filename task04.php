<?php
function whoami(){
    if(isset($_POST["name"])){
        $name=$_POST["name"];   
    }
    if(isset($_POST["age"])){
        $age=$_POST["age"];
    }
    if(!isset($name) and !isset($age)){
        echo "Hi, I have no name and no age.";
        return;
    }
    elseif(!isset($name) and isset($age) and $age<=0){
        echo "Hi, I have no name and no age.";
        return;
    }
    elseif(isset($name) and isset($age) and $age<=0){
        echo "Hi, my name is $name.";
        return;
    }
    elseif(!isset($name) and isset($age) and $age>0){
        echo "Hi, I have no name and I'm $age years old.";
        return;
    }
    elseif(isset($name) and !isset($age)){
        echo "Hi, my name is $name";
        return;
    }
    elseif(isset($name) and isset($age) and $age>0){
        echo "Hi, my name is $name and I'm $age years old.";
        return;
    }

}