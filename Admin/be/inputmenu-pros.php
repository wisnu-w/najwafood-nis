<?php
// set post fields
if(isset($_POST['submit']))
   {



    $data = array(
        'katagori' =>  $_POST['katagori'],
        'nama_menu' => $_POST['nama_menu'],
        'status' =>  $_POST['status'],
        'HARGA' => $_POST['HARGA']
    );

    $ch = curl_init('https://aerochain.id/api/inputmenu.php');
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
        
        header("Location: ../pages/index.php?menu");
    }

    else{
        echo "la ko hamil";
    }
}


?>