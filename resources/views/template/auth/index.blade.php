
@extends('template.dashboard.layout.main')

@Section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Users</h1>
</div>
<div class="table-responsive col-lg-11">

  <a href="/dashboard/addauth" class="btn btn-primary mb-2"> Add Role </a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
          
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td >{{ $user->name }}</td>
        {{-- <td >{{ $user->role->nama }}</td> --}}


        <td> 
          <button class="badge bg-info border-0 d-inline" data-bs-toggle="modal" data-bs-target="#exampleModal" ><span data-feather="eye"></span></button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{ $users->links() }}

@endsection