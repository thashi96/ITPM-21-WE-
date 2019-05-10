<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSRF Token -->

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">



    <title>Cerebrozone</title>



    <!-- Scripts -->

    <?php if(auth()->user()): ?>

    <script>

        window.user = {

            id: <?php echo e(auth()->id()); ?>,

            name:"<?php echo e(auth()->user()->name); ?>"

        };

        window.csrfToken="<?php echo e(csrf_token()); ?>";

    </script>

    <?php endif; ?>

    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>



    <!-- Fonts -->

    



    

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />

  

    

  





    <!-- Styles -->

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('font/css/font-awesome.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('css/bootstrap.min.css')); ?>" rel="stylesheet">

	<link href="<?php echo e(url('css/style.css')); ?>" rel="stylesheet">

</head>

<body>

    <div id="container">

        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">

            <div class="container">

                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">

                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">

                    <span class="navbar-toggler-icon"></span>

                </button>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav mr-auto">



                    </ul>



                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->

                       

                    </ul>

                </div>

            </div>

        </nav>



        <main class="py-4">

            <?php echo $__env->yieldContent('content'); ?>

        </main>

    </div>

    

    

    

    <?php echo $__env->yieldContent('js'); ?>
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5c73cf563341d22d9ce5f51f/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
</body>



</html>


<?php /* C:\xampp\htdocs\SriCourses\resources\views/layouts/fr.blade.php */ ?>