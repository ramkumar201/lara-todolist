<div>
    @if(session()->has('success'))
        <div class="div alert alert-success">{{session()->get('success')}}</div>
    @elseif(session()->has('error'))
        <div class="div alert alert-danger">{{session()->get('error')}}</div>
    @endif


    <!-- Validation Errors -->
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>    
    </div>
    @endif
</div>