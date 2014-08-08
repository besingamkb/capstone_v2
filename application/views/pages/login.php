

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <img src="<?php echo base_url() ?>assets/images/customs2.jpg" class="img-responsive" style="width: 100%">
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div style="margin-top: 20px;"></div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">

                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <!-- <p class="alert alert-success" role="alert"></p> -->
                        <form role="form" name="boc-login" id="boc-login" class="boc-login" action="<?php echo base_url() ?>index.php/login/validate">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="Submit" class="btn btn-lg btn-success btn-block" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            </div> 
        </div>
        <!-- /#page-wrapper -->


    </div>