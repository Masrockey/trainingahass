
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Ahass Training</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="<?=base_url()?>template/assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url()?>template/assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->

<!-- Template CSS -->
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/style.css">
<link rel="stylesheet" href="<?=base_url()?>template/assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-94034622-3');
</script>
</head>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <!-- Nav Start -->
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="<?=base_url()?>/template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-title">Logged in 5 min ago</div>
                    <a href="features-profile.html" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                    </a>
                    <a href="features-activities.html" class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Activities
                    </a>
                    <a href="features-settings.html" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
                </li>
            </ul>
        </nav>
        <!-- Nav end -->
        <!-- Sidebar Start -->
        <?= $this->include('layout/sidebar') ?>
        <!-- Sidebar end -->
        <!-- Main Content -->



        <div class="main-content">
            <?= $this->renderSection('main-content') ?>
        </div>




        <!-- Footer Start -->
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2023 <div class="bullet"></div> Design By <a href="https://geofani.com/">Geofani</a>
            </div>
            <div class="footer-right">
                
            </div>
        </footer>
        <!-- Footer End -->
    </div>
</div>

<!-- General JS Scripts -->
<script src="<?=base_url()?>template/assets/modules/jquery.min.js"></script>
<script src="<?=base_url()?>template/assets/modules/popper.js"></script>
<script src="<?=base_url()?>template/assets/modules/tooltip.js"></script>
<script src="<?=base_url()?>template/assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>template/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?=base_url()?>template/assets/modules/moment.min.js"></script>
<script src="<?=base_url()?>template/assets/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="<?=base_url()?>template/assets/js/scripts.js"></script>
<script src="<?=base_url()?>template/assets/js/custom.js"></script>
</body>
</html>