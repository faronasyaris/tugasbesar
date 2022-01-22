@extends('Layout.app')
<?php $no=1 ?>
@section ("content")
<br>
<h3>Booking Data</h3>
    <a href="/booking/create" class="btn btn-danger"> Add Booking</a><br>
    <div class="col-sm-12"> <br>

        @if (session()->get('success'))
            <div class="alert alert-sucess">
                {{ session()->get('sucess') }}
            </div>
        @endif
    </div>
<table class="table table-striped">
    <thead>
        <tr>
            <th> Nomor </th>
            <th> ID Booking </th>
            <th> ID Playstation </th>
            <th> Nama Penyewa</th>
            <th> Tanggal Sewa </th>
            <th> Durasi Peminjaman </th>
            <th> Tanggal Pengembalian </th>
            <th> Jaminan </th>
            <th> Status </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($booking as $bookings)
        <tr>
            <td> {{ $no++ }} </td>
            <td> {{ $bookings->id_booking }} </td>
            <td> {{ $bookings->id_playstation }} </td>
            <td> {{ $bookings->name }} </td>
            <td> {{ $bookings->booking_date }} </td>
            <td> {{ $bookings->booking_duration }} </td>
            <td> {{ $bookings->return_time}} </td>
            <td> {{ $bookings->guarantee }} </td>
            <td> {{ $bookings->status}}
                <td>
                    <a href="/booking/{{ $bookings->id_playstation}}/edit/" class="btn btn-info"> Edit</a>
                </td>
                <td>
                    <form action="/booking/{{ $bookings->id_playstation }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-dark" type="submit"> Delete</button>
                    </form>
                </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop