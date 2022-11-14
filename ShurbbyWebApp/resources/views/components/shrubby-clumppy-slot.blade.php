<style>
    .shrubby-clumppy-slot-framework{
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 12px;
        gap:8px;
    }
</style>
<div class='shrubby-clumppy-slot-framework'>    
    @foreach ($shrubbies as $shrubby)
        <x-shrubby-card itemid="{{$shrubby->id}}"/>
    @endforeach
</div>
