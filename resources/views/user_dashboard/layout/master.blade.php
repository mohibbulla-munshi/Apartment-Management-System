<!DOCTYPE html>

<head>
    @include('user_dashboard.layout.top')
</head>

<body>

    <!-- Left Panel bar  -->
    @include('user_dashboard.layout.left_panel')
    <!-- Left Panel bar End -->


    <!-- Right Panel bar  -->
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <!-- Header -->
        @include('user_dashboard.layout.header')


        <!-- Content section -->
        @yield('content')

        <!-- Footer -->
        @include('user_dashboard.layout.footer')
    </div>
    <!-- Right Panel bar End -->

    <!-- CoreUI and necessary plugins-->
    @include('user_dashboard.layout.bottom')

</body>

</html>