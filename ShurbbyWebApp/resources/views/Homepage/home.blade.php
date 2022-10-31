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
    <div class="leftpane">
        <x-leftpane/>

    </div>
    <div class="right-section">
        <x-header label="หน้าหลัก"/>

        <div class="body-right-section">
            <div class="inside-body">
                <div class="nav-bar">
                    nav-bar
                </div>
                <div class="playground">
                    <x-component-bar $identity = "shrubby"/>
                    <x-shrubby-slider label="Shrubby ที่แนะนำ"/>
                    <x-shrubby-slider label="Shrubby ที่มาใหม่"/>

                </div>
            </div>
            <x-rightpane/>
        </div>
    </div>
    
</body>
</html>