<style>
    .label-info {
        background-color: #B37BFF;
        padding: 10px;
        font-family: 'Ubuntu', sans-serif;
    }

</style>


<!------------ Toastr Message---------->
<script src="{{ asset('admin/assets/toastr/toastr.min.js') }}"></script>

<!---------------- Add Attribute Usign Jquery Form -------------->
<script src="{{ asset('admin/assets/js/add_product_attribute.js') }}"></script>


<!------------------------- Plugin Js For This Page ---------------------->
<script src="{{ asset('admin/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>


<!------------------------ Inject Js --------------------->
<script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin/assets/js/settings.js') }}"></script>
<script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.cookie.js') }}"></script>
<!------------- Collps --------->
<script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin/assets/js/misc.js') }}"></script>

<!--------------- Data-Table ---------->
<script src="{{ asset('admin/assets/vendors/js/jquery.dataTables.js') }}"></script>

<!-------------------- Image Upload -------------------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>

<!--------------- Form Validation ------------->
<script src="{{ asset('admin/assets/validation/jquery.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="{{ asset('admin/assets/js/jq_validate.js') }}"></script>

<!-------------- Change Status Usign Jequery ------------------>
<script src="{{ asset('admin/assets/js/change_status.js') }}"></script>


<!----------------------- Custom Js For This Page ------------------->
<script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>


<!------- Success Message ------->
@if (session('message')) {
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr["success"]("{{ session('message') }}")
    </script>
    }
@endif

<!------ Error Message -------->
@if (session('error_message')) {
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr["error"]("{{ session('error_message') }}")
    </script>
    }
@endif

</body>

</html>
