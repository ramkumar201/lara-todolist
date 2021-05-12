<div>
    <div class="form-group flex justify-center">
        <label>Add Steps for Task</label>&ensp;
        <span wire:click="increment" class="fas fa-plus-circle text-info" id="icon"></span>
    </div>

    @foreach($steps as $step)
    <div class="form-group flex justify-center" wire:key="{{$loop->index}}">
        <input type="text" name="stepName[]" class="form-control" Placeholder="{{'Task Steps '.($loop->index+1)}}"
        value="{{$step['name']}}"/>
        <input type="hidden" name="stepId[]" value="{{$step['id']}}"/>

        <span wire:click="remove({{$loop->index}})" class="fas fa-times text-danger" id="icon" ></span>
    </div>
    @endforeach

</div>
<style>
    #icon{
        cursor: pointer;
    }
</style>