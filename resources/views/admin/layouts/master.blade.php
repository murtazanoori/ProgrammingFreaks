<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    @include('admin.layouts.css_links')

</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">


        @include('admin.layouts.header')
        <!-- ========== Left Sidebar Start ========== -->

        @include('admin.layouts.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        @yield('tut')
        <!-- end main content-->
        @include('admin.layouts.footer')
    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('admin.layouts.javascript_links')

@if ($errors->any())

    @foreach ($errors->all() as $error )

    <script>
        iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{$error}}'
        });
    </script>

    @endforeach

    @endif

    @if (session()->get('sucess'))
        <script>
            iziToast.success({
                title: '',
                position: 'topRight',
                message: '{{session()->get('sucess')}}'
            });
        </script>
    @endif

</body>

</html>
