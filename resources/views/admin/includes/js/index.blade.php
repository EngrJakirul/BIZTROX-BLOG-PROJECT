<script src="{{asset('/')}}admin/assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/node-waves/waves.min.js"></script>
<!-- apexcharts -->
<script src="{{asset('/')}}admin/assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/pages/dashboard.init.js"></script>
<!-- App js -->
<script src="{{asset('/')}}admin/assets/js/app.js"></script>

<!-- Required datatable js -->
<script src="{{asset('/')}}admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/jszip/jszip.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="{{asset('/')}}admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="{{asset('/')}}admin/assets/js/pages/datatables.init.js"></script>

<!-- Summernote js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- init js -->
<script src="{{asset('/')}}admin/assets/js/pages/form-editor.init.js"></script>

<script src="{{asset('/')}}admin/assets/js/app.js"></script>

@if(Session::has('success'))
    <script>
        toastr.success("{{Session::get('success')}}")
    </script>
    {{Session::forget('message')}}

@elseif(Session::has('warning'))
    <script>
        toastr.warning("{{Session::get('warning')}}")
    </script>
    {{Session::forget('warning')}}

@elseif(Session::has('error'))
    <script>
        toastr.error("{{Session::get('error')}}")
    </script>
    {{Session::forget('error')}}

@elseif(Session::has('info'))
    <script>
        toastr.info("{{Session::get('info')}}")
    </script>
    {{Session::forget('info')}}
@endif

@yield('admin-js')
