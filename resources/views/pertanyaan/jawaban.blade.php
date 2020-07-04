@extends('adminlte.layouts.master')
@section('title',' Detail Pertanyaan')
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
                
                <h2 class="card-title">Detail Pertanyaan</h2>
             
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="activity">
                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('adminlte/dist/img/user7-128x128.jpg')}}" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Dibuat - {{$pertanyaan->created_at}} {{$pertanyaan->updated_at == null ? ' ' : '| Diupdate - '.$pertanyaan->updated_at}} </span>
                      </div>
                      <!-- /.user-block -->
                      <h4>{{$pertanyaan->judul}}</h4>
                      <p>
                        {{$pertanyaan->isi}}
                      </p>

                      <form action="/jawaban/{{$pertanyaan->id}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="input-group input-group-sm mb-0">
                          <textarea class="form-control form-control-sm" name="isi_jawaban" placeholder="Jawab"></textarea>
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
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
<div class="col-md-6">
            <!-- Box Comment -->
            <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  <h3>List Jawaban</h3>
                </div>
                <!-- /.user-block -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                    <i class="far fa-circle"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <!-- /.card-body -->
              <div class="card-footer card-comments">
                @foreach($list_jawaban as $jwb)
                <div class="card-comment">
                  <img class="img-circle img-sm" src="{{asset('adminlte/dist/img/user3-128x128.jpg')}}" alt="User Image">
                  <div class="comment-text">
                    <span class="username">
                      Maria Gonzales
                      <span class="text-muted float-right">{{$jwb->created_at}} | <a href="/jawaban/{{$jwb->id}}/edit">Edit</a> | 
                        <form action="/jawaban/{{$jwb->id}}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                      </form>
                      </span>
                    </span>
                    {{$jwb->isi}}
                  </div>
                </div>
                @endforeach
 
              </div>

            </div>
            <!-- /.card -->
          </div>
@endsection