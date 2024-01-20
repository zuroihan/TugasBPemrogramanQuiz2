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

  <section class="title" id="tambah_penerbit">
    <h2>Tambah Penerbit</h2>
  </section>

  <section class="form_penerbit" id="form_penerbit">
    <form action="create_proses.php" method="post" style="text-align: center">
      <input type="text" name="id_penerbit" placeholder="Id Penerbit" size="40px" />
      <br /><br />
      <input type="text" name="nama" placeholder="Nama" size="40px" />
      <br /><br />
      <input type="text" name="alamat" placeholder="Alamat" size="40px" />
      <br /><br />
      <input type="text" name="kota" placeholder="Kota" size="40px" />
      <br /><br />
      <input type="text" name="telepon" placeholder="Telepon" size="40px" />
      <br /><br />

      <button type="submit" name="submit">SIMPAN</button>
      <button type="reset" name="reset">RESET</button>
    </form>
  </section>

</body>

</html>