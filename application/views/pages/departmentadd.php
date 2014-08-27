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

        <div class="col-lg-12">
            <h1 class="page-header">Top Management</h1>
            <!-- /.panel -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add New Employee
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <?php if ($this->input->post()): ?>
                                <div  class="alert alert-danger" id="add_employee_validation" role="alert">
                                <?php echo validation_errors(); ?>
                                </div>
                            <?php endif; ?>
                            <form method="post" role="form" action="validate">
                            <div class="col-lg-6">
                                    <h2 class="">Personal Information</h2>

                                    <div class="form-group">
                                        <label>Employee No.</label>
                                        <input type="text" name="empno" class="form-control" value="<?php echo ($this->input->post()) ? $this->input->post("empno") : ""; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Lastname</label>
                                        <input type="text" name="surname" class="form-control" value="<?php echo ($this->input->post()) ? $this->input->post("surname") : ""; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Firstname</label>
                                        <input type="text" name="firstname" class="form-control"  value="<?php echo ($this->input->post()) ? $this->input->post("firstname") : ""; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="text" name="middlename" maxlength="1" value="<?php echo ($this->input->post()) ? $this->input->post("middlename") : ""; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" value="<?php echo ($this->input->post()) ? $this->input->post("address") : ""; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email"  value="<?php echo ($this->input->post()) ? $this->input->post("email") : ""; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Birthday</label>
                                        <input name="birthday" class="form-control"  value="<?php echo ($this->input->post()) ? $this->input->post("birthday") : ""; ?>" type="date">
                                    
                                    </div>

                                    <div class="form-group">
                                        <label>Sex</label>
                                        <br>
                                        <label class="checkbox-inline">
                                            <input type="radio" name="gender" value="male" <?php echo ($this->input->post('gender') == 'male') ? 'checked' : '' ?>> Male
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="radio" name="gender" value="female" <?php echo ($this->input->post('gender') == 'female') ? 'checked' : '' ?>> Female
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label>Religion</label>
                                        <input type="text" name="religion" value="<?php echo ($this->input->post()) ? $this->input->post("religion") : ""; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Contact</label>
                                        <input type="text" name="contact" value="<?php echo ($this->input->post()) ? $this->input->post("contact") : ""; ?>" class="form-control">
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                <h2 class=" ">Additional Information</h2>
                                    <div class="form-group">
                                        <label>GSIS</label>
                                        <input type="text" name="gsis" value="<?php echo ($this->input->post()) ? $this->input->post("gsis") : ""; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>PhilHealth</label>
                                        <input type="text" name="philhealth" value="<?php echo ($this->input->post()) ? $this->input->post("philhealth") : ""; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Tin Number</label>
                                        <input type="text" name="tin" value="<?php echo ($this->input->post()) ? $this->input->post("tin") : ""; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Incase of Emergency</label>
                                        <input type="text" name="ioe" value="<?php echo ($this->input->post()) ? $this->input->post("ioe") : ""; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Position</label>
                                        <input type="text" name="position" value="<?php echo ($this->input->post()) ? $this->input->post("position") : ""; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Division</label>
                                        <input type="text" name="division" value="<?php echo ($this->input->post()) ? $this->input->post("division") : ""; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Department</label>
                                        <select name="deptid" class="form-control">
                                            <option>- select -</option>
                                            <?php foreach($departments as $dept): ?>
                                                <option value="<?php echo $dept->deptid ?>" <?php echo ($dept->deptid == $this->input->post('deptid')) ? 'selected' : ''; ?>><?php echo $dept->deptname ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label>Date Hired</label>
                                        <input name="datehire" class="form-control" type="date"  value="<?php echo ($this->input->post()) ? $this->input->post("datehire") : ""; ?>">
                                    
                                    </div>

                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save">
                                    
                            </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->
<script type="text/javascript">

</script>