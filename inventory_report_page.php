<?php include 'db_connect.php'; ?>
<div class="col-lg-12">
    <div class="container">
        <div class="container flex-column d-flex justify-content-center align-items-center">
            <button id="printButton">Print Report</button>
        </div>
        <div id="reportContent">
            <div class="form-group mt-4 mb-4">
                <div class="text-center">
                    <h2 class="text-primary font-weight-bold">Inventory Reports</h2>
                    <hr class="bg-primary" style="width: 150px; height: 3px; margin: 15px auto;">
                    <p class="text-muted">Complete overview of medicine inventory movements</p>
                </div>
            </div>
            <div class="card card-outline card-success">
                <div class="card-body"></div>
                <table class="display table tabe-hover table-condensed" id="list">
                <thead>
                    <tr>
                    <th width="5%" class="text-center">#</th>
                    <th width="10%">Med ID</th>
                    <th width="15%">Medicine Name</th>
                    <th width="15%">Action</th>
                    <th width="10%">Quantity</th>
                    <th width="15%">Previous Stock</th>
                    <th width="15%">Current Stock</th>
                    <th width="15%">Date Created</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        $query = "SELECT * FROM medicine_reports ORDER BY id DESC";
                        $result = $conn->query($query);
                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $i++ ?></td>
                                <td><?php echo $row['medicine_id']; ?></td>
                                <td><b><?php echo $row['med_name']; ?></b></td>
                                <td><b><?php echo $row['action']; ?></b></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['previous_stock']; ?></td>
                                <td><?php echo $row['current_stock']; ?></td>
                                <td><?php echo $row['date_created']; ?></td>
                            </tr>
                            <?php
                            }   
                        } else {
                        echo "<tr><td colspan='7' class='text-center'>No records found</td></tr>";
                        }
                    ?>
                </tbody>
                </table>
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