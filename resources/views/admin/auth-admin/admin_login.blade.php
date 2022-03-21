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
                        <h3 class="mb-4 text-center">Admin | Login</h3>
                        <form action="{{ url('/admin_dashboard') }}" method="POST" enctype="multipart/form-data"
                            class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control p-2" name="email" id="name" placeholder="Email"
                                    required />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control p-2" name="password" id="password"
                                    placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                                    Sign In
                                </button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">
                                        <i style="color: #fff" class="fa fa-arrow-left mr-2"></i>
                                        <a href="{{ url('/admin_register') }}" style="color: #fff">Register Now</a>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>
                                Facebook</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>
                                Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/Login-Assets/js/fontawesome.all.min .js') }}"></script>
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
