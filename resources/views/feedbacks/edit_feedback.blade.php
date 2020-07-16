@extends('layouts.induk')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">{{ $page_title }}</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('data_kandungan')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $page_title }}</div>

                <div class="card-body">

                    @include('layouts.alerts')


                    <form method="POST" action="">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        @method('PATCH')
            
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $feedback->nama }}">
                        </div>
            
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $feedback->email }}">
                        </div>
            
                        <div class="form-group">
                            <label>Telefon</label>
                            <input type="text" name="telefon" class="form-control" value="{{ $feedback->telefon }}">
                        </div>
            
                        <div class="form-group">
                            <label>Komen</label>
                            <textarea name="komen" class="form-control">{{ $feedback->komen }}</textarea>
                        </div>
            
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <input type="submit" name="action" value="Save" class="btn btn-success">
                        <input type="submit" name="action" value="Submit" class="btn btn-primary">
            
                    </form>

    </div>
</div>
</div>
</div>
@endsection