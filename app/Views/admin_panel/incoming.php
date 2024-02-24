<?= $this->extend('includes/header'); ?>

<?= $this->section('content'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <!-- <?php
                    // if(session()->getFlashdata('status')){
                    // 
                    ?>
                        //     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        //         <strong>Holy guacamole!</strong> <?= session()->getFlashdata('status'); ?>
                        //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        //     </div>
                        // <?php
                            // }
                            ?> -->

            <div class="card">
                <div class="card-header">
                    <h5>Incoming Documents
                        <!-- <a href="<?= base_url(); ?>" class="btn btn-info btn-sm float-end">Add</a> -->
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="mydatatable">
                        <thead>
                            <tr>
                                <th>Doc. Code</th>
                                <th>Sender</th>
                                <th>Details</th>
                                <th>Required Action</th>
                                <th>Date of Letter</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
