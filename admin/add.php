<?php

include '../functions.php';

if(isset($_POST["submit"])){

  $tmpName = $_FILES['gambar']['tmp_name'] ;
  // var_dump($tmpName);  


  $namaFile= $_FILES['gambar']['name'] ;
  $ukuranFIle = $_FILES['gambar']['size'] ;
  $error = $_FILES['gambar']['error'] ;
  

  // cek apakah tidak ada gambar yang di upload

  if($error === 4){
     echo "<script>
        alert('pilih gambar dulu!');
     </script>
     ";
     return false;
  }else{

      // jika gambar ada
      $extensiValid = ['jpg','jpeg','png'];

      $extensiGambar = explode('.',$namaFile);
      $extensiGambar = strtolower(end($extensiGambar));

      if(!in_array($extensiGambar, $extensiValid)){

            echo "<script>
                alert('Yang Anda Upload bukan Gambar');
            </script>
            ";
            return false;
      }


  }



// Gambar
  $file_name = uniqid() .'_'.$_FILES['gambar']['name'];


	move_uploaded_file($tmpName, "upload/" . $file_name);


  $judul = $_POST['judul'];
  $content = $_POST['content'];
  $kategori = $_POST['kategori'];
  $tanggal = date('Y-m-d');

  $query = "insert into materi
              (judul,content,emage,tanggal_post,kategori_id,status,user_id,gambar)
              VALUES
              ('$judul','$content','gadagdagadga.jpg','$tanggal','$kategori','Publised','1','$file_name')";
  query($query);


  header('Location:home.php');
  exit;
}

$error = true;
