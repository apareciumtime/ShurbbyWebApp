<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel = "stylesheet" href = "/css/layouts.css">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree:400">

</head>
<body>
    <div class="leftpane">
        <x-leftpane/>
    </div>
    <div class="right-section">
        @yield('header')
        <div class="body-right-section">
            <div class="inside-body">
                @yield('inside-body')
            </div>
            <x-rightpane/>
        </div>
    </div>

    <a href="/traitfinder" class="traiter-finder-btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="trait-finder-icon">
            <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/>
        </svg>
    </a>
    
</body>
</html>