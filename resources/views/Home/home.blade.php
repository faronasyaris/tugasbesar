@extends('Layout.app')
@section ("content")
<br>
<center><h1>Sierra Playstation Bandung</h1></center>
    <div class="col-sm-12"> <br>

        @if (session()->get('success'))
            <div class="alert alert-sucess">
                {{ session()->get('sucess') }}
            </div>
        @endif
    </div>
<div class="container">
    <div class="row">
         <div class="col-md-3 ml-5">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Playstation</h5>
                     <p class="card-text"></p>
                     <a href="#" class="btn btn-primary">status</a>
                    </div>
                 </div>
            </div>
        <div class="col-md-3 ml-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Playstation</h5>
                     <p class="card-text"></p>
                     <a href="#" class="btn btn-primary">status</a>
                    </div>
                 </div>
            </div>
<div class="col-md-5 ml-4">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Playstation</h5>
                     <p class="card-text"></p>
                     <a href="#" class="btn btn-primary">status</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
</div>
<br>
@stop