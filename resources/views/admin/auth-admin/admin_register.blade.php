<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin/Login-Assets/css/font-awesome.min.css') }}" />
    <!-------- Toastr Css ------->
    <link rel="stylesheet" href="{{ asset('admin/assets/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dropify.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/Login-Assets/css/A.style.css.pagespeed.cf.Yzg85I7GdJ.css') }}" />
    <script>
        (function(w, d) {
            !(function(e, t, r, a, s) {
                (e[r] = e[r] || {}), (e[r].executed = []), (e.zaraz = {
                    deferred: []
                });
                var n = t.getElementsByTagName("title")[0];
                (e[r].c = t.cookie), n && (e[r].t = t.getElementsByTagName("title")[0].text), (e[r].w = e.screen
                        .width), (e[r].h = e.screen.height), (e[r].j = e.innerHeight), (e[r].e = e.innerWidth), (e[
                        r].l = e.location.href), (e[r].r = t.referrer), (e[r].k = e.screen.colorDepth), (e[r].n = t
                        .characterSet), (e[r].o = new Date().getTimezoneOffset()), //
                    (e[s] = e[s] || []), (e.zaraz._preTrack = []), (e.zaraz.track = (t, r) => e.zaraz._preTrack
                        .push([t, r])), e[s].push({
                        "zaraz.start": new Date().getTime()
                    });
                var i = t.getElementsByTagName(a)[0],
                    o = t.createElement(a);
                (o.defer = !0), (o.src =
                    "/cdn-cgi/zaraz/s.js?" + new URLSearchParams(e[r]).toString()), i.parentNode.insertBefore(o, i);
            })(w, d, "zarazData", "script", "dataLayer");
        })(window, document);
    </script>
</head>

<body>
    <section class="ftco-section" style="margin-top: 120px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Admin | Register</h3>
                        <form action="{{ url('/admin_store') }}" method="POST" enctype="multipart/form-data"
                            class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control p-2" name="admin_name" id="name"
                                    placeholder="Name" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control p-2" name="admin_email" id="email"
                                    placeholder="Email" required />
                            </div>
                            <div class="form-group">
                                <input type="phone" class="form-control p-2" name="admin_phone" id="phone"
                                    placeholder="Phone" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control p-2" name="admin_address" id="address"
                                    placeholder="Address" required />
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control p-2" name="admin_password" id="password"
                                    placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control dropify p-2" name="admin_image" id="image">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                                    Sign Up
                                </button>
                            </div>

                            <div class="form-group">
                                <a href="{{ url('/admins') }}" style="padding-top: 7px" class="form-control btn btn-primary rounded submit">
                                    Sign In
                                </a>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-100">
                                    <label class="checkbox-wrap checkbox-primary">
                                        <a href="{{ url('/admins') }}" style="color: #fff">You Are Already
                                            Register</a>
                                        <i style="color: #fff" class="fa fa-arrow-right ml-2"></i>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/Login-Assets/js/fontawesome.all.min .js') }}"></script>
    <script src="{{ asset('admin/Login-Assets/js/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.-hAu1vSpEc.js') }}"></script>
    <!-------- Toastr Message---------->
    <script src="{{ asset('admin/assets/toastr/toastr.min.js') }}"></script>
    <script>
        eval(mod_pagespeed_VNUSr98T9$);
    </script>
    <script>
        eval(mod_pagespeed_tcesK1Z4zC);
    </script>
    <script>
        eval(mod_pagespeed_8YKvkenE$U);
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6ce4d9f40c574a89","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>



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

{{-- <script>
    // Dropify Image
    $(document).ready(function() {
        $(".dropify").dropify();
    });
</script> --}}
