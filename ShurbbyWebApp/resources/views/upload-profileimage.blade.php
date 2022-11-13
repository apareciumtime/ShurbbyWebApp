<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>upload profile picture</title>
    
    {{-- for crop and preview profile pict --}}
    <link rel="stylesheet" href="{{ asset('/ijaboCropTool-master/ijaboCropTool.min.css') }}">
</head>
<body>
    <div class="">
        <a href="{{route('home')}}">ย้อนกลับ</a>
    </div>
    <div>
        อัพโหลดรูปโปรไฟล์ที่นี่
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <input class='form-control' type="file" name="image" id='image'>
        </form>
    </div>
    <div class="">
        รูปโปรไฟล์
        <div class="">
            <img src="{{$user->profile_image}}" class="profile_image" alt="profile_image">
        </div>
        
    </div>

    {{-- for crop and preview profile pict --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="{{ asset('/ijaboCropTool-master/ijaboCropTool.min.js') }}"></script> 

    <script>
        $('#image').ijaboCropTool({
            //profile_image = class of img element in html -> make picture update without refresh page
            preview : '.profile_image',
            setRatio:1,
            allowedExtensions: ['jpg', 'jpeg','png'],
            buttonsText:['OK','QUIT'],
            buttonsColor:['#30bf7d','#ee5155', -15],
            processUrl:'{{ route("croppict") }}',
            withCSRF:['_token','{{ csrf_token() }}'],
            onSuccess:function(message, element, status){
                alert(message);
            },
            onError:function(message, element, status){
                alert(message);
            }
       });
   </script>

</body>
</html>
