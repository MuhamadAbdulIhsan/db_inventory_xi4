<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title></title>
    
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">IHSANNN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang/index.php">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">jenis</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 <div class="container">
    <body>
    <h1>Data jenis</h1>
    <a href="nambah.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah jenis</a>
    <br>
    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>id jenis</th>
            <th>Nama jenis</th>
           
            
            <th>Aksi</th>
        </tr>
        <?php 
        include '../../config/koneksi.php';
        $query = mysqli_query($conn,"SELECT * FROM jenis");
        $no=1;
        if(mysqli_num_rows($query)){
            echo "";
            while ($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result['id_jenis'] ?></td>
                    <td><?php echo $result['nama_jenis'] ?></td>
                    
                    <td>
                        <a href="edit.php?id_jenis=<?php echo $result['id_jenis']?>" class="btn btn-warning" ><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                       
                    </td>
                </tr>
                <?php
                $no++;
            }
            } else{
            echo "Data Kosong";
         }
        ?>    
    </table>
    
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body></center>
</html>
