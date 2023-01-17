<?php
include 'database_conn.php';
$query = "SELECT * FROM barang limit 200";
$result = mysqli_query($db_connect, $query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi CRUD customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Toko Cak  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../frontend/eccomerceadmin.php">eccomerceadmin</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="main.php">New Arrivals</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header-->
        <header class="bg-dark py-5"> 
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Hend'Richs Shop</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Berkualitas dan Nyaman</p>
                </div>
            </div>
        </header>
        
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="float-start mb-4">
                        <h2>List Barang</h2>
                    </div>
                    <div class="float-end">
                        <a href="add.php" class="btn btn-success">Tambah barang</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID </th>
                                <th scope="col">Nama</th>
                                <th scope="col">jumlah</th>
                                <th scope="col">harga</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($result->num_rows > 0): ?>
                                <?php while ($data_item = mysqli_fetch_assoc($result)) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $data_item['id_item'] ?></th>
                                        <td><?php echo $data_item['nama_item'] ?></td>
                                        <td><?php echo $data_item['jumlah_item'] ?></td>
                                        <td><?php echo $data_item['harga_item'] ?></td>
                                        
                                        <td>
                                            <a href="edit.php?id_item=<?php echo $data_item['id_item']; ?>" class="btn
                                             btn-primary">edit</a>
                                             <a href="delete.php?id_item=<?php echo $data_item['id_item']; ?>" class="btn
                                              btn-danger">hapus</a>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="3" rowspan="1" headers="">Tidak ada data Di temukan Mel!</td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php mysqli_free_result($result); ?>
                                </tbody>            
                        </table>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

</html>