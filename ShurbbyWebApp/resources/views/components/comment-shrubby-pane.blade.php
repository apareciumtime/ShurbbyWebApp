<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commentPane</title>

    <style>
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Maitree'
}

.comment_pane{
    width: 64vw;
    /* height:fit-content; */
    height: 1156px;
    padding: 24px 32px;
    box-shadow: 0px 2px 4px -2px rgba(0, 0, 0, 0.5), 0px 4px 6px -1px rgba(0, 0, 0, 0.1);
    border-radius: 24px;
    background-color: #FAFAFA;
}

/* ความคิดเห็น */
.comment_topic{
    width: 850px;
    height: 36px;
    border-bottom: solid 1px #D2D2D5;
}
.comment_topic_text{
    float:left;
    font-size: 24px;
    color: #F1B24B;
    font-weight: bold;
}
.comment_button{
    float: right;
    width: fit-content;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.comment_button_text{ 
    font-size: 24px;
    color: #4B819F;
}

/* แสดงความคิดเห็นของฉัน */
.my_comment{
    margin-top: 16px;
    width: 850px;
    height: 33px;
}
.my_comment_topic{
    float:left;
    font-size: 22px;
    color: #F1B24B;
    font-weight: 600;
}
.comment_edit{
    float: right;
    width: 24px;
    height: 36px;
}
.comment_edit_button{ 
    width: 24px;
    height: 6.22px;
}

.add_my_comment{
    width: 850px;
    /* height: fit-content; */
    height: 248px;
    padding: 12px 0px;
    border-bottom: solid 1px #D2D2D5;
}

.comment_interact{
    float:left;
    width: 152px;
    height: 237px;
}
.comment_interact_box{
    width: 152px;
    height: 157px;
    padding-top: 12px;
    padding-bottom: 12px;
    padding-left: 32px;
    padding-right: 32px;
    text-align: center;
}
.interact{
    width: 40px;
    height: 24px;
}
.comment_interact_num{
    font-size: 24px;
    color: #304045;
}
.correct{
    width: 33.6px;
    height: 24px;
    margin-top: 8px;
    margin-bottom: 8px;
}
.corect_by_owner_text{
    width: 61px;
    height: 42px;
    color: #D2D2D5;
    font-size: 11px;
    line-height: 21px;
    text-align: center;
}

.comment_check_box{
    width: 152px;
    height: 68px;
    display: flex;
    align-items: center;
    justify-content: center;
} 
.comment_check{
    width: 115px;
    height: 66px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.comment_check_text{
    font-size: 22px;
    color: #304045;
    text-align: center;
}

.comment_box{
    float: right;
    margin-left: 16px;
    width: 682px;
    height: 224px;
}
.type_comment_box{
    width: 682px;
    height: 162px;
    background: #F3F3F3;
    border-radius: 8px;
    margin-bottom: 8px;
}

.comment_number{
    width: 658px;
    height: 33px;
    margin-bottom: 8px;
}
.comment_number_text{
    font-size: 22px;
    font-weight: 600;
    color: #F1B24B;
}
.comment_text_box{
    width: 682px;
    height: 60px;
    margin-bottom: 8px;
}
.comment_text{
    font-size: 20px;
    color: #445650;
}

/* shrubby_data */
.shrubby_data{
    margin-top: 8px;
    width: 882px;
    height: 97px;
}
.shrubby_post_data{
    width: 882px;
    height: 54px;
}
.shrubby_creator{
    float: left;
    width: 200px;
    height: 54px;
    display: flex;
    align-items: center;
}
.creator_pic{
    width: 32px;
    height: 32px;
}
.creator_data{
    float: left;
    margin-left: 8px;
    width: 160px;
    height: 54px;
}
.creator_name{
    font-size: 18px;
    font-weight: bold;
    color: #304045;
}
.creator_id{
    font-size: 18px;
    color: #D2D2D5;
}
.post_date{
    float: left;
    width: 236px;
    height: 54px;
}
.post_date_text{
    margin-top: 27px;
    font-size: 18px;
    color: #D2D2D5;
}

/* shrubby_interact */
.shrubby_interact{
    margin-top: 16px;
    width: 882px;
    height: 27px;
}
.interact_box{
    float: left;
    width: fit-content;    
    height: 27px;
}
.interact_pic{
    float: left;
    width: 18.71px;
    height: 27px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.num{
    float: left;
    width: fit-content;
    height: 27px;
    padding-right: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.num_text{
    margin-left: 8px;
    font-size: 18px;
    color: #D2D2D5;
}
.like_img{
    width: 18.71px;
    height: 16px;
}
.commment_img{
    width: 18.28px;
    height: 16px;
}
.share_img{
    width: 18.28px;
    height: 16px;
}
    </style>
</head>
<body>
    <div class="comment_pane">
        <!-- ความคิดเห็น -->
        <div class="comment_topic">
            <p class="comment_topic_text">ความคิดเห็น</p>
            <a href="#">
                <div class="comment_button">
                    <p class="comment_button_text">แสดงความคิดเห็น</p>
                </div>
            </a>           
        </div>
        <!-- แสดงความคิดเห็นของฉัน -->
        <div class="my_comment">
            <p class="my_comment_topic">แสดงความคิดเห็นของฉัน</p>
            <a href="#">
                <div class="comment_edit">
                    <img src="..\pic\edit_button.png" class="comment_edit_button" alt="">
                </div>
            </a>           
        </div>
        <div class="add_my_comment">
            <div class="comment_interact">
                <div class="comment_interact_box">
                    <a href="#"><img src="..\pic\interactUpGray.png" class="interact" alt="up"></a>
                    <p class="comment_interact_num">3</p>
                    <a href="#"><img src="..\pic\interactDownGray.png" class="interact" alt="down"></a><br>
                    <a href="#"><img src="..\pic\correctGray.png" class="correct" alt="correct"></a>
                </div>
            </div>
            <div class="comment_box">
                <div class="type_comment_box">
                    <!-- เขียนความคิดเห็น -->
                </div>
                <div class="shrubby_post_data">
                    <div class="shrubby_creator">
                        <img src="..\pic\iAmNotBacon.png" class="creator_pic" alt="iAmNotBacon">
                        <div class="creator_data">
                            <p class="creator_name">ผมไม่ใช่เบค่อน</p>
                            <p class="creator_id">@iamnotbacon</p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
        <!-- ความคิดเห็นที่ 1 -->
        <div class="add_my_comment">
            <div class="comment_interact">
                <div class="comment_interact_box">
                    <a href="#"><img src="..\pic\interactUp.png" class="interact" alt="up"></a>
                    <p class="comment_interact_num">3</p>
                    <a href="#"><img src="..\pic\interactDown.png" class="interact" alt="down"></a><br>
                    <a href="#"><img src="..\pic\correct.png" class="correct" alt="correct"></a>
                </div>
                <div class="comment_check_box">
                    <div class="comment_check">
                        <p class="comment_check_text">ยืนยันโดย<br>เจ้าของกระทู้</p>
                    </div>
                </div>
            </div>
            <div class="comment_box">
                <div class="comment_number">
                    <p class="comment_number_text">ความคิดเห็นที่ 1</p>
                </div>
                <div class="comment_text_box">
                    <p class="comment_text">มะเขือเทศเชอร์รีจริง ๆ แล้วมีหลายสายพันธุ์คับ บางสายพันธุ์ก็จะมีใบที่ดูหงิก ๆ แบบนี้ ต้องดูว่าพี่ซื้อสายพันธุ์ไหนมาปลูกอะ</p>
                </div>
                <div class="shrubby_data">
                    <div class="shrubby_post_data">
                        <div class="shrubby_creator">
                            <img src="..\pic\iAmNotBacon.png" class="creator_pic" alt="iAmNotBacon">
                            <div class="creator_data">
                                <p class="creator_name">ผมไม่ใช่เบค่อน</p>
                                <p class="creator_id">@iamnotbacon</p>
                            </div>
                        </div>
                        <div class="post_date">
                            <p class="post_date_text">โพสต์เมื่อ 14 ก.พ. 2565 07:25</p>
                        </div>
                    </div>
                    <div class="shrubby_interact">
                        <div class="interact_box">
                            <div class="interact_pic">
                                <a href="#">
                                    <img src="..\pic\likeGray.png" class="like_img" alt="like">
                                </a>
                            </div>
                            <div class="num">
                                <p class="num_text">14k</p>
                            </div>
                        </div>
                        <div class="interact_box">
                            <div class="interact_pic">
                                <a href="#">
                                    <img src="..\pic\commentGray.png" class="commment_img" alt="commment">
                                </a>
                            </div>
                            <div class="num">
                                <p class="num_text">2</p>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>        
        </div>
        <!-- ความคิดเห็นที่ 1-1 -->
        <div class="add_my_comment">
            <div class="comment_interact">
                <div class="comment_interact_box">
                    <a href="#"><img src="..\pic\interactUp.png" class="interact" alt="up"></a>
                    <p class="comment_interact_num">0</p>
                    <a href="#"><img src="..\pic\interactDown.png" class="interact" alt="down"></a><br>
                    <a href="#"><img src="..\pic\correctGray.png" class="correct" alt="correct"></a>
                </div>
            </div>
            <div class="comment_box">
                <div class="comment_number">
                    <p class="comment_number_text">ความคิดเห็นที่ 1-1</p>
                </div>
                <div class="comment_text_box">
                    <p class="comment_text">มะเขือเทศเชอร์รีจริง ๆ แล้วมีหลายสายพันธุ์คับ บางสายพันธุ์ก็จะมีใบที่ดูหงิก ๆ แบบนี้ ต้องดูว่าพี่ซื้อสายพันธุ์ไหนมาปลูกอะ</p>
                </div>
                <div class="shrubby_data">
                    <div class="shrubby_post_data">
                        <div class="shrubby_creator">
                            <img src="..\pic\iAmNotBacon.png" class="creator_pic" alt="iAmNotBacon">
                            <div class="creator_data">
                                <p class="creator_name">ผมไม่ใช่เบค่อน</p>
                                <p class="creator_id">@iamnotbacon</p>
                            </div>
                        </div>
                        <div class="post_date">
                            <p class="post_date_text">โพสต์เมื่อ 14 ก.พ. 2565 07:25</p>
                        </div>
                    </div>
                    <div class="shrubby_interact">
                        <div class="interact_box">
                            <div class="interact_pic">
                                <a href="#">
                                    <img src="..\pic\likeGray.png" class="like_img" alt="like">
                                </a>
                            </div>
                            <div class="num">
                                <p class="num_text">14k</p>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>        
        </div>
    </div>
</body>
</html>