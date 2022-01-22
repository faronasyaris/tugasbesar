@extends('Layout.app')

@section('content')
    <div class="col-md-8 offset-md-2">
        <h3> Add Booking </h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div> <br />
        @endif
        <form method="post" action="/booking">
            @csrf
            <div class="form-group">
                <label for="id_playstation"> ID Playstation </label>
                <input type="text" class="form-control" name="id_playstation" required>
            </div>
            <div class="form-group">
                <label for="name"> Nama </label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="booking_date"> Tanggal Sewa</label>
                <input type="date" class="form-control" name="booking_date" required>
            </div>
            <div class="form-group">
                <label for="booking_duration"> Durasi </label>
                <input type="text" class="form-control" name="booking_duration" required>
            </div>
            <div class="form-group">
                <label for="return_time"> Tanggal Pengembalian </label>
                <input type="date" class="form-control" name="return_time" required>
            </div>
            <div class="form-group">
                <label for="guarantee"> Jaminan </label>
                <input type="text" class="form-control" name="guarantee" required>
            </div>
            <div class="form-group">
                <label for="status"> Status </label>
                <input type="text" class="form-control" name="status" required>
            </div>
            <button type="submit" class="btn btn-primary"> Save Booking </button>
        </form>
    </div>
@endsection