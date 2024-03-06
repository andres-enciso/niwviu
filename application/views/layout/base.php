<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/animate.css/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/vendors/jquery-scrollbar/jquery.scrollbar.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/app.min.css'); ?>">
</head>

<body data-ma-theme="green">
    <main class="main">
        <div class="page-loader">
            <div class="page-loader__spinner">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>

        <header class="header">
            <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
                <div class="navigation-trigger__inner">
                    <i class="navigation-trigger__line"></i>
                    <i class="navigation-trigger__line"></i>
                    <i class="navigation-trigger__line"></i>
                </div>
            </div>

            <div class="header__logo hidden-sm-down">
                <h1><a href="index.html">Material Admin 2.0</a></h1>
            </div>
        </header>

        <aside class="sidebar">
            <div class="scrollbar-inner">

                <ul class="navigation">
                    <li class="navigation__active"><a href=""><i class="zmdi zmdi-home"></i>Inicio</a></li>
                    <li class=""><a href="<?php echo base_url('books'); ?>"><i class="zmdi zmdi-home"></i>Books</a></li>
                    <li class=""><a href="<?php echo base_url('category'); ?>"><i class="zmdi zmdi-home"></i>Category</a></li>
                    <li class=""><a href="<?php echo base_url('user'); ?>"><i class="zmdi zmdi-home"></i>Users</a></li>
                </ul>
            </div>
        </aside>

        <section class="content">
            <header class="content__title">
                <h1><?php echo $title; ?></h1>
            </header>
            <!-- Carga las vistas -->
            <?php $this->load->view($content_view); ?>
        </section>
        <footer class="footer hidden-xs-down">
            <p>Andres Enciso | Niwviu</p>
        </footer>
    </main>

    <script src="<?php echo base_url('public/vendors/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/vendors/jquery-scrollbar/jquery.scrollbar.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/vendors/jquery-scrollLock/jquery-scrollLock.min.js'); ?>"></script>

    <script src="<?php echo base_url('public/js/app.min.js'); ?>">
    </script>
</body>

</html>