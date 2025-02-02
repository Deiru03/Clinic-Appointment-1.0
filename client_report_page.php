<?php include 'db_connect.php'; ?>
<div class="col-lg-12">
    
    <div class="container">
        <div class="container flex-column d-flex justify-content-center align-items-center">
            <div class="form-inline mb-3">
                <label for="startDate">From: </label>
                <input type="date" id="startDate" class="form-control mx-2">
                <label for="endDate">To: </label>
                <input type="date" id="endDate" class="form-control mx-2">
                <button id="filterButton" class="btn btn-primary">Filter</button>
                <button id="printButton" class="btn btn-success ml-2">Print Report</button>
            </div>
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
                                <th width="12%">Client<br>ID</th>
                                <th width="20%">Patient Name</th>
                                <th width="20%">Day of Schedule</th>
                                <th width="20%">Appointment Created</th>
                                <th width="20%">Appointment Finished</th>
                                <th width="28%">Ailment</th>
                                <th width="28%">Findings</th>
                                <th width="28%">Treatment</th>
                                <th width="12%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $query = "SELECT * FROM appointment_list WHERE completed_date IS NOT NULL ORDER BY completed_date DESC";
                            $result = $conn->query($query);
                            if($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                            ?>
                            <tr data-completed="<?php echo $row['completed_date']; ?>">
                                <td class="text-center"><?php echo $i++ ?></td>
                                <td><?php echo $row['client_id']; ?></td>
                                <td><b><?php echo $row['fullname']; ?></b></td>
                                <td><?php echo $row['schedule']; ?></td>
                                <td><?php echo !empty($row['appointed_date']) ? date("M d, Y - h:i A", strtotime($row['appointed_date'])) : ''; ?></td>
                                <td><?php echo !empty($row['completed_date']) ? date("M d, Y - h:i A", strtotime($row['completed_date'])) : ''; ?></td>
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
        var startDate, endDate;

        $('#filterButton').on('click', function() {
            startDate = $('#startDate').val();
            endDate = $('#endDate').val();

            // Clear any existing search functions
            $.fn.dataTable.ext.search.pop();

            $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                var rowDate = new Date($(table.row(dataIndex).node()).data('completed'));
                var start = startDate ? new Date(startDate) : null;
                var end = endDate ? new Date(endDate) : null;

                if (start && end) {
                    return rowDate >= start && rowDate <= end;
                } else if (start) {
                    return rowDate >= start;
                } else if (end) {
                    return rowDate <= end;
                }
                return true;
            });

            table.draw();
        });

        $('#printButton').on('click', function() {
            printReport(table, startDate, endDate);
        });
        });

        function printReport(table, startDate, endDate) {
        // Get the currently filtered rows using DataTables API
        var filteredRows = $(table.rows({ filter: 'applied' }).nodes()).clone();
        // Build a temporary table with Bootstrap classes for styling
        var tempTable = $('<table class="table table-bordered table-striped" id="tempList"/>');
        tempTable.append($(table.table().node()).find('thead').clone());
        var tbody = $('<tbody/>').append(filteredRows);
        tempTable.append(tbody);

        // Open a new window for printing
        var printWindow = window.open('', '', 'height=600,width=800');
        printWindow.document.write('<html><head><title>Client Reports</title>');
        // Bootstrap style
        printWindow.document.write('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">');
        // Additional inline styles for print layout and table borders
        printWindow.document.write('<style>');
        printWindow.document.write('body { padding: 20px; }');
        printWindow.document.write('#reportHeader { text-align: center; margin-bottom: 20px; }');
        printWindow.document.write('#reportHeader h2 { color: #007bff; font-weight: bold; }');
        printWindow.document.write('#reportHeader hr { width: 150px; height: 3px; margin: 15px auto; background-color: #007bff; }');
        // Adding borders to the table and its cells.
        printWindow.document.write('table { border-collapse: collapse; width: 100%; }');
        printWindow.document.write('table, th, td { border: 1px solid #dee2e6; }');
        printWindow.document.write('th, td { padding: 8px; text-align: left; }');
        printWindow.document.write('</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write('<div id="reportHeader">');
        printWindow.document.write('<h2>Client Reports</h2>');
        printWindow.document.write('<hr>');
        printWindow.document.write('<p class="text-muted">Complete overview of patient appointments and treatments</p>');
        printWindow.document.write('</div>');
        printWindow.document.write('<div class="card card-outline card-success">');
        printWindow.document.write('<div class="card-body">');
        printWindow.document.write(tempTable.prop('outerHTML'));
        printWindow.document.write('</div></div>');
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.focus();
        printWindow.print();
        printWindow.close();
        }
</script>