@extends('adminlte.layouts.master')
@section('title',' Edit Jawaban')
@section('header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jawaban</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Pertanyaan</a></li>
              <li class="breadcrumb-item"><a href="#">Jawaban</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
<div class="row">
<div class="col-md-6">
            <div class="card card-danger">
              <div class="card-header">
                
                <h2 class="card-title">Edit Jawaban</h2>
             
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="activity">
                    <!-- Post -->
                    <div class="post clearfix">
                      <form action="/jawaban/{{$jawaban->id}}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="input-group input-group-sm mb-0">
                          <textarea class="form-control form-control-sm" name="isi_jawaban" placeholder="Jawab">{{$jawaban->isi}}</textarea>
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
</div>
@endsection