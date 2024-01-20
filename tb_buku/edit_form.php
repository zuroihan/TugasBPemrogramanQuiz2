<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Data</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

  <!-- My Style-->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>


  <?php
  include "../koneksi.php";
  $id_buku = $_GET['id_buku'];
  $edit = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE id_buku='$id_buku'");
  while ($row = mysqli_fetch_array($edit)) {
  ?>



    <section class="title" id="edit_data">
      <h2>Edit Data</h2>
    </section>

    <section class="form_edit" id="edit_buku">
      <form method="post" action="edit_proses.php">
        <table>
          <tr>
            <td>Nama Buku :</td>
            <td>
              <input type="hidden" name="id_buku" value="<?php echo $row['id_buku']; ?>" />
              <input type="text" name="nama_buku" value="<?php echo $row['nama_buku']; ?>" size="40px" />
            </td>
          </tr>

          <tr>
            <td>Ketegori :</td>
            <td>
              <input type="text" name="kategori" value="<?php echo $row['kategori']; ?>" size="40px" />
            </td>
          </tr>

          <tr>
            <td>Harga :</td>
            <td>
              <input type="text" name="harga" value="<?php echo $row['harga']; ?>" size="40px" />
            </td>
          </tr>

          <tr>
            <td>Stok :</td>
            <td>
              <input type="text" name="stok" value="<?php echo $row['stok']; ?>" size="40px" />
            </td>
          </tr>

          <tr>
            <td>Penerbit :</td>
            <td>
              <input type="text" name="penerbit" value="<?php echo $row['penerbit']; ?>" size="40px" />
            </td>
          </tr>

          <tr>
            <td><button type="submit" name="submit">SIMPAN</button></td>
          </tr>
        </table>
      </form>
    </section>
  <?php
  }
  ?>

</body>

</html>