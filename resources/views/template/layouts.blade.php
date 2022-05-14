<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="/fontawesome/css/all.css">

    {{-- my css --}}
    @if ($status == 'tamu' || $status == 'auth')
        <link rel="stylesheet" href="{{ $css }}">
    @endif

    <title>{{ $title }} | Hotel Hebat</title>
</head>
<body>
    @include('template/navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('template/footer')
    

{{-- bootstrap js --}}
<script src="/js/bootstrap/bootstrap.js"></script>
{{-- fontawesome js --}}
<script src="/fontawesome/js/all.js"></script>
</body>
</html>