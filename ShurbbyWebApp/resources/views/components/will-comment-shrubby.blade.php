{{-- this is for text box --}}
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<style>
.will-comment-shrubby-framework{
    display: flex;
    flex-direction: column;
    align-items: flex-start;

    width: calc(100% - 32px);
    height: auto;
    margin:16px;
    padding: 0px;
    gap: 16px;

    border-bottom: 1px solid #D2D2D5;
}

.will-comment-shrubby-topic{
    margin:0px 0px 0px 16px;

    font-family: 'Maitree';
    font-size: 18px;
    font-weight: bold;
    color:#445650;
}

.will-comment-shrubby-area{
    width: calc(100% - 32px);
    margin:16px;
    height: auto;
}

.will-comment-btn{
    width: 215px;
    height: 46px;
    margin:0px 0px 16px 16px;

    background: #EFE5D5;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
    border-radius: 8px;

    font-family:'Maitree';
    font-weight: bold;
    font-size: 18px;
    color: #445650;

    border:none;
    outline: none;
}

.will-comment-btn:active{
    box-shadow: inset 1px 1px 1px rgba(0, 0, 0, 0.25);
}
</style>

<div class="will-comment-shrubby-framework">
    <div class="will-comment-shrubby-topic">
        แสดงความคิดเห็น
    </div>
    <div class="will-comment-shrubby-area">
        <textarea name="content" id="editor" form="comment" class="content-input" placeholder="เนื้อหากระทู้"></textarea>
    </div>
    <button class="will-comment-btn" type="submit" form="comment">
        แสดงความคิดเห็น
    </button>
</div>

<form action="{{route('commentpost',['shrubbyid'=>$shrubbyid,'parentid'=>$parentid])}}" method="POST" id="comment" enctype="multipart/form-data">
    @csrf
</form>
{{-- add this script to make text box usable --}}
<script>
    ClassicEditor
    .create( document.querySelector( '#editor' ) 
    ,{
        ckfinder:{
            uploadUrl : '{{ route('ckeditor.upload').'?_token='.csrf_token()}}'
        }
    })
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
    </script>
</script>