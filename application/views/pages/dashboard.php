

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12"><h1 class="page-header">Dashboard</h1></div>
                
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Content Management
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>5</td>
                                            <td>18 customs employees probed for smuggling</td>
                                            <td>itusit</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>BOC reforms starting to work-Sevilla</td>
                                            <td>itusit</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sample Article #4</td>
                                            <td>rcortes</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Everything you know!</td>
                                            <td>itutsit</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Welcome to BOC Website! </td>
                                            <td>admin</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="">view more</a>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div><div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Logs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Log Message</th>
                                            <th>Author</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($logs as $log) : ?>
                                        <tr>
                                            <td><?php echo $log->lid ?></td>
                                            <td><a href=""><?php echo $log->logs_message ?></a></td>
                                            <td><?php echo $log->username ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <a href="">view more</a>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-12">
                    <h3 class="page-header" style="margin-top: -5px;">ALL EMPLOYEE</h3>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-success"><i class="fa fa-plus-square fa-fw"></i> Add New</button>
                            <button type="button" class="btn btn-info"><i class="fa fa-file-excel-o fa-fw"></i> Export</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="dataTables_length" id="dataTables-example_length">
                                                <label>
                                                    <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                                        <option>Top Management</option>
                                                        <option>Assesment & Operation Coordinating Group</option>
                                                        <option>Intelligent Group</option>
                                                        <option>Management Information System Technical Group</option>
                                                        <option>Interim Internal Control</option>
                                                        <option>Internal Administration Group</option>
                                                        <option>Revenue Collection Monitoring Group</option>
                                                        <option>Enforcement Group</option>
                                                        <option>Post Entry & Audit Group</option>
                                                    </select> view by department
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                           <!--  <div id="dataTables-example_filter" class="dataTables_filter">
                                                <label>Search:<input type="search" class="form-control input-sm" aria-controls="dataTables-example"></label>
                                            </div> -->
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 173px;">Firstname:</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 222px;">Lastname: </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 203px;">Department: </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 149px;">Eamil: </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 107px;">Date Hired: </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="gradeA odd">
                                                <td class="sorting_1">Bill</td>
                                                <td class=" ">Gates</td>
                                                <td class=" ">Top Management</td>
                                                <td class="center ">bill@gates.ms</td>
                                                <td class="center ">A</td>
                                            </tr>
                                            <tr class="gradeA odd">
                                                <td class="sorting_1">Lary</td>
                                                <td class=" ">Page</td>
                                                <td class=" ">Assesment & Operation Coordinating Group</td>
                                                <td class="center ">lary@page.go</td>
                                                <td class="center ">A</td>
                                            </tr>
                                            <tr class="gradeA odd">
                                                <td class="sorting_1">Steve</td>
                                                <td class=" ">Jobs</td>
                                                <td class=" ">Intelligent Group</td>
                                                <td class="center ">steve@jobs.ap</td>
                                                <td class="center ">A</td>
                                            </tr>
                                            <tr class="gradeA odd">
                                                <td class="sorting_1">Mark</td>
                                                <td class=" ">Zuckerberg</td>
                                                <td class=" ">Management Information System Technical Group</td>
                                                <td class="center ">Marc@zuck.ms</td>
                                                <td class="center ">A</td>
                                            </tr>
                                            <tr class="gradeA odd">
                                                <td class="sorting_1">Richard</td>
                                                <td class=" ">Stallman</td>
                                                <td class=" ">Interim Internal Control</td>
                                                <td class="center ">r@stallman.free</td>
                                                <td class="center ">A</td>
                                            </tr>
                                            <tr class="gradeA odd">
                                                <td class="sorting_1">Steve</td>
                                                <td class=" ">Ballmers</td>
                                                <td class=" ">Revenue Collection Monitoring Group</td>
                                                <td class="center ">steve@ballmer.ms</td>
                                                <td class="center ">A</td>
                                            </tr>
                                            <tr class="gradeA odd">
                                                <td class="sorting_1">Bill</td>
                                                <td class=" ">Gates</td>
                                                <td class=" ">Microsoft</td>
                                                <td class="center ">bill@gates.ms</td>
                                                <td class="center ">A</td>
                                            </tr>
                                            <tr class="gradeA odd">
                                                <td class="sorting_1">Linux</td>
                                                <td class=" ">Tolvards</td>
                                                <td class=" ">Enforcement Group</td>
                                                <td class="center ">linux@foundation.ms</td>
                                                <td class="center ">A</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Showing 1 to 10 of 57 entries</div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li>
                                                    <li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li>
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li>
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li>
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li>
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li>
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li>
                                                    <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

            </div>


    </div>