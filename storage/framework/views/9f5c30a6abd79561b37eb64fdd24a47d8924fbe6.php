<!DOCTYPE html>
<html class="wf-courierprime-n7-active wf-courierprime-i4-active wf-courierprime-n4-active wf-courierprime-i7-active wf-active">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="theme-color" content="#ffffff">
        <script type="text/javascript" src="<?php echo e(asset('/js/jquery3.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('/js/vue.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('/semantic/semantic.min.js')); ?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('semantic/semantic.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/login.css')); ?>">

    </head>
    <body>
        <div id="page" >
            <div class="header-spacer"></div>
            <div class="outer mt2 align-c">
                <?php if(Session::has('message')): ?>
                <div class="ui negative  message">
                    <i class="close icon"></i>
                        <?php echo e(Session::get('message')); ?> </p>
                </div>
                <?php endif; ?>
                <div id="login_form" class="container--s" style="display: block;">

                    <h1 class="h3 mb05">Log into System</h1>
                    <form method="post" action="<?php echo e(route('signin')); ?>"  class="account-entry-form mha">
                        <p>
                            <span class="prefixed-input flex items-center ">
                                <label for="name" class="inline-block mb0 pl1 pr05">Username:</label>
                                <input class="flex-grow" name="username" autocorrect="off" autocapitalize="off" type="text">
                            </span>
                        </p>
                        <p>
                            <span class="prefixed-input flex items-center ">
                                <label for="name" class="inline-block mb0 pl1 pr05">Password:</label>
                                <input class="flex-grow" name="password" value="" type="password">
                            </span>
                        </p>
                        <?php echo e(csrf_field()); ?>

                        <div class="mt2">
                            <button type="submit" class="button">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        $('.message .close').on('click', function() {
            $(this).closest('.message').transition('fade');
        });
    </script>
</html>