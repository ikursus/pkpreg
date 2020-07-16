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

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>TELEFON</th>
                    <th>TARIKH</th>
                    <th>SUHU</th>
                    <th>ALAMAT</th>
                    <th>TINDAKAN</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $checklists as $data )
                <tr>
                    <td scope="row">{{ $data->id }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->telefon }}</td>
                    <td>{{ $data->tarikh }}</td>
                    <td>{{ $data->suhu }}</td>
                    <td>{{ $data->address }}</td>
                    <td>
                        <a href="" class="btn btn-danger btn-sm">DELETE</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <p>
            <a href="{{ route('checkinlist.create') }}" class="btn btn-primary">New Check-in</a>
        </p>

    </div>
</div>
</div>
</div>
@endsection