 <!-- Template JS Files -->
 <script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
 <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
 <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
 <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
 <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
 <script src="{{ asset('frontend/js/jquery.lazy.min.js') }}"></script>
 <script src="{{ asset('frontend/js/rating.js') }}"></script>
 <!--------------- Product Js ------------>
 <script src="{{ asset('frontend/product-js/add_to_wishlist.js') }}"></script>
 <script src="{{ asset('frontend/product-js/change_cart_qty.js') }}"></script>
 <script src="{{ asset('frontend/product-js/change_size_to_update_price.js') }}"></script>
 <!------------ Toastr Message---------->
 <script src="{{ asset('admin/assets/toastr/toastr.min.js') }}"></script>
 <script src="{{ asset('frontend/js/main.js') }}"></script>



 <!------- Success Message ------->
 @if (session('message'))
     {
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
 @if (session('error_message'))
     {
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
