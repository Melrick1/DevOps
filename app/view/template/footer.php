
<script src="<?php echo APP_PATH; ?>/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="<?php echo APP_PATH; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo APP_PATH; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo APP_PATH; ?>/js/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

<script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        "paging": true,          // Enable pagination
        "lengthChange": true,    // Allow user to change number of records shown
        "searching": true,       // Enable search functionality
        "ordering": true,        // Enable sorting on columns
        "info": true,            // Show table information
        "autoWidth": false,      // Disable automatic column width calculation
        "pageLength": 10,        // Number of rows per page
        "language": {
            "paginate": {
                "previous": "Previous",
                "next": "Next"
            }
        }
    });
});
</script>

</body>
</html>