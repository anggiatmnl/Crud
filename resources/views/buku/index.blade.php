@extends('buku.layout')
@section('content')
<body>
<table class="table table-striped">
<thead>
  <tr>
    <th>ID</th>
    <th>Judul</th>
    <th>Penerbit</th>
    <th>Tahun Terbit</th>
    <th>Pengarang</th>
    <th colspan="2">Action</th>
  </tr>
</thead>
<tbody>
  
  @foreach($buku as $buku)
  <tr>
    <td>{{$buku['id']}}</td>
    <td>{{$buku['judul']}}</td>
    <td>{{$buku['penerbit']}}</td>
    <td>{{$buku['tahun_terbit']}}</td>
    <td>{{$buku['pengarang']}}</td>
    
    <td>
    <a href="{{action('BukuController@edit')}}" class="btn btn-warning">Edit</a></td>
    <td>
    <a href="/destroy/{{$buku->id}}" class="btn btn-warning">Delete</a>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
@endsection