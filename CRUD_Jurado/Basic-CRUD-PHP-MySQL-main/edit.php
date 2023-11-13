<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $IDcamion = $_POST['IDcamion'];
    $Marca = $_POST['Marca'];
    $Modelo = $_POST['Modelo'];
    $Capacidad = $_POST['capacidad'];
    $Tipocombustible = $_POST['Tipocombustible'];
    $Fecha_fabricacion = $_POST['Fecha_fabricacion'];
    $Numasientos = $_POST['Numasientos'];
    $Disponibilidad = $_POST['Disponibilidad'];


    // query
    $sql = "INSERT INTO camion(IDcamion, Marca, Modelo, Capacidad, Tipocombustible, Fecha_fabricacion, Numasientos, Disponibilidad)
    VALUES('$IDcamion', '$Marca', '$Modelo', '$Capacidad', '$Tipocombustible', '$Fecha_fabricacion', '$Numasientos', '$Disponibilidad')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
