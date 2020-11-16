<?php

if(isset($_POST['name']){
   
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];
    $kategori = $_POST['kategori'];
    $date = $_POST['date'];
    $mulai_event = $_POST['mulai'];
    $berakhir_event = $_POST['berakhir'];
    $tempat = $_POST['tempat'];
    $harga = $_POST['harga'];
    $benefit = $_POST['benefit'];

    )

    $query = "INSERT INTO event_database (`name`, `deskripsi`, `gambar`,`kategori`, `date`, `mulai`, `berakhir`, `tempat`, `harga`, `benefit`) 
    VALUES ('$name','$desc','$filePathLocal','$type','$date','$start','$end','$loc',$price,'$benefit')";

    $sql = mysqli_query($conn, $query);  








?>