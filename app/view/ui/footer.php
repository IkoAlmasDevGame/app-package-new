<?php require_once("../../config/config.php"); ?>
<script src="<?= base_url('dist/vendor/apexcharts/apexcharts.min.js') ?>"></script>
<script src="<?= base_url('dist/vendor/chart.js/chart.umd.js') ?>"></script>
<script src="<?= base_url('dist/vendor/echarts/echarts.min.js') ?>"></script>
<script src="<?= base_url('dist/vendor/quill/quill.js') ?>"></script>
<script src="<?= base_url('dist/vendor/simple-datatables/simple-datatables.js') ?>"></script>
<script src="<?= base_url('dist/vendor/tinymce/tinymce.min.js') ?>"></script>
<script src="<?= base_url('dist/vendor/php-email-form/validate.js') ?>"></script>
<script src="<?= base_url('dist/js/main.js') ?>"></script>

<!-- Template Main JS File -->
<script crossorigin="anonymous" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>
<script crossorigin="anonymous" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js">
</script>
<script crossorigin="anonymous" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script crossorigin="anonymous" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script crossorigin="anonymous" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script crossorigin="anonymous">
/* Settings DataTables */
$(document).ready(function() {
    $('#datatable1').DataTable({
        "responsive": true,
        "processing": false,
        "ordering": false,
        "columnDefs": [{
            "orderable": false,
            "targets": [0]
        }]
    });
    $("#datatable1_filter").hide(false);
    // $("#datatable1_filter").hide(true);
    $('#datatable1').parent().addClass("table-responsive");
});

$(document).ready(function() {
    $("#datatable2").DataTable({
        "responsive": true
    });
    $('#datatable2').parent().addClass("table-responsive");
});

$(document).ready(function() {
    $("#datatable3").DataTable({
        "responsive": true,
        "ordering": false
    });
    $("#datatable3_filter").hide(false);
    $("#datatable3_length").hide(false);
    $('#datatable3').parent().addClass("table-responsive");
});

function previewImage(input) {
    const file = input.files[0];
    if (file) {
        const preview = document.getElementById('preview');
        preview.src = URL.createObjectURL(file);
        preview.onload = function() {
            URL.revokeObjectURL(preview.src); // Free memory
        };
    }
}
</script>
</body>

</html>