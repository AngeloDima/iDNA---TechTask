<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/General.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    @if (session('success'))
    <div id="mailSuccess" class="hidden">
        <h3>Mail inviata correttamente</h3>
    </div>
    @endif




    <div id="redDiv" >
        <div class="coso">
            <a href="">BOARDS</a>
            <a href="">ACCESSORIES</a>
            <a href="">BLOG</a>
            <a href="">TECHNOLOGY</a>
            <a href="">TEAM</a>
            <a href="">DEALERS</a>
        </div>
    </div>

    <div id="imgOnda">
        @include('HomePage.Sec1')
        @include('HomePage.Sec2')
    </div>
     <div class="m-b">
        @include('HomePage.Sec3')
    </div>
      @include('HomePage.Sec4')
      <div class="position-relative mb-cus">
        @include('HomePage.Sec5')
        @include('HomePage.Sec6')
    </div>
     <div class="incrocio">
        @include('HomePage.Sec7')
        @include('HomePage.footer')
    </div>
    <script src="{{ asset('js/nav.js') }}"  crossorigin="anonymous"></script>
    <script src="{{ asset('js/mailForm.js') }}"  crossorigin="anonymous"></script>
</body>
</html>



