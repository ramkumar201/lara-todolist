@extends('layouts.app')

@section('content')
   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Todo Edit List</div>
                <div class="card-body">
                <x-alert />
                   <form action="{{ route('todo.update',$todo->id) }}" method="post" enctype="multipart/form-data">
                   @csrf
                   @method('patch')
                    <div class="form-group">
                            <label>Todo Id</label><span class="required">*</span>
                            <input class="form-control" type="text" value="{{ $todo->id }}" readonly>
                        </div>

                        <div class="form-group">
                            <label>Todo Title</label><span class="required">*</span>
                            <input class="form-control" type="text" value="{{ $todo->title }}" name="title">
                        </div>

                        <div class="form-group">
                            <label>Todo Description</label><span class="required">*</span>
                            <textarea name="decr" id="" cols="30" rows="10" class="form-control">{{ $todo->decr }}</textarea>
                        </div>

                        <div class="form-group">
                            @if($todo->steps->count() > 0)
                                <livewire:edit-step :steps="$todo->steps">
                            @endif
                        <div>

                        <div class="form-group col-md-6">
                        <label>Status</label><span class="required">*</span>
                        <select id="inputState" class="form-control" name="completed" value="{{ $todo->completed }}">
                            <option >Choose...</option>
                            <option value="Pending">Pending</option>
                            <option value="Working">Working</option>
                            <option value="Completed">Completed</option>
                        </select>
                        </div>

                        <input type="submit" value="Update" class="btn btn-primary">
                        <a href="/todo" class="btn btn-danger">Back</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
<style>
    .required{
        color: red;
    }
</style>