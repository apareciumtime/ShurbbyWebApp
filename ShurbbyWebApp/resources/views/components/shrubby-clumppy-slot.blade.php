<style>
    .shrubby-clumppy-slot-framework{
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 12px 0px;
        /* border: 1px solid orange; */
    }
    .one-shrubby-card{
        margin-left: 16px;
        margin-right: 16px;
    }
</style>
<div class='shrubby-clumppy-slot-framework'>    
    @foreach ($shrubbies as $shrubby)
        <div class='one-shrubby-card'>
            <x-shrubby-card itemid="{{$shrubby->id}}"/>
        </div>      
    @endforeach
</div>
