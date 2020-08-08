@extends('adminlte.master')

@section('content')
	<div class="ml-3 mr-3 mt-3">
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Buat Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaans" method="POST">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{old('judul','')}}" id="judul" placeholder="Masukan Judul">
                    @error('judul')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi Pertanyaan</label>
                    <input type="text" class="form-control" value="{{old('isi','')}}" id="isi" name="isi" placeholder="isi">
                    @error('isi')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
                  </div>
                  
              
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
@endsection

