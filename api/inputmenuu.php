<?php 
//meng include kan halaman init.php
require_once "core/init.php";
// json response array
$response = array("error" => FALSE);
if (isset($_POST['katagori']) && isset($_POST['nama_menu']) && isset($_POST['status'])&& isset($_POST['HARGA'])) {
  
    // menerima parameter POST ( katagori, nama_menu, status, harga )
    $katagori = $_POST['katagori'];
    $nama_menu = $_POST['nama_menu'];
    $status = $_POST['status'];
    $harga = $_POST['HARGA'];
    $photo = $_POST['photo'];
    //mengecek id apakah sudah pernah daftar atau belum
    
      //mendaftarkan menu baru
      $newmenu = input_menu($katagori,$nama_menu,$status,$harga);
      if($newmenu){
        // simpan menu berhasil
        $response["error"] = FALSE;
        echo json_encode($response);
      }else{
        // gagal menyimpan menu
        $response["error"] = TRUE;
        $response["error_msg"] = "Terjadi kesalahan saat melakukan registrasi";
        echo json_encode($response);
      }
    
}
?>