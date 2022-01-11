@extends("Layout.app")
@section("content")
<div class="col-md-8 offset-md-2">
    <h3>TAdd Booking</h3>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div><br>
    @endif

    <form method="post" action="/playstation/{{$playstation->id_playstation}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_playstation"> ID Playstation </label>
            <input type="text" class="form-control" name="id_playstation" required value="{{$playstation->id_playstation}}">
        </div>
        <div class="form-group">
            <label for="name"> Tanggal </label>
            <input type="text" class="form-control" name="name" required value="{{$playstation->name}}" >
        </div>
        <div class="form-group">
            <label for="booking_date"> Tanggal Sewa </label>
            <input type="date" class="form-control" name="booking_date" required value="{{$playstation->booking_date}}">
        </div>
        <div class="form-group">
            <label for="booking_duration"> Durasi </label>
            <input type="time" class="form-control" name="booking_duration" required value="{{$playstation->booking_duration}}">
        </div>
        <div class="form-group">
            <label for="return_time"> Tanggal Pengembalian </label>
            <input type="date" class="form-control" name="return_time" required value="{{$playstation->return_time}}">
        </div>
        <div class="form-group">
            <label for="guarantee"> Jaminan </label>
            <input type="text" class="form-control" name="guarantee" required value="{{$playstation->guarantee}}">
        </div>
        <div class="form-group">
            <label for="status"> Status </label>
            <input type="text" class="form-control" name="status" required value="{{$playstation->status}}">
        </div>
        <button type="submit" class="btn btn-primary"> Save Updated Booking </button>
    </form>
</div>
@endsection