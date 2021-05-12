@extends('layouts.app')
<div id="vanta-cloud">
<script src="https://cdn.jsdelivr.net/npm/vanta@0.5.21/vendor/three.r119.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.21/vanta.clouds.min.js"></script>
<style type="text/css">
    #vanta-cloud{
        width: 100%;
        height: 100vh;
    }
</style>
<script>
VANTA.CLOUDS({
  el: "#vanta-cloud",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  backgroundColor: 0xc859b2,
  skyColor: 0xeb98dd,
  
})
</script>
@section('content')
<div>
<div class="container">
    <div class="card" style="background: #E3e3e3;opacity: .7;">
    <div class="card-body text-center">
        <h2 class="text-danger"><b>Hi.. This is Todo list using laravel framework.</b></h2>
        <ul class="text-left">
            <span>This Project contains core fundamentals like,</span>
            <li>Authentication</li>
            <li>Fetch Data from mysql database</li>
            <li>Create, Read, Update and Delete the fetch data</li>
            <li>Form input Validations</li>
        </ul>
        <p>It will be written in php using MVC. (Laravel Framework). On this page we will use 
        <a href="https://www.vantajs.com/">Vanta.js </a>for Background</p>
    </div>
    </div>

</div>
</div>


</div>
<style>
    body {
        font-family: 'Nunito', sans-serif;
        margin: 0px;
        padding: 0px;
    }
</style>
@endsection