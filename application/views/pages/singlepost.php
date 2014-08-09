

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
                <?php foreach($posts as $post): ?>
                <div class="col-lg-8">
                    <div class="archives-customs">
                        <h1><?php echo $post->title ?></h1>
                        <hr>
                        <?php echo $post->posts ?>
                    </div>
                    
                </div>
                <?php endforeach; ?>

                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <p class="lead"><strong>Office Hours</strong></p>
                            <p>Monday - Friday <span>8:00 am - 5:00 pm</span></p>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-facebook fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">20,586</div>
                                    <div>Like!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Like us on Facebook</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-twitter fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">15,005</div>
                                    <div>Followers!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Follow us on Twitter</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->


    </div>