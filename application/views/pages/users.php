

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $page_title; ?></h1>
                </div>
                <div class="col-lg-12">
                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                        <tr>
                            <th>    </th>
                            <th>Employee No.</th>
                            <th>Username</th>
                            <th>User Level</th>
                            <th>Date Created</th>
                        </tr>
                        <?php foreach($result as $res): ?>
                            <tr>
                                <td width="50"><a href="<?php echo base_url(); ?>index.php/user/profile/<?php echo $res->empno ?>"><i class="fa fa-edit"></i></a> <a href="" id="delete"><i class="fa fa-times"></a></i></td>
                                <td><?php echo $res->empno ?></td>
                                <td><?php echo $res->username ?></td>
                                <td><?php echo $res->ulevel ?></td>
                                <td><?php echo $res->datecreated ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                     <?php if(strlen($pagination)): ?>
                        <p>Pages: <?php echo $pagination ?></p>
                    <?php endif; ?> 
                </div>

            </div>


    </div>

    <script type="text/javascript">
    var del = document.getElementById("delete");
    del.addEventListener("click", function() {
        alert("Delete!!");
    });
    </script>