<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <title>Home</title>
       <!-- Fonts -->
       <link rel="preconnect" href="https://fonts.googleapis.com" />
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
       <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

       <!-- My Style-->
       <link rel="stylesheet" href="css/style.css" />
</head>

<body>
       <nav class="navbar">
              <h1 class="navbar-logo">TokoBuku -<span> M Zuroihan</span>.</h1>

              <div class="navbar-nav">
                     <p>
                            <a href="index.php">HOME</a>
                            <a href="admin.php">ADMIN</a>
                            <a href="pengadaan.php">PENGADAAN</a>
                     </p>
              </div>

              <div class="search-form">
                     <form method="GET" action="admin.php">
                            <input type="text" name="kata_cari" placeholder="Search..." value="<?php if (isset($_GET['kata_cari'])) {
                                                                                                         echo $_GET['kata_cari'];
                                                                                                  } ?>" />
                            <button type="submit">Search</button>
                            <button type="reset" name="reset">Reset</button>
                     </form>
              </div>
       </nav>


       <section class="title" id="tabel_buku">
              <h2>Data Buku</h2>
              <a href="tb_buku/create_form.php"><button type="button" name="tambah">Tambah +</button></a>
       </section>

       <section class="table" id="tabel_buku">
              <table>
                     <thead>
                            <tr>
                                   <th>Id Buku</th>
                                   <th>Katagori</th>
                                   <th>Nama Buku</th>
                                   <th>Harga</th>
                                   <th>Stok</th>
                                   <th>Penerbit</th>
                                   <th>Opsi</th>
                            </tr>
                     </thead>

                     <tbody>
                            <?php
                            include 'koneksi.php';
                            if (isset($_GET['kata_cari'])) {
                                   $kata_cari = $_GET['kata_cari'];
                                   $query = "SELECT * FROM tb_buku WHERE id_buku like '%" . $kata_cari . "%' OR nama_produk like '%" . $kata_cari . "%' ORDER BY id ASC";
                            } else {
                                   $query = "SELECT * FROM tb_buku ORDER BY id_buku ASC";
                            }
                            $result = mysqli_query($koneksi, $query);
                            if (!$result) {
                                   die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                            }
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                                   <tr>
                                          <td><?php echo $row['id_buku']; ?></td>
                                          <td><?php echo $row['kategori']; ?></td>
                                          <td><?php echo $row['nama_buku']; ?></td>
                                          <td><?php echo $row['harga']; ?></td>
                                          <td><?php echo $row['stok']; ?></td>
                                          <td><?php echo $row['penerbit']; ?></td>
                                          <td>
                                                 <a href="tb_buku/edit_form.php?id_buku=<?php echo $row['id_buku']; ?>">EDIT</a>
                                                 |
                                                 <a href="tb_buku/delete.php?id_buku=<?php echo $row['id_buku']; ?>">DELETE</a>
                                          </td>
                                   </tr>
                            <?php
                            }
                            ?>
                     </tbody>
              </table><br>
       </section>

       <section class="title" id="tabel_penerbit">
              <h2>Data Penerbit</h2>
              <a href="tb_penerbit/create_form.php"><button type="button" name="tambah">Tambah +</button></a>
       </section>
       <section class="table" id="tabel_penerbit">
              <table>
                     <thead>
                            <tr>
                                   <th>Id Penerbit</th>
                                   <th>Nama</th>
                                   <th>Alamat</th>
                                   <th>Kota</th>
                                   <th>Telepon</th>
                                   <th>Opsi</th>
                            </tr>
                     </thead>


                     <tbody>
                            <?php
                            include 'koneksi.php';
                            if (isset($_GET['kata_cari'])) {
                                   $kata_cari = $_GET['kata_cari'];
                                   $query = "SELECT * FROM tb_penerbit WHERE id_penerbit like '%" . $kata_cari . "%' OR nama like '%" . $kata_cari . "%' ORDER BY id_penerbit ASC";
                            } else {
                                   $query = "SELECT * FROM tb_penerbit ORDER BY id_penerbit ASC";
                            }
                            $result = mysqli_query($koneksi, $query);
                            if (!$result) {
                                   die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                            }
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                                   <tr>
                                          <td><?php echo $row['id_penerbit']; ?></td>
                                          <td><?php echo $row['nama']; ?></td>
                                          <td><?php echo $row['alamat']; ?></td>
                                          <td><?php echo $row['kota']; ?></td>
                                          <td><?php echo $row['telepon']; ?></td>
                                          <td>
                                                 <a href="tb_penerbit/edit_form.php?id_penerbit=<?php echo $row['id_penerbit']; ?>">EDIT</a>
                                                 |
                                                 <a href="tb_penerbit/delete.php?id_penerbit=<?php echo $row['id_penerbit']; ?>">DELETE</a>
                                          </td>
                                   </tr>
                            <?php
                            }
                            ?>
       </section>
</body>

</html>