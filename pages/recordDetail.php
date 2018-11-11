<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Record Detail Information</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        require '../config/dbconnection.php';
                        $id = $_GET['id'];
                        $unitSql = "SELECT * FROM `powerdatatable` WHERE `Id` = '$id'";
                        $result = $conn->query($unitSql);

                        if ($result->num_rows > 0) {
    // output data of each row
                            $row = $result->fetch_assoc();
                        } else {
                            echo "0 results";
                        }
                        ?>
                        <div class="alert alert-info">Record Time : <?php echo $row["created"]; ?></div>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Device name</th>
                                <th>Voltage</th>
                                <th>Current</th>
                                <th>Power</th>
                            </tr>
                            <tr>
                                <td>Device 1</td>
                                <td><?php echo round($row["voltage"],3) . " Volt"; ?></td>
                                <td><?php echo round($row["current1"],3) . " Amp"; ?></td>
                                <td><?php echo getpowerinkWh($row["voltage"], $row["current1"]) . " kWh";?></td>
                            </tr>
                            <tr>
                                <td>Device 2</td>
                                <td><?php echo round($row["voltage"],3) . " Volt"; ?></td>
                                <td><?php echo round($row["current2"],3) . " Amp"; ?></td>
                                <td><?php echo getpowerinkWh($row["voltage"], $row["current2"]) . " kWh";?></td>
                            </tr>
                            <tr>
                                <td>Device 3</td>
                                <td><?php echo round($row["voltage"],3) . " Volt"; ?></td>
                                <td><?php echo round($row["current3"],3) . " Amp"; ?></td>
                                <td><?php echo getpowerinkWh($row["voltage"], $row["current3"]) . " kWh";?></td>
                            </tr>
                            <tr>
                                <td>Device 4</td>
                                <td><?php echo round($row["voltage"],3) . " Volt"; ?></td>
                                <td><?php echo round($row["current4"],3) . " Amp"; ?></td>
                                <td><?php echo getpowerinkWh($row["voltage"], $row["current4"]) . " kWh";?></td>
                            </tr>
                            <tr>
                                <td>Device 5</td>
                                <td><?php echo round($row["voltage"],3) . " Volt"; ?></td>
                                <td><?php echo round($row["current5"],3) . " Amp"; ?></td>
                                <td><?php echo getpowerinkWh($row["voltage"], $row["current5"]) . " kWh";?></td>
                            </tr>
                            <tr>
                                <td colspan="3">System Total Power</td>
                                <td><?php $totalPower = getpowerinkWh($row["voltage"], $row["current1"]) + getpowerinkWh($row["voltage"], $row["current2"]) + getpowerinkWh($row["voltage"], $row["current3"]) + getpowerinkWh($row["voltage"], $row["current4"]) + getpowerinkWh($row["voltage"], $row["current5"]);

                                    echo round($totalPower,3) . " kWh"; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->