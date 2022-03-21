<!--- Include Head ----->
@include('admin.head')
<!--- Include Head ----->

<body>
  <div class="container-scroller">

    <!--- Include Top Bar ----->
    @include('admin.include.topbar')
    <!--- Include Top Bar ----->

    <div class="container-fluid page-body-wrapper">

      <!--- Include Left Sidebar ----->
      @include('admin.include.left-sidebar')
      <!--- Include Left Sidebar ----->


      <!------------ Main Body Content --------->
      @yield('admin_content')
      <!------------ Main Body Content --------->



    </div>
  </div>

  <!--- Include Script ----->
  @include('admin.script')
  <!--- Include Script ----->
