<style>
.tag-bar-framework{
    display: flex;
    flex-direction: row;

    font-family: 'Maitree';

    background: #F3F3F3;
}

.tag-bar-framework:hover{
    background: none;
}

.tag-bar-name-follower{
    display: flex;
    flex-direction: column;
    
    width: calc(100% - 16px);
    margin: 8px;
    padding: 0px;
    gap:0px;
}

.tag-bar-name{
    white-space: nowrap; 
    width: 100px; 
    overflow: hidden;
    text-overflow: ellipsis; 

    font-size: 18px;
    font-weight: bold;
    color: #445650;
}

.tag-bar-follower{
    font-size: 16px;
    color: #445650;
}

.tag-bar-follow-btn-section{
    display: flex;
    flex-direction: row;

    margin: 8px;
    padding: 0px;
    gap: 0px;
}

.tag-bar-follow-btn{
    width: 84px;

    background: none;
    border: none;
    outline: none;

    font-family: 'Maitree';
    font-weight: bold;
    font-size: 16px;
    color: #4B819F;
    text-align: right;
    white-space: nowrap;

    cursor: pointer;
}
</style>

<div class="tag-bar-framework">
    <div class="tag-bar-name-follower">
        <a href="{{ route('searchtag',$label) }}" class="tag-bar-name">
            #{{$label}}
        </a>
        <div class="tag-bar-follower">
            <span id='follower-{{$tag_id}}'>{{$follower}}</span> ผู้ติดตาม
        </div>
    </div>
    <div class="tag-bar-follow-btn-section">
        <button class="tag-bar-follow-btn" onclick="followIt('{{$tag_id}}','{{route('follow',$tag_id)}}',this)">
            {{$button_label}}
        </button>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    function followIt(tagid,route,elem){
        
        // alert(type);
        // alert("islike-"+type+"-"+postid);
        var csrfToken='{{csrf_token()}}';
        // var element = document.getElementById("islike-"+type+"-"+postid);
        var cnt = document.getElementById('follower-'+tagid).innerHTML.split(" ");

        // alert(tagid); 
        // alert(cnt); 
        $.post(route, {tagid: tagid,_token:csrfToken}, function (data) {
            console.log(data);
            if(data.message==='following'){
                document.getElementById('follower-'+tagid).innerHTML = parseInt(cnt)+1;
                elem.innerHTML = 'เลิกติดตาม';

            }else{
                document.getElementById('follower-'+tagid).innerHTML = parseInt(cnt)-1;
                elem.innerHTML = 'ติดตาม';
            }
        }  
        )
    };
</script>