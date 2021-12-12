@extends('adminlte::page')
 
@section('title', 'UTS SITI SOPIAH')
 
@section('content_header')
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">WELCOME TO PERPUSTAKAAN ONLINE SITI</h1>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NO. ANGGOTA</th>
                    <th>NIM</th>
                    <th>JURUSAN</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td> SITI SOPIAH ALPIANI</td>
                    <td>211200</td>
                    <td>182101023</td>
                    <td>TEKNIK INFORMATIKA</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td> SOPIAH ALPIANI</td>
                    <td>211201</td>
                    <td>182101023</td>
                    <td>TEKNIK INFORMATIKA</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>ALPIANI</td>
                    <td>2112002</td>
                    <td>182101023</td>
                    <td>TEKNIK INFORMATIKA</td>
                  </tr>
                
        
@stop
 
@section('content')
    <p>DAFTAR ANGGOTA PERPUSTAKAAN ONLINE</p>
@stop
 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
 
@section('js')
    <script> console.log('Hi!'); </script>
@stop