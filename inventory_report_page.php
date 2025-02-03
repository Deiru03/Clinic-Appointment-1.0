<?php include 'db_connect.php'; ?>
<div class="col-lg-12">
    <div class="container">
        <!-- Filtering and Print Controls -->
        <div class="container flex-column d-flex justify-content-center align-items-center mb-3">
            <div class="form-inline mb-3">
                <label for="startDate">From: </label>
                <input type="date" id="startDate" class="form-control mx-2">
                <label for="endDate">To: </label>
                <input type="date" id="endDate" class="form-control mx-2">
                <button id="filterButton" class="btn btn-primary">Filter</button>
                <button id="printButton" class="btn btn-success ml-2">Print Report</button>
            </div>
        </div>
        <!-- Report Content -->
        <div id="reportContent">
            <div class="form-group mt-4 mb-4">
                <div class="text-center">
                    <h2 class="text-primary font-weight-bold">Inventory Reports</h2>
                    <hr class="bg-primary" style="width: 150px; height: 3px; margin: 15px auto;">
                    <p class="text-muted">Complete overview of medicine inventory movements</p>
                </div>
            </div>
            <div class="card card-outline card-success">
                <div class="card-body">
                    <table class="display table table-hover table-condensed" id="list">
                        <thead>
                            <tr>
                                <th width="5%" class="text-center">#</th>
                                <th width="10%">Med ID</th>
                                <th width="15%">Medicine Name</th>
                                <th width="15%">Generic Name</th>
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
                                        <td class="text-center"><?php echo $i++; ?></td>
                                        <td><?php echo $row['medicine_id']; ?></td>
                                        <td><b><?php echo $row['med_name']; ?></b></td>
                                        <td><b><?php echo $row['med_gname']; ?></b></td>
                                        <td><b><?php echo $row['action']; ?></b></td>
                                        <td><?php echo $row['quantity']; ?></td>
                                        <td><?php echo $row['previous_stock']; ?></td>
                                        <td><?php echo $row['current_stock']; ?></td>
                                        <td><?php echo $row['date_created']; ?></td>
                                    </tr>
                                    <?php
                                    }   
                                } else {
                                    echo "<tr><td colspan='9' class='text-center'>No records found</td></tr>";
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
        vertical-align: middle !important;
    }
</style>

<script>
    $(document).ready(function(){
        var table = $('#list').DataTable();
        var startDate, endDate;

        $('#filterButton').on('click', function() {
            startDate = $('#startDate').val();
            endDate = $('#endDate').val();

            // Clear previous search functions
            $.fn.dataTable.ext.search = [];

            $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                // Get the date from the "Date Created" column (index 8)
                var rowDate = new Date(data[8]);
                var start = startDate ? new Date(startDate) : null;
                var end = endDate ? new Date(endDate) : null;

                if(start && end) {
                    return rowDate >= start && rowDate <= end;
                } else if(start) {
                    return rowDate >= start;
                } else if(end) {
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
        // Get the filtered rows using DataTables API
        var filteredRows = $(table.rows({ filter: 'applied' }).nodes()).clone();
        // Build a temporary table with Bootstrap classes for styling
        var tempTable = $('<table class="table table-bordered table-striped" id="tempList"/>');
        tempTable.append($(table.table().node()).find('thead').clone());
        var tbody = $('<tbody/>').append(filteredRows);
        tempTable.append(tbody);

        // Open a new window for printing
        var printWindow = window.open('', '', 'height=600,width=800');
        printWindow.document.write('<html><head><title>Inventory Reports</title>');
        // Bootstrap style
        printWindow.document.write('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">');
        // Additional styles for print layout and table borders
        printWindow.document.write('<style>');
        printWindow.document.write('body { padding: 20px; }');
        printWindow.document.write('#reportHeader { text-align: center; margin-bottom: 20px; }');
        printWindow.document.write('#reportHeader h2 { color: #007bff; font-weight: bold; }');
        printWindow.document.write('#reportHeader hr { width: 150px; height: 3px; margin: 15px auto; background-color: #007bff; }');
        printWindow.document.write('table { border-collapse: collapse; width: 100%; }');
        printWindow.document.write('table, th, td { border: 1px solid #dee2e6; }');
        printWindow.document.write('th, td { padding: 8px; text-align: left; }');
        printWindow.document.write('</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write('<div id="reportHeader">');
        printWindow.document.write('<h2>Inventory Reports</h2>');
        printWindow.document.write('<hr>');
        printWindow.document.write('<p class="text-muted">Complete overview of medicine inventory movements</p>');
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