<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Div Centralizada</title>
    <link href="{{asset('assets/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    @yield('styles')
</head>
       
    @yield('content')

    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>