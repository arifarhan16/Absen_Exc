
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
<link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">

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
    <link href="<?php echo e(asset('css/xindex.css')); ?>" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand"><?php echo e(config('app.name')); ?></h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="/">Home</a>
        <a class="nav-link" href="/about">About</a>
        <a class="nav-link" href="/contact">Contact</a>
        <a class="nav-link" href="/absen">Absen</a>
        <a class="nav-link" href="/login">Login</a>
      </nav>
    </div>
  </header>
<?php echo $__env->yieldContent('content'); ?>

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

<script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
  x.play(); 
} 

</script>

</body>
</html>
<?php /**PATH C:\laragon\www\mylat\resources\views/layouts/header.blade.php ENDPATH**/ ?>