<!DOCTYPE html>
<html lang="en">

<head>
  <title>Registrasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap link -->
  <link rel="stylesheet" href="../../Assets/css/bootstrap.min.css">
  <script src=".../../../../Assets/js/bootstrap.min.js"></script>
  <!-- bootstrap link -->
</head>
<div class="container mt-3 mb-3">
  <h2 class="text-center">Silahkan isi form ini</h2>
  <form action="../../User/Registrasi/registrasi.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="text" class="form-label">Username:</label>
      <input type="username" class="form-control" id="email" placeholder="Enter username" name="username">
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="d-grid">
      <button type="submit" class="btn btn-primary btn-blok">Daftar Sekarang</button>
    </div>
  </form>
</div>

</body>

</html>