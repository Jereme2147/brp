<?php
    $email = $_POST['email'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $business = $_POST['business'];
    $comments = $_POST['comments'];
    $phone = $_POST['phone'];
    $need = $_POST['need'];
    $heating = $_POST['heating'];
    $cooking = $_POST['cooking'];
    $water = $_POST['water'];
    $fireplace = $_POST['fireplace'];
    $clothes = $_POST['clothes'];
    $generator = $_POST['generator'];

    $error = '<script>alert("Please enter a message")</script>';
    // echo "Email $email First $first Last $last Business $business Message $message";
    if ($comments != '') {
        mail('info@jeremedaniels.com', 'Customer', $comments . ' ' . $email . ' ' .
            $first . ' ' . $busines . ' ' . $comments . ' ' . $phone . ' ' . $need . ' ' . 
            $heating . ' ' . $cooking . ' ' . $water . ' ' . $fireplace . ' ' . $clothes . ' '
            . $generator);
        // mail('info@jeremedaniels.com', 'Customer', $message . ' ' . $email);
        header("Location: ../index.php");
    } else {
        header("Location: ../index.php");
    }

?>