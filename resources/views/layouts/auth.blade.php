<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin_assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/app.css') }}">
</head>

<body>
    <div id="auth">
        @yield('content')
    </div>
    
    <script src="{{ asset('admin_assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/app.js') }}"></script>
    <script src="{{ asset('admin_assets/js/main.js') }}"></script>
</body>

</html>
