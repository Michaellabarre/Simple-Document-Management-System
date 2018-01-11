<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Standard Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- Site Properties -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>BAC <?php echo $__env->yieldContent('title'); ?></title>
  <script type="text/javascript" src="<?php echo e(asset('/js/jquery3.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('/js/currency-validator.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('/js/vue.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('/semantic/semantic.min.js')); ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('semantic/semantic.min.css')); ?>">
	<style type="text/css">
      .ui.footer.segment {
        margin: 5em 0em 0em;
        padding: 5em 0em;
      }
      body{
        background-color:#F6F6F6;
      }
      .ui.menu .item>img:not(.ui) {
        width: 5em;
      }
      table.ui.teal.compact.table.customtable {
        margin-left: -20%;
      }
      input{
        border:1px solid red;
      }

  </style>
  <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
  <?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div style="height: 50px;"></div>
  <div class="ui container">
      <div class="sixteen wide column">
        <div class="ui basic segment">
          <?php echo $__env->yieldContent('header'); ?>
          <?php if(count($errors) > 0): ?>
              <div class="ui error message">
                <i class="close icon"></i>
                <div class="header">
                  There was some errors with your submission
                </div>
                <ul class="list">
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </div>
          <?php endif; ?>
          <?php if(Session::has('message')): ?>
          <div class="ui info message">
            <i class="close icon"></i>
            <div class="header">
              Horay
            </div>
            <ul class="list">
              <li><?php echo e(Session::get('message')); ?></li>
            </ul>
          </div>
          <?php endif; ?>

          <?php if(Session::has('error')): ?>
          <div class="ui error message">
            <i class="close icon"></i>
            <div class="header">
              There was some errors with your submission
            </div>
            <ul class="list">
              <li><?php echo e(Session::get('error')); ?></li>
            </ul>
          </div>
          <?php endif; ?>
          <section class="content">
          <?php echo $__env->yieldContent('content'); ?>
          </section>
        </div>
      </div>
    </div>
  </div>
  <?php echo $__env->yieldContent('modals'); ?>
  <?php echo $__env->yieldContent('scripts'); ?>
  <script type="text/javascript">$('.ui.dropdown').dropdown();</script>
</body>
</html>
