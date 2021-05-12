@extends('layouts.app')

@section('content')
   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Todo Task View</div>
                    <div class="card-body">
                        <span>Todo Id:</span>
                        <span>{{ $todo->id }}</span>
                    </div>

                    <div class="card-body">
                        <span>Title:</span>
                        <span>{{ $todo->title }}</span>
                    </div>

                    <div class="card-body">
                        <span>Description:</span>
                        <span>{{ $todo->decr }}</span>
                    </div>

                    @if($todo->steps->count() > 0)
                        <div class="card-body">
                            <span><b>Steps for this task:</b></span>
                                @foreach($todo->steps as $step)
                                    <ul><li>{{ $step->name }}</li></ul>
                                @endforeach
                        </div>
                    </div>
                    @endif

                    <div class="card-body">
                        <span><b>Status:</b></span>
                        <span>{{ $todo->completed }}</span>
                        
                        @if($todo->completed == 'Working')
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                        </div>
                        @elseif($todo->completed != 'Completed')
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 15%"></div>
                        </div>
                        @else
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                        </div>
                        @endif
                    </div>
                    <div class="card-body">
                            <a href="{{ '/todo/edit' . $todo->id }}" class="btn btn-primary">Edit</a>
                            <a href="/todo" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection