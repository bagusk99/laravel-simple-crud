<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Example</title>
  <link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}">
</head>
<body>

  <div class="container">
    @if ($message = Session::get('message'))
      <x-alert message="{{ $message }}"/>
    @endif
    {{ $slot }} {{-- $slot -> variable bawaan laravel --}}
  </div>
 
  <script src="{{ asset('assets/js/materialize.min.js') }}"></script>
</body>
</html>