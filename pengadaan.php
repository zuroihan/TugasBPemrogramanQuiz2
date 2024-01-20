<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Pengadaan</title>
       <!-- Fonts -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,800;1,400;1,800&display=swap" rel="stylesheet">

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
                     <form method="GET" action="pengadaan.php">
                            <input type="text" name="kata_cari" placeholder="Search..." value="<?php if (isset($_GET['kata_cari'])) {
                                                                                                         echo $_GET['kata_cari'];
                                                                                                  } ?>" />
                            <button type="submit">Search</button>
                            <button type="reset" name="reset">Reset</button>
                     </form>
              </div>
       </nav>

       <section class="title" id="tabel_buku">
              <h2>Tabel Penerbit</h2>
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
                            </tr>
                     </thead>

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
                                   </tr>
                            <?php
                            }
                            ?>
                     </tbody>
              </table>
       </section>
</body>

</html>