<?php
    if(is_numeric($_REQUEST["firstName"])){
        echo "First name cannot contain numaric values"  . "<br>";
    }
    else{
        $firstName = $_REQUEST["firstName"];
        echo "First Name: " . $firstName  . "<br>";
    }
    if(is_numeric($_REQUEST["lastName"])){
        echo "Last name cannot contain numaric values"  . "<br>";
    }
    else{
        $lastName = $_REQUEST["lastName"];
        echo "Last Name: " . $lastName  . "<br>";
    }

    
    if(isset($_REQUEST["designation"])){
        $designation = $_REQUEST["designation"];
        echo "Designation: " . $designation  . "<br>";
    }
    else{
        echo "Please select your designation"  . "<br>";
    }

    $email = $_REQUEST["email"];
    if($email == ""){
        echo "Email field cannot be empty"  . "<br>";
    }
    else{
        echo "Email: " . $email  . "<br>";
    }

    $password = $_REQUEST["password"];
    if(strlen($password) < 7){
        echo "Password must contain more then 6 charecters."  . "<br>";
    }

    if(isset($_REQUEST["java"]) || isset($_REQUEST["php"]) || isset($_REQUEST["cpp"])){
        if(isset($_REQUEST["java"]) && isset($_REQUEST["php"])){
            echo "Preferred: " . $_REQUEST["java"] . " and " . $_REQUEST["php"];
        }
        elseif(isset($_REQUEST["php"]) && isset($_REQUEST["cpp"])){
            echo "Preferred: " . $_REQUEST["php"] . " and " . $_REQUEST["cpp"];
        }
        elseif(isset($_REQUEST["java"]) && isset($_REQUEST["cpp"])){
            echo "Preferred: " . $_REQUEST["java"] . " and " . $_REQUEST["cpp"];
        }
        elseif(isset($_REQUEST["java"])){
            echo "Preferred: " . $_REQUEST["java"];
        }
        elseif(isset($_REQUEST["php"])){
            echo "Preferred: " . $_REQUEST["php"];
        }
        else{
            echo "Preferred: " . $_REQUEST["cpp"];
        }
    }
    else{
        echo "Please select a preferred Language";
    }
?>