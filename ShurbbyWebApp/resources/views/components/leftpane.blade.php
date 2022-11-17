<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree">

<style>
.leftpane-framework{
    display: flex;
    flex-direction: column;

    width: calc(196px - 32px);
    min-width: calc(196px - 32px);
    height: calc(100vh - 32px);
    margin:0px;
    padding:16px;
    gap:32px;

    border-right:1px solid #D2D2D5;

    font-family: 'Maitree';
}

.leftpane-head-logo-label{
    display: flex;
    flex-direction: row;
    align-items: center;

    width: 100%;
    height: auto;
    margin:0px;
    padding:0px;
    gap: 8px;
}

.leftpane-head-logo-label:hover .leftpane-head-logo-svg,
.leftpane-head-logo-label:hover .leftpane-head-label{
    cursor: pointer;
    fill:#F1B24B;
    color:#F1B24B;
}

.leftpane-head-logo-svg{
    width: auto;
    height: 32px;
    margin: 0px;
    padding: 0px;
    gap: 0px;
    
    fill:#445650;
}

.leftpane-head-label{
    font-weight: 700;
    font-size: 32px;

    color: #445650;
}

.leftpane-search-bar{
    display: flex;
    flex-direction: row;
    align-items: center;
    
    gap: 16px;
}

.leftpane-search-icon{
    height: 24px;

    fill:#D2D2D5;
}

.leftpane-search-box{
    width: calc(196px - 32px - 32px - 24px);
    height: 32px;

    border:none;
    border-bottom: 2px solid #445650;

    outline:none;

    font-size: 14px;
    font-weight: 100;
    color:#445650;
}

.leftpane-search-box:hover{
    border-bottom: 2px solid #F1B24B;
}

.leftpane-content-menu-bar{
    display: grid;
    grid-template-columns: auto;

    margin: 0px;
    padding: 0px;
    gap: 32px;
}

.leftpane-content-menu-bar-grid-item{

}

.leftpane-foot{
    display: grid;
    grid-template-columns: auto;

    position: fixed;
    bottom:0px;
    left:0px;
    
    margin: 16px;
    padding: 0px;
    gap: 32px;

}
</style>

<div class="leftpane-framework">
    <div class="leftpane-head-logo-label">
        <div class="leftpane-head-logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="leftpane-head-logo-svg">
                <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
            </svg>
        </div>
        <div class="leftpane-head-label">
            Shrubby
        </div>
    </div>
    <div class="leftpane-content-menu-bar">
        <div class="leftpane-content-menu-bar-grid-item">
            <div class="leftpane-search-bar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="leftpane-search-icon">
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/>
                </svg>
                
                    <input type="search" placeholder="ค้นหา" name="query" autocomplete="on" class="leftpane-search-box" form="search-form">
            </div>
        </div>
        <div class="leftpane-content-menu-bar-grid-item">
            <x-tab-menu label='หน้าหลัก'/>
        </div>
        <div class="leftpane-content-menu-bar-grid-item">
            <x-tab-menu label='ไทม์ไลน์'/>
        </div>
        <div class="leftpane-content-menu-bar-grid-item">
            <x-tab-menu label='สมุดบันทึก'/>
        </div>
    </div>
    <div class="leftpane-foot">
        @guest
            <div class="leftpane-content-menu-bar-grid-item">
                <x-tab-menu label='เข้าสู่ระบบ'/>
            </div>
            <div class="leftpane-content-menu-bar-grid-item">
                <x-tab-menu label='สมัครสมาชิก'/>
            </div>
        @else
            <div class="leftpane-content-menu-bar-grid-item">
                <x-tab-menu label='ตั้งค่า'/>
            </div>

            
            <div href="{{ route('logout') }}" 
                onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();">
                <x-tab-menu label="ออกจากระบบ"/>
            </div>
            
        @endguest
    </div>
</div>
<!-- Search Form -->
<form id="search-form" type="get" action="{{ route('search') }}">
</form>

<!-- Logout Form -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="logout-form">
    @csrf
</form>