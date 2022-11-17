<style>
.header-framework{
    display: flex;
    flex-direction: row;
    
    width: 100%;

    font-family: 'Maitree';

    border-bottom: 1px solid #D2D2D5;
}

.header-back-label-user-info{
    display: flex;
    flex-direction: row;
    align-items: center;

    width: calc(100% - 16px);
    margin: 8px;
    padding: 0px;
    gap: 0px;
}

.header-back-link-to{
    display: flex;
    flex-direction: row;
    
    font-size: 18px;
    font-weight: bold;
    color: #445650;

    white-space: nowrap;
}

.header-back-link-to:hover{
    color: #F1B24B;
}

.header-label{
    display: flex;
    flex-direction: row;
    justify-content: center;

    width: 100%;

    font-size:24px;
    font-weight: bold;
    color:#445650;
}

.header-user-info-link-to-profile-image{
    display: flex;
    flex-direction: row;
    align-items: center;

    margin: 0px;
    padding: 0px;
    gap: 16px;
}

.header-user-info-link-to-profile-image:hover .header-user-alias-profile-link-to{
    color:#F1B24B;
} 

.header-user-alias-profile-link-to{
    display: flex;
    flex-direction: row;

    font-size:18px;
    color:#D2D2D5;
}

.header-user-info-profile-image{
    display: flex;
    flex-direction: row;

    width: 48px;
    height: 48px;

    border-radius: 8px;

    overflow:hidden;
}
</style>

<div class="header-framework">
    <div class="header-back-label-user-info">
        <div class="header-back">
            <a href="#" class="header-back-link-to">
                ย้อนกลับ
            </a>
        </div>
        <div class="header-label">
            {{$label}}
        </div>
        <a href="/journal" class="header-user-info-link-to-profile-image">
            @guest
            
            @else
                <div class="header-user-alias-profile-link-to">
                    {{Auth::user()->alias}}
                </div>
                
                <div class="header-user-info-profile-image">
                    <img src="{{asset(Auth::user()->profile_image)}}" class="header-user-info-profile-image-image">
                </div>
            @endguest
        </a>
    </div>
</div>