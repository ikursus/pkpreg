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
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ auth()->user()->name }}">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}">
            </div>

            <div class="form-group">
                <label>Telefon</label>
                <input type="text" name="telefon" class="form-control" value="{{ old('telefon') }}">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="address" class="form-control">{{ old('address') }}</textarea>
            </div>

            <div class="form-group">
                <label>Suhu Badan</label>
                <input type="number" step="0.1" min="30" name="suhu" class="form-control" value="{{ old('suhu') }}">
            </div>

            <div class="form-group">
                <label>Tarikh Check In</label>
                <input type="date" name="tarikh" class="form-control" value="{{ old('tarikh') }}">
            </div>

            <div class="form-group">
                <label>Masa Check In</label>
                <input type="time" name="masa" class="form-control" value="{{ old('masa') }}">
            </div>

            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Hantar</button>

        </form>

    </div>
</div>
</div>
</div>
@endsection