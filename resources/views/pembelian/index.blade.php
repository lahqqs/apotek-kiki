@extends('layout.main')

@section('container')
<table class="table">
  <thead>
    <tr>
    <th scope="col">No Nota</th>
      <th scope="col">Tanggal Beli</th>
      <th scope="col">Penjual</th>
      <th scope="col">Pembeli</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $pembelian)
    <tr>
      <td>{{$pembelian->nonota_beli}}</td>
      <td>{{$pembelian->tgl_beli}}</td>
      <td>{{$pembelian->distributors->nama_distributor}}</td>
      <td>{{$pembelian->users->name}}</td>
      <td>{{$pembelian->total_beli}}</td>
    </tr>
    @endforeach()
  </tbody>
</table>
@endsection