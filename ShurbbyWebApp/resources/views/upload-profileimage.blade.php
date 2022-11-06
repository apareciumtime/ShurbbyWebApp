<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>upload profile picture</title>
</head>
<body>
    <div>
        อัพโหลดรูปโปรไฟล์ที่นี่
        <form action="{{route('uploadprofileimage')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input class='form-control' type="file" name="image" id='image'>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
