
    <?php //dprint($result); ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $page_title; ?></h1>
                </div>
                <div class="col-lg-12">
                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                        <thead>
                            <tr role="row">
                                <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 173px;">Lastname:</th>
                                <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 222px;">Firstname: </th>
                                <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 203px;">Department: </th>
                                <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 149px;">Eamil: </th>
                                <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 107px;">Date Hired: </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- rkey, empno, surname, firstname, middlename, address, birthday, age, gender, religion, position, deptid, division, datehire, gsis, philhealth, tin, ioe, email -->
                            <?php foreach($result as $row): ?>
                            <tr class="gradeA odd">
                                <td class="sorting_1"><a href="<?php echo base_url(); ?>index.php/user/profile/<?php echo $row->rkey ?>"><?php echo $row->surname ?></a></td>
                                <td class=" "><?php echo $row->firstname ?></td>
                                <td class=" "><?php echo $row->deptname ?></td>
                                <td class="center "><?php echo $row->email ?></td>
                                <td class="center "><?php echo $row->datehire ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php if(strlen($pagination)): ?>
                        <p>Pages: <?php echo $pagination ?></p>
                    <?php endif; ?>
                    <a href="<?php echo base_url() ?>index.php/department/add" class="btn btn-success"><i class="fa fa-plus-square fa-fw"></i> Add New</a>
                <br>
                </div>

            </div>


    </div>