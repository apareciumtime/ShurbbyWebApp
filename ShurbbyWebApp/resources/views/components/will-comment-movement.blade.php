{{-- this is for text box --}}
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<style>
.will-comment-movement-framework{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;

    width: calc(100% - 32px);
    height: auto;
    margin: 16px;
    padding: 0px;
    gap: 16px;

    font-family: 'Maitree';

    border-bottom: 1px solid #445650;
}

.will-comment-movement-topic{
    font-size: 18px;
    font-weight: bold;
    color:#445650;
}

.will-comment-movement-area{
    width: 100%;
}

.content-input{
    font-family: 'Maitree';
    font-size: 16px;
    color:#445650;
}

.will-comment-btn{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    
    width: auto;
    height: auto;
    margin: 0px 0px 16px 0px;
    padding: 8px 12px;

    font-weight: bold;
    font-size: 18px;
    text-align: center;
    color: #445650;

    background: #EFE5D5;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
    border-radius: 8px;

    border: none;
    outline: none;
}

.will-comment-btn:active{
    box-shadow: inset 1px 1px 1px rgba(0, 0, 0, 0.25);
}
</style>

<div class="will-comment-movement-framework">
    <div class="will-comment-movement-topic">
        แสดงความคิดเห็น
    </div>
    <div class="will-comment-movement-area">
        <textarea name="content" id="editor" form="comment" class="content-input" placeholder="เนื้อหากระทู้"></textarea>
    </div>
    <button class="will-comment-btn" type="submit" form="comment">
        แสดงความคิดเห็น
    </button>
</div>


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