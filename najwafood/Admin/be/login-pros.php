<?php
session_start();
// set post fields
if(isset($_POST['submit']))
   {
    echo("First name: " . $_POST['nik'] . "<br />\\n");
    echo("Last name: " . $_POST['password'] . "<br />\\n");

    $data = array(
        'name' =>  $_POST['nik'],
        'password' => $_POST['password']
    );

    $ch = curl_init('http://localhost/najwafood-nis/najwafood/api/login.php');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// execute!
    $response = curl_exec($ch);

// close the connection, release resources used
    curl_close($ch);

// do anything you want with your response
    $dataku = json_decode($response, TRUE);

    echo "<pre>";
    print_r($dataku);
    echo "</pre>";
    if ($dataku['error'] === false) {
        $_SESSION['name'] = $$dataku['user'].['name'];
        header("Location: ../pages/index.php");
    }

    else{
        echo "la ko hamil";
    }
}


?>