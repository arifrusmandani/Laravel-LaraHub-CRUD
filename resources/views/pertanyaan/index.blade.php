@extends('adminlte.layouts.master')
@section('title',' Pertanyaan')
@section('header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Pertanyaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">List Pertanyaan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
      @foreach($pertanyaan as $per)
    <div class="col-md-12">
        <!-- Box Comment -->
            <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  <img class="img-circle" src="{{asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image">
                  <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                  <span class="description">Dibuat pada - {{$per->created_at}}</span>
                </div>
                <!-- /.user-block -->
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <a href="/pertanyaan/{{$per->id}}/edit" type="button" class="btn btn-tool" title="Edit">
                    <i class="fas fa-edit"></i></a>
                    <form action="/pertanyaan/{{$per->id}}" method="post" style="display: inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-tool" title="Delete"><i class="fas fa-times"></i></button>
                  </form>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- post text -->
                <h4>{{$per->judul}}</h4>
                <p>{{$per->isi}}</p>
                <!-- Social sharing buttons -->
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                <a href="/jawaban/{{$per->id}}" type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i> Jawab</a>
                <span class="float-right text-muted">45 likes - 2 comments</span>
              </div>
              <!-- /.card-body -->
{{--               <div class="card-footer card-comments">

                <div class="card-comment">
                  <img class="img-circle img-sm" src="{{asset('adminlte/dist/img/user3-128x128.jpg')}}" alt="User Image">
                  <div class="comment-text">
                    <span class="username">
                      Maria Gonzales
                      <span class="text-muted float-right">8:03 PM Today</span>
                    </span>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </div>
                  
                </div>
   

              </div> --}}
              <!-- /.card-footer -->
              {{-- <div class="card-footer">
                <form action="#" method="post">
                  <img class="img-fluid img-circle img-sm" src="{{asset('adminlte/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
                  <div class="img-push">
                    <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                  </div>
                </form>
              </div> --}}
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
      @endforeach
            
@endsection

@push('scripts')

  <script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

@endpush

@push('writen_scripts')

  <script>
    $(function () {
      $("#example1").DataTable();
    });
  </script>

@endpush