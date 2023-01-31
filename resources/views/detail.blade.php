@extends('layout.master', ['title' => 'Tabel Barang'])
@section('title', 'Tabel Barang')
@section('content')

<div>
    <h4 class="mb-3 mb-md-2">Tabel Barang</h4>
</div>

<div class="container">

    <table class="table">
        <tr>
            <td>Kode Barang </td>
            <td>: {{$barang['kode_barang']}}</td>
        </tr>
        <tr>
            <td>Nama Barang </td>
            <td>: {{$barang['nama_barang']}}</td>
        </tr>
        <tr>
            <td>Persediaan Barang </td>
            <td>: {{$barang['stok']}}</td>
        </tr>
        <tr>
            <td>Persediaan Barang di Gudang</td>
            <td>
                @if(isset($barang['stok_fisik']))
                : {{$barang['stok_fisik']}}
                @else
                : -
                @endif
            </td>


        </tr>
        <tr>
            <td>Selisih</td>
            <td>
                @if(isset($barang['stok_fisik']))
                : {{$barang['stok_fisik'] - $barang['stok']}}
                @else
                : -
                @endif
            </td>
        </tr>
    </table>
    @if(!isset($barang['stok_fisik']))
    <h4>Tambah Persediaan di Gudang</h4>
    <form method="POST" action="/save">
        @csrf
        <input type="hidden" name="id" value="{{ $barang['id'] }}">
        <div class="form-group">
            <label for="nama">Nomor</label>
            <input type="text" class="form-control" id="stok" name="stok" autofocus placeholder="Persediaan di Gudang">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Tambah</button>
    </form>
    @endif
    <a href="\" class="btn btn-scondary">Kembali</a>
</div>


@endsection