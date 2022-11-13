@include('home')

@php
    $umur1 = 0;
    $umur2 = 0;
    $umur3 = 0;
@endphp

<h2>List Binatang</h2>
<div-table>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Kode</th>
        <th scope="col">Binatang</th>
    </tr>
    </thead>
    <tbody>

    @foreach($binatang as $x)
        <tr>
            <td>{{ $x[0] }}</td>
            <td>{{ $x[1] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div-table>

@for($i=0;$i < count($binatang); $i++)
    @if($binatang[$i][2] < 5)
        @php $umur1++; @endphp
    @elseif($binatang[$i][2] >= 5 and $binatang[$i][2] <= 10)
        @php $umur2++; @endphp
    @elseif($binatang[$i][2] > 10)
        @php $umur3++; @endphp
    @endif
@endfor

<h2>Jumlah Binatang per Kategori Umur</h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Kategori Umur</th>
        <th scope="col">Jumlah</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>Dibawah 5 Tahun</td>
            <td>{{ $umur1 }}</td>
        </tr>
        <tr>
            <td>5 - 10 Tahun</td>
            <td>{{ $umur2 }}</td>
        </tr>
        <tr>
            <td>Diatas 10 Tahun</td>
            <td>{{ $umur3 }}</td>
        </tr>
    </tbody>
</table>
