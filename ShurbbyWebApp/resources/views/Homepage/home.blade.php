<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    -->
        <link rel = "stylesheet" href = "/css/homeIndex.css">
        <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Prompt:100">
</head>
<body>
    <section class="header">
        <x-header/>
    </section>
    <section class="body">
        <div class="leftpane">
            <x-leftpane topic="แท็กยอดนิยม">
                <x-tag/>
                <x-tag/>
                <x-tag/>
                <x-tag/>
                <x-tag/>
            </x-leftpane>
        </div>
        <div class="interpane">
            <h1>Hello</h1>
        </div>
        <div class="rightpane">
            <x-rightpane/>
        </div>
    </section>

    
</body>
</html>