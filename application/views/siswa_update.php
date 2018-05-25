<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination Filter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/bootstrap.css" ?>">
    
    <style type="text/css">
    .bg-border {
        border: 1px solid #ddd;
        border-radius: 4px 4px;
        padding: 15px 15px;
    }
    </style>
</head>
<body>
<div class="container">
<br>
<h1>Tambah Data Mahasiswa</h1>
<br>
<?php echo validation_errors(); ?>
<form class="form-horizontal" method="post" action="<?php echo base_url('index.php/pagination/update/' .$siswa['id']) ?>"> 
<div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $siswa['nama'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="nim" class="col-sm-2 control-label">NIM</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM" value="<?php echo $siswa['nim'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="kd_jurusan" class="col-sm-2 control-label">Jurusan</label>
    <div class="col-sm-10">
       <select name="kd_jurusan" id="kd_jurusan" class="form-control">
       <?php foreach($jurusan as $key => $value): ?>
            <option value="<?php echo $value['kd'] ?>"><?php echo $value['nama_jurusan'] ?></option>
        <?php endforeach ?>
        </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Update</button>
      <a href="<?php echo base_url() ?>" class='btn btn-default">Kembali</a>
    </div>
  </div>
</form>
</div>
</body>
</html>