<?php

include 'config/connect.php';


// query function ex : gawean_query("select * from materi");
function query_ambil($sql){
  global $conn;

  $result = mysqli_query($conn, $sql);

  $data = [];
  while($rows = mysqli_fetch_assoc($result)){
    array_push($data,$rows);
  }

  return $data;
}

function query($sql){
  global $conn;

  if (mysqli_query($conn, $sql)) {
    return "Proses Query Berhasil";
  } else {
    return "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}


function upload(){

  $namaFile= $_FILES['gambar']['name'] ;
  $ukuranFIle = $_FILES['gambar']['size'] ;
  $error = $_FILES['gambar']['error'] ;
  $tmpName = $_FILES['gambar']['tmp_name'] ;

  // cek apakah tidak ada gambar yang di upload

  if($error === 4){
     echo "<script>
        alert('pilih gambar dulu!');
     </script>
     ";
     return false;
  }

}
