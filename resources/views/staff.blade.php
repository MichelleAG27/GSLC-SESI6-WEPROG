@extends('home')

@php
    $a = 0;
@endphp
@section('staff')
    <h2>List Staff</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Kode Staff</th>
            <th scope="col">Nama Staff</th>
        </tr>
        </thead>
        <tbody>
            @forelse($staff as $z)
                <tr>
                    <td>{{ $z[0] }}</td>
                    <td>{{ $z[1] }}</td>
                </tr>
            @empty
                <tr>
                    <td>NULL</td>
                    <td>NULL</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <h2>Staff dan Binatang yang Diurus</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Staff</th>
            <th scope="col">Binatang</th>
        </tr>
        </thead>
        <tbody>
            @while($a < count($staff))
                <tr>
                    <td>{{ $staff[$a][1] }}</td>
                    <td>{{ $staff[$a][2] }}</td>
                </tr>
                @php $a++; @endphp
            @endwhile
        </tbody>
    </table>
@endsection
