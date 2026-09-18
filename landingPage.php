<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Pages</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <script src=".../../../Assets/js/bootstrap.min.js"></script>
    <!-- bootstrap link -->
    <!-- other css -->
    <link rel="stylesheet" href="styleAfterLogin.css">
    <!-- other css -->
</head>

<body>

    <div class="row" style="margin-top: 20vh;">

        <div class="col-3"></div>
        <div class="col-6">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center">Login Admin</h3>
                    <hr>
                    <form action="login.php" method="POST">
                        <div class="mb-3 mt-3">
                            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>

</body>

</html>