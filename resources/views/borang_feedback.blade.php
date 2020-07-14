@extends('layouts.induk')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Borang Feedback</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('data_kandungan')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Borang Feedback</div>

                <div class="card-body">

        <form method="POST" action="">

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label>Telefon</label>
                <input type="text" name="telefon" class="form-control">
            </div>

            <div class="form-group">
                <label>Komen</label>
                <textarea name="komen" class="form-control"></textarea>
            </div>

            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Hantar</button>

        </form>

    </div>
</div>
</div>
</div>
@endsection