<?php 
//meng include kan halaman init.php
require_once "core/init.php";
// json response array

    // menerima parameter POST ( katagori, nama_menu, status, harga )

    //mengecek id apakah sudah pernah daftar atau belum
    
      //mendaftarkan menu baru
      $print = print_user();
      if($print){
        // simpan menu berhasil
        $response["error"] = FALSE;
        echo json_encode($print);
        return $print;
        
      }else{
        // gagal menyimpan menu
        $response["error"] = TRUE;
        $response["error_msg"] = "Terjadi kesalahan saat Load user ";
        echo json_encode($response);
      }
    

?>