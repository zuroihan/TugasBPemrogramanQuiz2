<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,800;1,400;1,800&display=swap" rel="stylesheet">

  <!-- My Style-->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <?php
  include "../koneksi.php";
  $id_penerbit = $_GET['id_penerbit'];
  $edit = mysqli_query($koneksi, "SELECT * FROM tb_penerbit WHERE id_penerbit='$id_penerbit'");
  while ($row = mysqli_fetch_array($edit)) {
  ?>

    <section class="title" id="edit_penerbit">
      <h2>Edit Data</h2>
    </section>
    <section class="form_edit" id="edit_penerbit">
      <form method="post" action="edit_proses.php">
        <table>
          <tr>
            <td>Nama Buku</td>
            <td>
              <input type="hidden" name="id_penerbit" value="<?php echo $row['id_penerbit']; ?>" />
              <input type="text" name="nama" value="<?php echo $row['nama']; ?>" size="40px" />
            </td>
          </tr>

          <tr>
            <td>Ketegori</td>
            <td>
              <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" size="40px" />
            </td>
          </tr>

          <tr>
            <td>Harga</td>
            <td>
              <input type="text" name="kota" value="<?php echo $row['kota']; ?>" size="40px" />
            </td>
          </tr>

          <tr>
            <td>Stok</td>
            <td>
              <input type="text" name="telepon" value="<?php echo $row['telepon']; ?>" size="40px" />
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