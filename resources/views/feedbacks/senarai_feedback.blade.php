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
        
        <div class="table-responsive">
        <table class="table table-bordered table-sm table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>BIL</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>TELEFON</th>
                    <th>KOMEN</th>
                    <th>TINDAKAN</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $feedbacks as $data )
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $data->nama ?? null}}</td>
                    <td>{{ $data->email ?? null}}</td>
                    <td>{{ $data->telefon ?? null}}</td>
                    <td>{{ $data->komen ?? null}}</td>
                    <td>
                        @if ($data->status == 'draft')
                        <a href="{{ route('feedback.edit', $data->id) }}" class="btn btn-info btn-sm">EDIT</a>
                        @endif
                        
                        
                        

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{  $data->id }}">
                            DELETE
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modal-delete-{{  $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            
                            <form method="POST" action="{{ route('feedback.destroy', $data->id) }}">
                            @csrf
                            @method('DELETE')

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Pengesahan Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Adakah anda bersetuju untuk menghapuskan rekod {{ $data->id }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Teruskan</button>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>





                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div> 

        {{-- Untuk paparkan pagination button --}}
        {!! $feedbacks->links() !!}

        <p>
            <a href="{{ route('feedback.create') }}" class="btn btn-primary">New Feedback</a>
        </p>

    </div>
</div>
</div>
</div>
@endsection