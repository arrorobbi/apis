<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "pijar_camp";

$connect = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($connect));

if (isset($_POST['bsimpan'])){
    $simpan = mysqli_query($connect, "INSERT INTO mahasiswa (name)
                                        VALUES ('$_POST[tname]')
                                        ");

    if ($simpan){
        echo "<script>
        alert('Submited');
        document.location='index.php';
        </script>";
    }else{
        echo "<script>
        alert('Failed');
        document.location='index.php';
        </script>";
    };
                                        
};

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PIJAR CAMP</title>
  </head>
  <body>
    <div class="container">
    <h3 class="text-center">Penerimaan Mahasiswa</h3>
    <h3 class="text-center">Universitas Indonesia</h3>

    <div class="row">
    <div class="col-md-68 mx-auto">
    <div class="card">
  <div class="card-header bg-info text-light">
    Form Data Mahasiswa
  </div>
  <div class="card-body">
  <form method="POST">
    <div class="mb-3">
  <label class="form-label">Masukkan Nama</label>
  <input type="text" class="form-control" name="tname" placeholder="Your Name">
</div>
    <div class="text-center">
        <hr>
        <button class="btn btn-primary" name="bsimpan" type="submit">Submit</button>
        <button class="btn btn-primary" name="bhapus" type="reset">Kosongkan</button>
    </div>
    </form>
    
  </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-68 mx-auto">
    <div class="card mt-3">
  <div class="card-header bg-info text-light">
    Form Data Mahasiswa
  </div>

  <div class="card-body">
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama Mahasiswa</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
            $view = mysqli_query($connect, "SELECT * FROM mahasiswa order by id asc");
            while($data = mysqli_fetch_array($view)) :


        ?>

        <tr>
            <td><?=$no++ ?></td>
            <td><?=$data['name'] ?></td>
            <td>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>

        <?php endwhile; ?>
    </table>
  </div>
    </div>
    </div>
    
</div>
    </div>
    

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>