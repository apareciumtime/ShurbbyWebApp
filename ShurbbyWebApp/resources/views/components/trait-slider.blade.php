<style>
.trait-slider-framework{
    display: flex;
    flex-direction: row;

    width: 900px;
    height: auto;
    padding: 16px;
    gap: 8px;

    overflow-x: auto;
}
</style>
<div>
    <div class="trait-slider-framework" id="trait-slider-{{$index}}">
        @php
            $cnt=0
        @endphp
        @foreach ($traits as $trait)
            <x-trait-element label='{{$trait->name}}' index='{{$trait->trait_id}}' num='{{$cnt}}'/>   
            @php
                $cnt+=1
            @endphp
        @endforeach
    </div>
</div>