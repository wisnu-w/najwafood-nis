<?php
// set post fields
if(isset($_POST['simpan']))
   {



    $data = array(
        'name' =>  $_POST['Username'],
        'password' => $_POST['email'],
        'email' =>  $_POST['password'],
        'role' => $_POST['Role']
    );

    $ch = curl_init('http://localhost/najwafood-nis/najwafood/api/register.php');
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
        
        header("Location: ../pages/index.php?user");
    }

    else{
        echo "la ko hamil";
    }
}


?>