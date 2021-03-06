@extends('adminlte.layouts.master')
@section('title',' Edit Pertanyaan')
@section('header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Pertanyaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Pertanyaan</a></li>
              <li class="breadcrumb-item"><a href="#">Edit</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">EDIT PERTANYAAN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/pertanyaan/{{$pertanyaan->id}}" role="form" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="{{$pertanyaan->judul}}" required>
                  </div>
                  <div class="form-group">
                    <label for="is">Isi Pertanyaan</label>
                    <textarea name="isi" id="isi" cols="30" rows="10" class="form-control">{{$pertanyaan->isi}}</textarea>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer" align="right">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
  </div>
</div>
@endsection