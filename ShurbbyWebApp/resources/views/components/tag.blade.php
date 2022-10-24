<link rel = "stylesheet" href = "/css/components/tag.css">
<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Sarabun:100">

<div class="box">
    <div class="left">
        <a href="#" class="topic-name">
            ไมยราพ
        </a>
        <div class="amount">
            16.8k ชรับบี
        </div>
    </div>
    <div class="right">
        <?php $status=0;?>  <!--Have to query $status of this tag with its ID-->
            <button id ="follow-btn" class="follow-btn">
                    <div class = "follow-text">
                        ติดตาม
                    </div>
                    <div class = "followed-text">
                        ติดตามแล้ว
                    </div>
            </button>
    </div>
</div>
    <script>
        document.querySelector('.follow-btn').onclick = function(){
            const follow_text = document.querySelector('.follow-text');
            const followed_text = document.querySelector('.followed-text');
            if(status == 0){
                follow_text.style.display = 'none';
                followed_text.style.display = 'inline';
                status = 1;
                console.log(status);
            }
            else if(status == 1){
                follow_text.style.display = 'inline';
                followed_text.style.display = 'none';
                status = 0;
                console.log(status);
            }
        }
    </script> 