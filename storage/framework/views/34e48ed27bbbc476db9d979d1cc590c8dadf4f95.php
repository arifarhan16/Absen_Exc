
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title><?php echo e(config('app.name')); ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/f806182ffe.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/cover/cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand"><?php echo e(config('app.name')); ?></h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="/">Home</a>
        <a class="nav-link" href="/pengurus">Pengurus</a>
        <a class="nav-link" href="/contact">Contact</a>
        <a class="nav-link" href="/absen">Absen</a>
        <a class="nav-link" href="/login">Login</a>
      </nav>
    </div>
  </header>
  <main role="main" class="inner cover">
    <h1 class="cover-heading">Absen</h1>
<table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Nama</font></th>
            <th><font color="white">Kelas</font></th>
            <th><font color="white">Tanggal</font></th>
            <th><font color="white">Kehadiran</font></th>
        </tr>
    </thead>
    <tbody>
    	<?php $no = 1;?>
        	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        	
            <td><font color="white"><?php echo e($no++); ?></font></td>
            <td><font color="white"><?php echo e($absen->nama); ?></font></td>
            <td><font color="white"><?php echo e($absen->kelas); ?></font></td>
            <td><font color="white"><?php echo e($absen->tanggal); ?> <?php echo e($absen->bulan); ?> <?php echo e($absen->tahun); ?></font></td>
            <td><font color="white"><?php echo e($absen->kehadiran); ?></font></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
  </main>
  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Coded By Arikun With <font color="red">❤</font> And <i class="fas fa-coffee"></i></p>
    </div>
  </footer>
</div>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
</body>
</html><?php /**PATH C:\laragon\www\mylat\resources\views//share/absen.blade.php ENDPATH**/ ?>