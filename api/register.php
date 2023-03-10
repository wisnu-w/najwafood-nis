<?php 
//meng include kan halaman init.php
require_once "core/init.php";
// json response array
$response = array("error" => FALSE);
if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['role'])) {
  
    // menerima parameter POST ( name, password, email )
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    //mengecek id apakah sudah pernah daftar atau belum
    if( cek_nama($name) == 0 ){
      //mendaftarkan user baru
      $user = register_user($name, $password, $email, $role);
      if($user){
        // simpan user berhasil
        $response["error"] = FALSE;
        $response["user"]["name"] = $user["user_username"];
        $response["user"]["key"] = $user["unique_id"];
        echo json_encode($response);
      }else{
        // gagal menyimpan user
        $response["error"] = TRUE;
        $response["error_msg"] = "Terjadi kesalahan saat melakukan registrasi";
        echo json_encode($response);
      }
    }else{
      // user telah ada
      $response["error"] = TRUE;
      $response["error_msg"] = "User telah ada ";
      echo json_encode($response);
    }
}
?>