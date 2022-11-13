<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel = "stylesheet" href = "/css/homeIndex.css">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Prompt:400">
</head>
<body>
    <div class="leftpane">
        <x-leftpane/>

    </div>
    <div class="right-section">
        <x-header label="หน้าหลัก"/>

        <div class="body-right-section">
            <div class="inside-body">
                @yield('inside-body')
            </div>
            <x-rightpane/>
        </div>
    </div>
    
</body>
</html>