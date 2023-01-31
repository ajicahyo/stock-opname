@extends('layout.master', ['title' => 'Tabel Barang'])
@section('title', 'Tabel Barang')
@section('content')

<div>
    <h4 class="mb-3 mb-md-2">Tabel Barang</h4>
</div>

<div class="container">

    <table class="table">
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah Persediaan</th>
            <th>Persediaan di Gudang</th>
            <th>Selisih</th>
            <th>Action</th>
        </tr>
        @foreach($barang as $b)
        <tr>
            <?php
            $i = 0;
            $i++;
            ?>
            <td>{{ $i }}</td>
            <td>{{ $b['kode_barang'] }}</td>
            <td>{{ $b['nama_barang'] }}</td>
            <td>{{ $b['stok'] }}</td>
            <td>
                @if(isset($b['stok_fisik']))
                {{ $b['stok_fisik'] }}
                @else
                -
                @endif
            </td>
            <td>
                @if(isset($b['stok_fisik']))
                {{ $b['stok_fisik'] - $b['stok'] }}
                @else
                -
                @endif
            </td>
            <td>
                @if(isset($b['stok_fisik']))
                <a href="#" class="btn-sm btn-scondary disabled" disabled>sudah ditambahkan</a>
                @else
                <a href="barang/{{$b['id']}}" class="btn-sm btn-primary" disabled>tambah stok</a>
                @endif
            </td>
        </tr>
        @endforeach
    </table>

</div>


@endsection