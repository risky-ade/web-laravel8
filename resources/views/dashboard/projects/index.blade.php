@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Project</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif

    <div class="container">
        <div class="table-responsive col-lg-10 mb-lg-4">
            <a href="/dashboard/projects/create" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-striped table-sm table-bordered" id="datatables">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Project</th>
                        <th scope="col">Client</th>
                        <th scope="col">Scope</th>
                        <th scope="col">Total Image</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->client->name }}</td>
                        <td>{{ $project->service->title }}</td>
                        <td>{{ $project->images->count() }}</td>
                        <td>{{ $project->date }}</td>
                        <td>
                            <a href="/dashboard/projects/{{ $project->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            
                            <form action="/dashboard/projects/{{ $project->id }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span></button>
                            </form>
                          </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection