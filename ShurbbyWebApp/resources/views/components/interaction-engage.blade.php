<style>
.interaction-engage-frame{
    display: flex;
    flex-direction: row;

    width: auto;
    height: 32px;
    margin:0px;
    padding:0px;
    gap:8px;
}

.interaction-engage-frame:hover .interaction-engage-icon-svg-yet{
    fill:#F1B24B;
}

.interaction-engage-btn{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    width: 32px;
    height: 32px;

    background: none;

    border:none;
    outline: none;

    cursor: pointer;
}

.interaction-engage-icon-svg-yet{
    fill:#4B819F;
}

.interaction-engage-icon-svg{
    fill:#F1B24B;
}

.interaction-engage-describe{
    display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;

    width: auto;
    height: 32px;

    font-family: 'Maitree';
    font-size: 16px;
    color: #4B819F;
}
</style>

@if($label == 'like')

    {{-- <button class="btn btn-default btn-xs" id="{{$id}}-count" > {{$like_amount}}</button> --}}
    

    <div class="interaction-engage-frame">
        <button class="interaction-engage-btn" onclick="likeIt('{{$id}}','{{$routeTo}}','{{$type}}')"> 
            <svg id="islike-{{$type}}-{{$id}}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="interaction-engage-icon-svg{{$liked?"":"-yet"}}">
                <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"/>
            </svg>
        </button>
        <div id = 'likeCount-{{$type}}-{{$id}}' class="interaction-engage-describe">
            {{$like_amount}}
        </div>
    </div>
@elseif($label == 'comment')
    <div class="interaction-engage-frame">
    <a href={{$routeTo}}>
        <button class="interaction-engage-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="interaction-engage-icon-svg-yet">
            <path d="M256 32C114.6 32 .0272 125.1 .0272 240c0 47.63 19.91 91.25 52.91 126.2c-14.88 39.5-45.87 72.88-46.37 73.25c-6.625 7-8.375 17.25-4.625 26C5.818 474.2 14.38 480 24 480c61.5 0 109.1-25.75 139.1-46.25C191.1 442.8 223.3 448 256 448c141.4 0 255.1-93.13 255.1-208S397.4 32 256 32zM256.1 400c-26.75 0-53.12-4.125-78.38-12.12l-22.75-7.125l-19.5 13.75c-14.25 10.12-33.88 21.38-57.5 29c7.375-12.12 14.37-25.75 19.88-40.25l10.62-28l-20.62-21.87C69.82 314.1 48.07 282.2 48.07 240c0-88.25 93.25-160 208-160s208 71.75 208 160S370.8 400 256.1 400z"/>
            </svg>
        </button>
    </a>
        <div class="interaction-engage-describe">
            {{$comment_amount}}
        </div>
    </div>
@endif

<script language=javascript>
    function submitPostLink()
    {
        document.postlink.submit();
    }
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    function likeIt(postid,routeTo,type){
        // alert(postid);
        // alert(type);
        // alert("islike-"+type+"-"+postid);
        var csrfToken='{{csrf_token()}}';
        var element = document.getElementById("islike-"+type+"-"+postid);
        var cnt = document.getElementById("likeCount-"+type+"-"+postid).innerHTML;
            
        $.post(routeTo, {postid: postid,_token:csrfToken}, function (data) {
            console.log(data);
            if(data.message==='liked'){
                element.classList='interaction-engage-icon-svg';
                document.getElementById("likeCount-"+type+"-"+postid).innerHTML = parseInt(cnt)+1;
            }else{
                element.classList+='-yet';
                document.getElementById("likeCount-"+type+"-"+postid).innerHTML = parseInt(cnt)-1;
            }
        }  
        )
    };
</script>