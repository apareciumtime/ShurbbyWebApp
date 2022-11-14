<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shrubby</title>

    <link rel = "stylesheet" href = "/css/shrubby/shrubbyrecommand.css">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree">

</head>
<body>
    <x-leftpane/>
    <div class="right-section">
        <x-header label="หน้าหลัก"/>
        <div class="body-right-section">
            <div class="inside-body">
                <div class='myshrubby-header-framework'>
                    <p class = 'myshrubby-header'>Shrubby ที่แนะนำ</p>
                </div>
                <div class='shrubby-clumppy-framework'>    
                    @foreach ($shrubbies as $shrubby)
                        <div class="card-grid-item">
                            <x-shrubby-card itemid="{{$shrubby->id}}"/>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <x-rightpane/>
    </div>
    
</body>
</html>