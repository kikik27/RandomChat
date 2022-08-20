<?php
include "koneksi.php";
  date_default_timezone_set("Asia/Jakarta");
  $waktu = date("H:i:sa");

  if (isset($_POST['simpan'])){
    $chat = $_POST['cht'];

    if(empty($chat)){
      echo "<script>alert('chat tidak boleh kosong');location.href='index.php';</script>";
    }else{
      $sql = "INSERT INTO data (id, waktu, chat) VALUES ('','$waktu','$chat')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>location.href='index.php';</script>";
  } else {
    echo "<script>alert('Pesan Gagal Terkirim');location.href='index.php';</script>";
  }
  
  $conn->close();

    }


}


?>
