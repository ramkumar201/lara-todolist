@extends('layouts.app')

@section('content')
<div>
  
</div>

<div class="container">
<x-alert />
<div class="table-responsive">
<div class="my-3"><a href="/todo/create" class="btn btn-primary">Add New</a></div>
  <table class="table table-bordered  text-center">
  <thead>
    <tr class=" table-info">
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th colspan="3" scope="col">Action</th>
      <th colspan="2" scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
        @forelse($todos as $todo)
        <tr class="text-left">
            <td scope="row">{{ $todo->id }} </td>
            <td>{{ $todo->title }} </td>
            <td>{{ $todo->decr }} </td>
            <td class="text-center">
              <span id="icon" class="far fa-eye text-info cursor-pointer" onclick="event.preventDefault();
                                    document.getElementById('form-view-{{$todo->id}}')
                                    .submit()"></span>
              <form style="display:none" id="{{'form-view-'.$todo->id}}" action="{{ '/todo/view' . $todo->id }}" method="post">
              @csrf
              @method('get')
              </form>
            </td>
            <td class="text-center">
              <span id="icon" class="fas fa-edit text-warning cursor-pointer" onclick="event.preventDefault();
                                    document.getElementById('form-edit-{{$todo->id}}')
                                    .submit()"></span>
              <form style="display:none" id="{{'form-edit-'.$todo->id}}" action="{{ '/todo/edit' . $todo->id }}" method="post">
              @csrf
              @method('get')
              </form>
            </td>
            <td class="text-center">
              <span id="icon" class="fas fa-trash text-danger cursor-pointer" onclick="event.preventDefault();
                                  if(confirm('Are You really want to delete?')){
                                    document.getElementById('form-delete-{{$todo->id}}')
                                    .submit()
                                  }"></span>
              <form style="display:none" id="{{'form-delete-'.$todo->id}}" action="{{ '/todo/delete' . $todo->id }}" method="post">
              @csrf
              @method('delete')
              </form>
            </td>
            @if ($todo->completed == 'Working')
            <td class="text-center text-danger"><i class="fas fa-check-square"></i></td>
            <td class="text-center text-danger"><span><b>{{ $todo->completed }}</b></span></td>
            @elseif ($todo->completed != 'Completed')
            <td class="text-center text-secondary"><i class="fas fa-check-square"></i></td>
            <td class="text-center text-secondary"><span><b>{{ $todo->completed }}</b></span></td>
            @else
            <td class="text-center text-success"><i class="fas fa-check-square"></i></td>
            <td class="text-center text-success"><span><b>{{ $todo->completed }}</b></span></td>
            @endif
        </tr>
        @empty
        <tr>
            <td colspan="8">No Task's are available<span class="text-danger">
              <i class="fas fa-exclamation"></i>
            </span></td>
        </tr>
        @endforelse
  </tbody>
</table>
</div>
</div>
@endsection

<style>
  #icon{
    cursor: pointer;
  }
</style>