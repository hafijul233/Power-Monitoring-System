    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">History Record Table</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Power Cumsumpution Record List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Voltage</th>
                                        <th>Device 1</th>
                                        <th>Device 2</th>
                                        <th>Device 3</th>
                                        <th>Device 4</th>
                                        <th>Record Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php
                                	for($i=0;$i<=50;$i++){
                                	?>
                                    <tr>
                                        <td>220 Volt</td>
                                        <td><?php echo mt_rand(1,20) . " kWh"; ?></td>
                                        <td><?php echo mt_rand(1,20) . " kWh"; ?></td>
                                        <td><?php echo mt_rand(1,20) . " kWh"; ?></td>
                                        <td><?php echo mt_rand(1,20) . " kWh"; ?></td>
                                        <td><?php echo date("y-m-d h:i:sa"); ?></td>
                                        <td><a href="#"><button class="btn btn-info">Detail</button></a></td>
                                    </tr>
                                    <?php
                                	}
                                	?>
                                </tbody>
                                <tfoot>
                                	<tr>
                                        <th>Voltage</th>
                                        <th>Device 1</th>
                                        <th>Device 2</th>
                                        <th>Device 3</th>
                                        <th>Device 4</th>
                                        <th>Record Time</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
            paging: true,
            lengthChange: false,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: false
        });
    });
    </script>
