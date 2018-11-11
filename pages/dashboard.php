<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>
<?php
require '../config/dbconnection.php';

$newsSql = "SELECT * FROM `powerdatatable` ORDER BY `Id` DESC LIMIT 1";
$result = $conn->query($newsSql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
} else {
    echo "0 results";
}
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <h3 class="panel-title">System Control Panel</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-responsive">
                            <tr>
                                <th colspan="2"><center>Controls</center></th>
                            </tr>
                            <tr>
                                <td>Device 1 Status</td>
                                <td>
                                    <label class="switch pull-right">
                                        <input type="checkbox" disabled>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Device 2 Status</td>
                                <td>
                                    <label class="switch pull-right">
                                        <input type="checkbox" disabled>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Device 3 Status</td>
                                <td>
                                    <label class="switch pull-right">
                                        <input type="checkbox" disabled>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Device 4 Status</td>
                                <td>
                                    <label class="switch pull-right">
                                        <input type="checkbox" disabled>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Device 5 Status</td>
                                <td>
                                    <label class="switch pull-right">
                                        <input type="checkbox" disabled>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Real-Time Latest Monitoring Update</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-responsive table-striped table-hover">
                            <tr>
                                <th><center>Sector</center></th>
                                <th>Value</th>
                            </tr>
                            <tr>
                                <td>Record Time</td>
                                <td><?php echo $row["created"]; ?></td>
                            </tr>
                            <tr>
                                <td>System Operation Voltage</td>
                                <td><?php echo round($row["voltage"], 3); ?> Volt</td>
                            </tr>
                            <tr>
                                <td>System Total Power Consumeption</td>
                                <td>
                                    <?php
                                    $totalPower = getpowerinkWh($row["voltage"], $row["current1"]) + getpowerinkWh($row["voltage"], $row["current2"]) + getpowerinkWh($row["voltage"], $row["current3"]) + getpowerinkWh($row["voltage"], $row["current4"]) + getpowerinkWh($row["voltage"], $row["current5"]);

                                    echo $totalPower;
                                    ?> kW
                                </td>
                            </tr>
                            <tr>
                                <td>Device 1 Cunsumption</td>
                                <td><?php echo getpowerinkWh($row["voltage"], $row["current1"]); ?> kW</td>
                            </tr>
                            <tr>
                                <td>Device 2 Cunsumption</td>
                                <td><?php echo getpowerinkWh($row["voltage"], $row["current2"]); ?> kW</td>
                            </tr>
                            <tr>
                                <td>Device 3 Cunsumption</td>
                                <td><?php echo getpowerinkWh($row["voltage"], $row["current3"]); ?> kW</td>
                            </tr>
                            <tr>
                                <td>Device 4 Cunsumption</td>
                                <td><?php echo getpowerinkWh($row["voltage"], $row["current4"]); ?> kW</td>
                            </tr>
                            <tr>
                                <td>Device 5 Cunsumption</td>
                                <td><?php echo getpowerinkWh($row["voltage"], $row["current5"]); ?> kW</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->