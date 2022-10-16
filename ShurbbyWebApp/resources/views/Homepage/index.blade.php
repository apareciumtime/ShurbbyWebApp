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
        <link rel = "stylesheet" href = "/css/Homepage/index.css">
        <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Sarabun:100">
</head>
<body>
    <section class = "head">
        <!-- Logo on the top left of window-->
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path d = "M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
            </svg>
        </div>

        <!--toggle menu show when window size less than 800px-->    
        <div class="head-menu-toggler">
            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
            </svg>
            </span>
        
        
        <div class="head-menu-toggler-content">
            <a href = "#" class="webboard">กระดาน</a>
            <a href = "#" class="timeline">ไทม์ไลน์</a>
            <a href = "#" class="journal">สมุดบันทึก</a>
        </div>
        </div>

        <!-- Menu bar on the top left of window
            1. กระดาน Webboard
            2. ไทม์ไลน์ Timeline
            3. สมุดบันทึก Journal-->
        <div class="head-menu">
            <a href = "{{route('homepage.index')}}" class="webboard">กระดาน</a>
            <a href = "#" class="timeline">ไทม์ไลน์</a>
            <a href = "#" class="journal">สมุดบันทึก</a>
        </div>

        <!--Label of website-->
        <div class="head-label">
            <a href = "{{route('homepage.index')}}">Shrubby</a>
        </div>

        <!--Sign in bar -> Sign in and Sign up-->
        <div class = "head-signin">
            <a href = "{{route('signin.index')}}" class="signin">เข้าสู่ระบบ</a>
            <a href = "#" class="signup">สมัครสมาชิก</a>
        </div>
    </section>

    <!--Body Pane Section-->
    <section class = "body">
        <!--Left-pane
            1. Search tag bar
            2. Top tag
            3. Which tag might follow-->
        <div class = "left-pane">
            <!--Search Bar-->
            <div class = "search-bar">
                <input type="text" placeholder="ค้นหาชรับบี">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/>
                </svg>
            </div>

            <!--Top Tag-->
            <div class="top-tag">
                

            </div>

            <div class="follow-recommend">

            </div>

        </div>

        <div class="middle-pane">
            <div class="nav-bar">

            </div>

            <div class="board">

            </div>
        </div>

        <div class="right-pane">
            <div class="following">
                
            </div>

        </div>
    </section>
</body>
</html>