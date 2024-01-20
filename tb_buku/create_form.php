<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create Data</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

  <!-- My Style-->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <section class="title" id="tambah_buku">
    <h2>Tambah Buku</h2>
  </section>
  <section class="form_buku" id="form_buku">
    <form action="create_proses.php" method="post" style="text-align: center">
      <input type="text" name="id_buku" placeholder="Id Buku" size="40px" />
      <br /><br />
      <input type="text" name="kategori" placeholder="Kategori" size="40px" />
      <br /><br />
      <input type="text" name="nama_buku" placeholder="Nama Buku" size="40px" />
      <br /><br />
      <input type="text" name="harga" placeholder="Harga" size="40px" />
      <br /><br />
      <input type="text" name="stok" placeholder="Stok" size="40px" />
      <br /><br />
      <input type="text" name="penerbit" placeholder="Penerbit" size="40px" />
      <br /><br />

      <button type="submit" name="submit">SIMPAN</button>
      <button type="reset" name="reset">RESET</button>
    </form>
  </section>

</body>

</html>