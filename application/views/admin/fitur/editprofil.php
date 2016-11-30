<?php

echo validation_errors();
?>
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Profil
                        </h1>
                        <form class="form-horizontal" method="POST">
                            <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <textarea name="isiedit" rows="5" class="form-control" placeholder="Konten Profil" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                         <div class="row">
                            <div class="form-group col-xs-12">
                                <a href="<?php echo site_url('admin/profil');?>"><button type="submit" class="btn btn-success btn-lg">Edit</button>
                            </div>
                        </div>
                        </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->