@extends('layouts.app')

@section('content')
    <!-- Larave Livewire Style-->
    @livewireStyles
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Todo Task</div>
                <div class="card-body">
                <x-alert />
                   <form action="/todo/create" method="post" enctype="multipart/form-data">
                   @csrf
                        <div class="form-group">
                            <label>Todo Title</label><span class="required">*</span>
                            <input class="form-control" type="text" name="title" Placeholder="Todo Task Title">
                        </div>

                        <div class="form-group">
                            <label>Todo Description</label><span class="required">*</span>
                            <textarea name="decr" id="" cols="30" rows="5" class="form-control" Placeholder="Todo Task Description"></textarea>
                        </div>

                        <div class="form-group">
                            <livewire:addsteps />
                        </div>


                        <div class="form-group col-md-6">
                        <label>Status</label><span class="required">*</span>
                        <select id="inputState" class="form-control" name="completed" >
                            <option >Choose...</option>
                            <option value="Pending">Pending</option>
                            <option value="Working">Working</option>
                            <option value="Completed">Completed</option>
                        </select>
                        </div>

                        <input type="submit" value="Create" class="btn btn-primary">
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
<!-- Larave Livewire Script -->
@livewireScripts