<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);

ini_set('display_errors',"1" );
ini_set('display_startup_errors',"1");
error_reporting("E_ALL");

session_start();

//$nameErr =


$email = $streetErr = $emailErr = $city = $cityErr = $streetN = $streetNErr = $zipcode = $zipcodeErr = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {                               
            $emailErr = "Invalid email format";
        }
    }
    // street validation
    if (empty($_POST["street"])) {
        $streetErr = "street name is required";
    }

    if (empty($_POST["city"])) {
        $cityErr = "city name is required";
    }

    if (empty($_POST["streetnumber"])) {
        $streetNErr = "Street number is required";
    } else {
        $streetN = $_POST["streetnumber"];
        if (is_numeric($streetN)) {
            $streetN = $_POST["streetnumber"];
        } else {
            $streetNErr = "Numbers Only accepted"; PHP_EOL;
        }
    }

    if (empty($_POST["zipcode"])) {
        $zipcodeErr = "Zipcode is required";
    } else {
        $zipcode = $_POST["zipcode"];
        if (is_numeric($zipcode)) {
            $zipcode = $_POST["zipcode"];
        } else {
            $zipcodeErr = "Numbers Only accepted"; PHP_EOL;
        }
    }

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


//we are going to use session variables so we need to enable sessions



if (!empty($_POST)) {
    $_SESSION['email']= $_POST["email"];
    $_SESSION['adress'] = $_POST["street"];
    $_SESSION['streetnumber'] = $_POST["streetnumber"];
    $_SESSION['city'] = $_POST["city"];
    $_SESSION['zipcode'] = $_POST["zipcode"];
}

setcookie("usr","$email" , time()+20);
echo $_COOKIE['usr'];

setcookie("usr1", "$zipcode", time()+20);
echo $_COOKIE['usr1'];

setcookie("usr2","$city", time()+20);
echo $_COOKIE['usr2'];


    function whatIsHappening()
    {
        echo '<h2>$_GET</h2>';
        var_dump($_GET);
        echo '<h2>$_POST</h2>';
        var_dump($_POST);
        echo '<h2>$_COOKIE</h2>';
        var_dump($_COOKIE);
        echo '<h2>$_SESSION</h2>';
        var_dump($_SESSION);
    }

//your products with their price.

if (isset($_GET["food"]) == 1 && $_GET["food"] == 0) {
    $products = [
        ['name' => 'Cola', 'price' => 2],
        ['name' => 'Fanta', 'price' => 2],
        ['name' => 'Sprite', 'price' => 2],
        ['name' => 'Ice-tea', 'price' => 3],
    ];
}else $products = [
    ['name' => 'Club Ham', 'price' => 3.20],
    ['name' => 'Club Cheese', 'price' => 3],
    ['name' => 'Club Cheese & Ham', 'price' => 4],
    ['name' => 'Club Chicken', 'price' => 4],
    ['name' => 'Club Salmon', 'price' => 5]
    ];
    $totalValue = 0;
    require 'form-view.php';
    whatIsHappening();


