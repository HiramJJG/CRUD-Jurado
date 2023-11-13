<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title>Datos Central Camionera</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">Go Data</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-md-4 text-white" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <!-- form tambah Camion -->
        <div class="card mb-5">
            <!-- <div class="card-header">
                Latihan CRUD PHP & MySQL
            </div> -->
            <!-- tambah data -->
            <div class="card-body">
                <h1 class="card-title">Central Camionera</h1>
                <h3 class="card-title">Tabla Camion</h3>
                <p class="card-text">Hiram Jaziel Jurado Garcia 5I</p>
                <!-- tampilkan pesan sukses ditambah -->
                <?php if (isset($_GET['status'])) : ?>
                    <?php
                    if ($_GET['status'] == 'sukses')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Sukses!</strong> Data berhasil ditambahkan!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Data gagal ditambahkan!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="tambah.php" method="POST">

                    <div class="col-12">
                        <label for="IDcamion" class="form-label">IDcamion</label>
                        <input type="text" name="IDcamion" class="form-control" placeholder="57283592" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Marca" class="form-label">Marca</label>
                        <input type="text" name="Marca" class="form-control" placeholder="Mercedez Benz" required>
                    </div>

                    <div class="col-md-4">
                        <label for="Modelo" class="form-label">Modelo</label>
                        <input type="text" name="Modelo" class="form-control" placeholder="2019" required>
                    </div>

                    <div class="col-md-4">
                        <label for="Capacidad" class="form-label">Capacidad</label>
                        <select class="form-select" name="Capacidad" aria-label="Default select example">
                            <option value="35">35</option>
                            <option value="36">36</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="tittle" class="form-label">Tipo Combustible</label>
                        <div class="col-md-12">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="Tipo Combustible">Gas Natural</label>
                                <input class="form-check-input" type="radio" name="Tipo Combustible" value="Gas Natural">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="Tipo Combustible">Diesel</label>
                                <input class="form-check-input" type="radio" name="Tipo Combustible" value="Diesel">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="Tipo Combustible">Gasolina</label>
                                <input class="form-check-input" type="radio" name="Tipo Combustible" value="Gasolina">
                        </div>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <label for="Fecha Fabricacion" class="form-label">Fecha Fabricacion</label>
                        <select class="form-select" name="Fecha Fabricacion" aria-label="Default select example">
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>
                    <br>
                     
                    <div class="col-md-6">
                        <label for="Num Asientos" class="form-label">Num Asientos</label>
                        <select class="form-select" name="Num Asientos" aria-label="Default select example">
                            <option value="35">35</option>
                            <option value="36">36</option>
                        </select>
                    </div>
                    <br>

                    <div class="col-md-6">
                        <label for="tittle" class="form-label">Disponibilidad</label>
                        <div class="col-md-12">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="Disponibilidad">Mucha</label>
                                <input class="form-check-input" type="radio" name="Disponibilidad" value="Gas Natural">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="Disponibilidad">Poca</label>
                                <input class="form-check-input" type="radio" name="Disponibilidad" value="Diesel">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="Disponibilidad">Nada</label>
                                <input class="form-check-input" type="radio" name="Disponibilidad" value="Gasolina">
                        </div>
                    </div>
                    <br>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="Datos" name="Agregar"><i class="fa fa-plus"></i><span class="ms-2">Agregar Datos</span></button>
                    </div>
                </form>
            </div>
        </div>
        <br>

        <!-- judul tabel -->
        <h5 class="mb-3">Boleto</h5>

        <div class="row my-3">
            <div class="col-md-2 mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Hora entrada</option>
                    <option value="10:00a.m.">10:00a.m.</option>
                    <option value="14:30p.m.">14:30p.m.</option>
                    <option value="11:59p.m.">11:59p.m.</option>
                    <option value="7:00a.m.">7:00a.m.</option>
                </select>
            </div>
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Cari Sesuatu..." aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <!-- tampilkan pesan sukses dihapus -->
        <?php if (isset($_GET['hapus'])) : ?>
            <?php
            if ($_GET['hapus'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Sukses!</strong> Data berhasil dihapus!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Data gagal dihapus!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tampilkan pesan sukses di edit -->
        <?php if (isset($_GET['update'])) : ?>
            <?php
            if ($_GET['update'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Sukses!</strong> Data berhasil diupdate!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Data gagal diupdate!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>No</th>";
            echo "<th scope='col'>IDcamion</th>";
            echo "<th scope='col'>Marca</th>";
            echo "<th scope='col'>Modelo</th>";
            echo "<th scope='col'>Capacidad</th>";
            echo "<th scope='col'>Tipo Combustible</th>";
            echo "<th scope='col'>Fecha Fabricacion</th>";
            echo "<th scope='col'>Num Asientos</th>";
            echo "<th scope='col'>Disponibilidad</th>";

            $batas = 10;
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($db, "SELECT * FROM camion");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            $data_mhs = mysqli_query($db, "SELECT * FROM camion LIMIT $halaman_awal, $batas");
            $no = $halaman_awal + 1;
            // $sql = "SELECT * FROM camion";
            // $query = mysqli_query($db, $sql);
            




            while ($camion = mysqli_fetch_array($data_mhs)) {
                echo "<tr>";
                echo "<td style='display:none'>" . $camion['id'] . "</td>";
                echo "<td class='text-center'>" . $no++ . "</td>";
                echo "<td>" . $camion['IDCamion'] . "</td>";
                echo "<td>" . $camion['Marca'] . "</td>";
                echo "<td>" . $camion['Modelo'] . "</td>";
                echo "<td>" . $camion['Capacidad'] . "</td>";
                echo "<td>" . $camion['Tipo Combustible'] . "</td>";
                echo "<td>" . $camion['Fecha Fabricacion'] . "</td>";
                echo "<td>" . $camion['Num Asientos'] . "</td>";
                echo "<td>" . $camion['Disponibilidad'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary editButton pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // tombol hapus
                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($jumlah_data == 0) {
                echo "<p class='text-center'>Tidak ada data yang tersedia pada tabel ini</p>";
            } else {
                echo "<p>Total $jumlah_data entri</p>";
            }

            echo "</div>";
            ?>
        </div>

       
        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman > 1) ? "href='?halaman=$previous'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman < $total_halaman) ? "href='?halaman=$next'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal Edit-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Edit Data camion</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM camion";
                    $query = mysqli_query($db, $sql);
                    $camion = mysqli_fetch_array($data_mhs);
                    ?>

                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='edit_id' id='edit_id'>

                            <div class="col-12">
                        <label for="IDcamion" class="form-label">IDcamion</label>
                        <input type="text" name="IDcamion" class="form-control" placeholder="57283592" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Marca" class="form-label">Marca</label>
                        <input type="text" name="Marca" class="form-control" placeholder="Mercedez Benz" required>
                    </div>

                    <div class="col-md-4">
                        <label for="Modelo" class="form-label">Modelo</label>
                        <input type="text" name="Modelo" class="form-control" placeholder="2019" required>
                    </div>

                    <div class="col-md-4">
                        <label for="Capacidad" class="form-label">Capacidad</label>
                        <select class="form-select" name="Capacidad" aria-label="Default select example">
                            <option value="35">35</option>
                            <option value="36">36</option>
                        </select>
                    </div>
                            <div class="col-12 mb-3">
                                <label for="edit_jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <div class="col-md-12" id="gender">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="jenis_kelamin">
                                            <input class="form-check-input" type="radio" name="edit_jenis_kelamin" value="Laki-Laki" id="cowok">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="jenis_kelamin">
                                            <input class="form-check-input" type="radio" name="edit_jenis_kelamin" value="Perempuan" id="cewek">Perempuan</label>
                                    </div>
                                </div>
                            </div>



                            <div class="col-12 mb-3">
                                <label for="edit_urusan" class="form-label">Jurusan</label>
                                <input type="text" name="edit_jurusan" class="form-control" id="edit_jurusan" placeholder="Ilmu Komputer" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_ipk" class="form-label">IPK</label>
                                <input type="number" step=0.01 name="edit_ipk" id="edit_ipk" class=" form-control" placeholder="3.52" required>
                            </div>

                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='edit_data' class='btn btn-primary'>Simpan</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal Delete-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Konfirmasi</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='hapus.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='delete_id' id='delete_id'>
                            <p>Yakin ingin menghapus data ini?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='deletedata' class='btn btn-primary'>Hapus</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#edit_id').val(data[0]);
                // gak dipake, karena cuma increment number
                // $('#no').val(data[1]);
                $('#edit_IDcamion').val(data[2]);
                $('#edit_Marca').val(data[3]);
                $('#edit_Marca').val(data[5]);
                $('#edit_Capacidad').val(data[6]);
                $('#edit_Tipocombustible').val(data[7]);
                $('#edit_Fecha_fabricacion').val(data[8]);
                $('#edit_Numasientos').val(data[9]);
                $('#edit_Disponibilidad').val(data[10]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delete_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>