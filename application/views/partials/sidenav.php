<!-- Page Navbar -->
<nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="<?= site_url('') ?>">nazboxz.id</a>
            <div class="col-3">
            <form method="post" action="<?= site_url('page/cari') ?>">
                <div class="input-group">
                    <input type="text" class="form-control" id="cari" name="cari" placeholder="Cari Sepatu Disini" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                        <input type="submit" class="btn btn-primary" id="search" value="Cari">
                    </div>
                </div>
            </form>
        </div>
            <ul class="nav">
                <li class="item">
                    <a class="link" href="<?= site_url('') ?>">Home</a>
                </li>
                <?php if ($activeUser) : ?>
                <li class="item">
                    <a class="link" href="<?= site_url('page/penawaran') ?>">Penawaran</a>
                </li>
                <li class="item">
                    <a class="link" href="<?= site_url('page/lelang') ?>">Lelang</a>
                </li>
                <li class="item">
                    <a class="link" href="<?= site_url('page/edit') ?>">Hi,<?= $activeUser->nama; ?></a>
                </li>
                <li class="item">
                    <a class="link" href="<?= site_url('page/change') ?>">Change Password</a>
                </li>
                <li class="item">
                    <a class="link" href="<?= site_url('page/logout') ?>">Logout</a>
                </li>
                <?php endif ?>
                <?php if (!$activeUser) : ?>
                <li class="item">
                    <a class="link" href="<?= site_url('page/register') ?>">Registrasi</a>
                </li>
                <li class="item">
                <a href="<?= site_url('page/login') ?>" class="btn btn-primary">Login</a>
                </li>
                <?php endif ?>
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>
    </nav><!-- End of Page Navbar -->

    
