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
        @foreach($playstation as $playstations)
         <div class="col-md-4 mt-3">
            <div class="card" style="width: 18rem;height:20rem";>
                <img class="card-img-top" src="{{asset('data_file/'.$playstations->foto)}}" alt="Card image cap"style="height:12rem";>
                <div class="card-body">
                    <h5 class="card-title"><center>{{$playstations->name}}</center></h5>
                     <center>
                         @if($playstations->status == 'Ada')
                         <a href="#" class="btn btn-primary">Tersedia</a>
                         @else
                         <a href="#" class="btn btn-danger">Dipinjam</a>
                         @endif
                        </center>
                </div>
            </div>
        </div>
        @endforeach
</div>
</div>

@stop