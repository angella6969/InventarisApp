
@extends('template.dashboard.layout.main')

@Section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Inventarisasi</h1>
</div>
<div class="table-responsive col-lg-11">

  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <a href="/dashboard/inventarisasi/create" class="btn btn-primary mb-2"> Add </a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Kode</th>
        <th scope="col">Jenis Item</th>
        <th scope="col">Status </th>
        <th scope="col">Kepemilikan</th>
        <th scope="col">jumlah</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($barangs as $barang)
          
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td >{{ $barang->nama }}</td>
        <td >{{ $barang->kode_barang }}</td>
        <td >{{ $barang->kategori->nama}}</td>
        <td class="text-center">{{ $barang->status->status }}</td>
        <td >{{ $barang->kepemilikan }}</td>
        <td class="text-center">{{ $barang->jumlah }}</td>

        <td> 
          <button class="badge bg-info border-0 d-inline"><span data-feather="eye"></span></button>
          {{-- <button action="" ><span ></span></button> --}}
          
          <a href="/dashboard/inventarisasi/{{ $barang->id }}/edit" class="badge bg-warning border-0 d-inline"><span data-feather="edit"></span></a>
          <form action="/dashboard/inventarisasi/{{ $barang->id }}" class="d-inline" method="POST">
            @csrf
            @method('DELETE')
            <button class="badge bg-danger border-0" onclick="return confirm('Yakin Ingin Menghapus Data?')"><span data-feather="x-circle"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{ $barangs->links() }}

@endsection