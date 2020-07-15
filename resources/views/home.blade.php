@extends('layouts.induk')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">{{ $page_title ?? "" }}</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('data_kandungan')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <p>
                    <div class="alert alert-info">
                        {{ __('You are logged in!') }}
                    </div>
                </p>

                <p>
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary">
                    Profile
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
