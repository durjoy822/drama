
<!-- Vendor js -->
<script src="{{asset('/')}}admin/assets/js/vendor.min.js"></script>

<!-- Daterangepicker js -->
<script src="{{asset('/')}}admin/assets/vendor/daterangepicker/moment.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/daterangepicker/daterangepicker.js"></script>

<!-- Apex Charts js -->
<script src="{{asset('/')}}admin/assets/vendor/apexcharts/apexcharts.min.js"></script>

<!-- Vector Map js -->
<script src="{{asset('/')}}admin/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

<!-- Dashboard App js -->
<script src="{{asset('/')}}admin/assets/js/pages/demo.dashboard.js"></script>
<!-- Datatables js -->
<script src="{{asset('/')}}admin/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

<!-- Datatable Demo Aapp js -->
<script src="{{asset('/')}}admin/assets/js/pages/demo.datatable-init.js"></script>
<!-- App js -->
<script src="{{asset('/')}}admin/assets/js/app.js"></script>
<!--ck Editor-->
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<!--fontawesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--jquery-->
{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}




<script>
    var inc = 1;
    $(document).on('click', '#addItemStockBtn', function () {
        var tr = '';
        tr += '<tr>';
        tr += '<td class="p-1">';
        tr += '<input type="file" class="form-control"  onchange="PreviewImage();" id="uploadImage"  name="drama['+inc+'][image]"/>';
    // <img id="uploadPreview" style="width: 100px; height: 100px;" />
        tr += '</td>';

        tr += '<td class="p-1">';
        tr += '<textarea class="form-control" id="inputPassword3" name="drama['+inc+'][description]"  placeholder="Role Description"></textarea>';
        tr += '</td>';

        tr += '<td class="p-1">';
        tr += '<button type="button" class="btn btn-danger remove-item-stock-btn"> - </button>';
        tr += '</td>';

        tr += '</tr>';
        inc++;
        $('#itemStockTBody').append(tr);
        $('.select2').select2();


    });

    $(document).on('click', '.remove-item-stock-btn', function () {
        $(this).closest('tr').remove();
    });
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>

