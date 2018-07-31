@extends('layouts.app')

@section('content')
<br>
<h2>Daftar Pengguna</h2>
  <p>Berikut daftar pengguna perpustakaan sekolah tinggi desain indonesia: per 21 Juli 2018</p>            
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Nomor induk</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>
        	<button type="button" class="btn btn-default btn-sm">
          		<i class="far fa-edit"></i> Edit
        	</button>
         	<button type="button" class="btn btn-warning btn-sm">
          		<i class="fas fa-exchange-alt"></i></i> Pinjam
        	</button>
        </td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>
        	<button type="button" class="btn btn-default btn-sm">
          		<i class="far fa-edit"></i> Edit
        	</button>
        	<button type="button" class="btn btn-warning btn-sm">
          		<i class="fas fa-exchange-alt"></i></i> Pinjam
        	</button>
        </td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>
        	<button type="button" class="btn btn-default btn-sm">
          		<i class="far fa-edit"></i> Edit
        	</button>
        	<button type="button" class="btn btn-warning btn-sm">
          		<i class="fas fa-exchange-alt"></i></i> Pinjam
        	</button>
        </td>
      </tr>
    </tbody>
  </table>
 <br>
@endsection