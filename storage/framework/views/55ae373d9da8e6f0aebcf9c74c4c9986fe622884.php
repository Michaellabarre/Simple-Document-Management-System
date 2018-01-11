<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
  
      <script type="text/javascript" src="<?php echo e(asset('/js/jquery3.min.js')); ?>"></script>

          <script type="text/javascript" src="<?php echo e(asset('/semantic/semantic.min.js')); ?>"></script>
       <link rel="stylesheet" type="text/css" href="<?php echo e(url('semantic/semantic.min.css')); ?>">


    </head>
    <body>
<div class="ui pointing menu">
  <a class="active item">
    Home
  </a>
  <a class="item">
    Messages
  </a>
  <a class="item">
    Friends
  </a>
  <div class="right menu">
    <div class="item">
      <div class="ui transparent icon input">
        <input placeholder="Search..." type="text">
        <i class="search link icon"></i>
      </div>
    </div>
  </div>
</div>
<div class="ui segment">
  <p></p>

</div>
</body>
</html>
