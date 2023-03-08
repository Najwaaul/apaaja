<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('backend/_partials/header'); ?>
</head>

<body>
	
<div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>

                <form method="POST" action="">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" required maxlength="100" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control " id="password" name="password" required maxlength="100" placeholder="Password">
                    </div>
                    <div class="form-group text-danger">
                        <?= $this->session->flashdata('error') ?>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;" value="Login"><small>Lanjutkan</small> <i class="fa-solid fa-right-to-bracket"></i></button>
                </form>
	</div>
	<?php $this->load->view('backend/_partials/footer'); ?>
</body>

</html>
