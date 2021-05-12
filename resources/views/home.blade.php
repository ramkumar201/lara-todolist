@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="card-body">
                <x-alert />
                   <form action="/upload" method="post" enctype="multipart/form-data">
                   @csrf
                   <div class="form-group">
                        <label>Name</label><span class="required">*</span>
                        <input class="form-control" type="text" value="{{Auth::user()->name}}" name="name">
                   </div>

                   <div class="form-group">
                        <label>Email</label><span class="required">*</span>
                        <input class="form-control" type="text" value="{{Auth::user()->email}}" name="email">
                   </div>

                   <div class="form-group">
                        <label>Profile Pic</label><span class="required">*</span>
                        <input type="file" name="image">
                   </div>
                   <input type="submit" name="Upload">
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