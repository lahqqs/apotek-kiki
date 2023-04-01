@extends('layout.main')

@section('container')
<table class="table">
  <thead>
    <tr>
    <th scope="col">No Nota</th>
    <th scope="col">Pembeli</th>
    <th scope="col">Tanggal Jual</th>
    <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $penjualan)
    <tr>
      <td>{{$penjualan->nonota_jual}}</td>
      <td>{{$penjualan->users->name}}</td>
      <td>{{$penjualan->tgl_jual}}</td>
      <td>{{$penjualan->total_jual}}</td>
    </tr>
    @endforeach()
  </tbody>
</table>
@endsection