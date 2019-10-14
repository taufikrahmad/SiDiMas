<!doctype html>
<html @lang('en')>
    <head>
        @include('partials/_head')
    </head>
<body class="hold-transition skin-blue sidebar-mini">
    @include('partials/_nav')
    @include('partials/_aside')
        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('partials/_footer')
        </div>

    
    @include('partials/_script')
    @yield('pagejs')
</body>
</html>
