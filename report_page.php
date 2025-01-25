<?php include 'db_connect.php'; ?>
<div class="col-lg-12">
    
    <div class="container">
        <div class="container flex-column d-flex justify-content-center align-items-center">
            <button id="printButton">Print Report</button>
        </div>
        <div id="reportContent">
            <div class="form-group mt-4 mb-4">
                <div class="text-center">
                <h2 class="text-primary font-weight-bold">Client Reports</h2>
                <hr class="bg-primary" style="width: 150px; height: 3px; margin: 15px auto;">
                <p class="text-muted">Complete overview of patient appointments and treatments</p>
                </div>
            </div>
            <div class="card card-outline card-success">
                <div class="card-body">
                    <table class="display table tabe-hover table-condensed" id="list">
                        <thead>
                            <tr>
                                <th width="8%" class="text-center">#</th>
                                <th width="12%">Client ID</th>
                                <th width="20%">Patient Name</th>
                                <th width="20%">Appointment Date</th>
                                <th width="28%">Ailment</th>
                                <th width="28%">Findings</th>
                                <th width="28%">Treatment</th>
                                <th width="12%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $query = "SELECT * FROM appointment_list order by id desc";
                            $result = $conn->query($query);
                            if($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $i++ ?></td>
                                <td><?php echo $row['client_id']; ?></td>
                                <td><b><?php echo $row['fullname']; ?></b></td>
                                <td><?php echo $row['schedule']; ?></td>
                                <td><?php echo $row['ailment']; ?></td>
                                <td><?php echo $row['findings']; ?></td>
                                <td><?php echo $row['treatment']; ?></td>
                                <td>
                                    <?php 
                                        if($row['status'] == 0){
                                            echo "<span class='badge badge-warning'>Waiting for Approval</span>";
                                        }elseif($row['status'] == 1){
                                            echo "<span class='badge badge-primary'>Under Examination</span>";
                                        }elseif($row['status'] == 2){
                                            echo "<span class='badge badge-info'>Under Treatment</span>";
                                        }elseif($row['status'] == 3){
                                            echo "<span class='badge badge-danger'>Cancelled</span>";
                                        }elseif($row['status'] == 4){
                                            echo "<span class='badge badge-success'>Treatment Done</span>";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    table p{
        margin: unset !important;
    }
    table td{
        vertical-align: middle !important
    }
</style>

<script>
    $(document).ready(function(){
        var table = $('#list').DataTable();

        $('#printButton').on('click', function() {
            printReport(table);
        });
    });

    function printReport(table) {
        // Disable DataTables features for printing
        table.destroy();
        $('#list').removeAttr('style');

        var printContents = document.getElementById('reportContent').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;

        // Reinitialize DataTables after printing
        $('#list').DataTable();
    }
</script>