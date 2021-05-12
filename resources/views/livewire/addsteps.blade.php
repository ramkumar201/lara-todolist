<div>
    <div class="form-group flex justify-center">
        <label>Add Steps for Task</label>&ensp;
        <span wire:click="increment" class="fas fa-plus-circle text-info" id="icon"></span>
    </div>

    @foreach($steps as $step)
    <div class="form-group flex justify-center" wire:key="{{$step}}">
        <input type="text" name="step[]" class="form-control" Placeholder="{{'Task Steps ' . ($step+1)}}"/>
        <span class="fas fa-times text-danger" id="icon" wire:click="remove({{$step}})"></span>
    </div>
    @endforeach

</div>
<style>
    #icon{
        cursor: pointer;
    }
</style>