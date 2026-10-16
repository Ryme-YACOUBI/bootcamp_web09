<?php
function form_is_submitted(){
    if(isset($_POST["submit"]))
        return true;
    return false;
}
function whoami(){
    if(isset($_POST["name"]) and  $_POST["name"] !== ""){
        $name=$_POST["name"];   
    }
    if(isset($_POST["age"]) and $_POST["age"] !== ""){
        $age=$_POST["age"];
    }
    if(isset($_POST["curriculum"]) and $_POST["curriculum"] !== ""){
        $curriculum=$_POST["curriculum"];
    }
    $tab = [
    "pge" => "PGE (Programme Grande Ecole)",
    "bachelor" => "Bachelor",
    "msc" => "MSc Pro",
    "coding" => "Coding Academy",
    "wac" => "Web@cademie"
    ];
    if(!isset($name) and !isset($age)){
        echo "Hi, I have no name and no age. ";
    }
    elseif(!isset($name) and isset($age) and $age<=0){
        echo "Hi, I have no name and no age.";
    }
    elseif(isset($name) and isset($age) and $age<=0){
        echo "Hi, my name is $name.";
    }
    elseif(!isset($name) and isset($age) and $age>0){
        echo "Hi, I have no name and I'm $age years old.";        
    }
    elseif(isset($name) and !isset($age)){
        echo "Hi, my name is $name";
    }
    elseif(isset($name) and isset($age) and $age>0){
        echo "Hi, my name is $name and I'm $age years old.";
    }
    if(isset($curriculum)){
        echo "I'm a student of $tab[$curriculum].";
    }
}