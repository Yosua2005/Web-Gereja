@extends('layout.app')

@section('title', 'Jadwal Ibadah')

@section('content')
<h1>Jadwal Ibadah</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Hari</th>
            <th>Jam</th>
            <th>Acara</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jadwal as $j)
        <tr>
            <td>{{ $j['hari'] }}</td>
            <td>{{ $j['jam'] }}</td>
            <td>{{ $j['acara'] }}</td>
        </tr>
        @endsection
    </tbody>
</table>
@endsection