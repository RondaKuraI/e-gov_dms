<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <?php if(isset($validation)): ?>
                    <?= $validation->listErrors(); ?>
                <?php endif; ?>
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Register</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('register'); ?>" method="POST">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text" name="first_name" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input type="text" name="last_name" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Email Address</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Confirm Passwrod</label>
                                    <input type="password" name="cpassword" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary mt-2">Register Now</button>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>