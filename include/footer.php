<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");
    let searchBtn = document.querySelector(".bx-search");

    btn.onclick = function() {
        sidebar.classList.toggle("active");
    }
    searchBtn.onclick = function() {
        sidebar.classList.toggle("active");
    }
</script>

<!-- Java Script Bootstrap 4.6 online-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/DataTables/DataTables-1.10.25/js/jquery.dataTables.min.js"></script>
<script src="assets/DataTables/DataTables-1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/DataTables/Buttons-1.7.1/js/dataTables.buttons.min.js"></script>
<script src="assets/DataTables/Buttons-1.7.1/js/buttons.bootstrap4.min.js"></script>
<script src="assets/DataTables/JSZip-2.5.0/jszip.min.js"></script>
<script src="assets/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
<script src="assets/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
<script src="assets/DataTables/Buttons-1.7.1/js/buttons.html5.min.js"></script>
<script src="assets/DataTables/Buttons-1.7.1/js/buttons.print.min.js"></script>
<script src="assets/DataTables/Buttons-1.7.1/js/buttons.colVis.min.js"></script>
<script src=""></script>


<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({

            buttons: ['copy', 'csv', 'print', 'excel', 'pdf', 'colvis'],
            dom: "<'row'<'col-md-4'l><'col-md-4'B><'col-md-4'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row'<'col-md-5'i><'col-md-7'p>>",
            lengthMenu: [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ]
        });

        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
    });
</script>






</body>

</html>
