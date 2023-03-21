@extends('template.dashboard.layout.main')

@Section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create</h1>
  </div>
<div class="col-lg-8">
  
    <form method="post" action="/dashboard/inventarisasi">
        @csrf

        <div class="mb-2">
          <x-label for="nama" isi="Nama Item" />
          <x-input placeholder="Nama Barang" name='nama' class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ old('nama') }}" />          
          @error('nama')
              <div class="invalit-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        

      <div class="mb-2">
        <x-label for="kode_barang" isi="Kode Item" />
        <x-input placeholder="kode Barang" name='kode_barang' class="form-control @error('kode_barang') is-invalid @enderror" id="kode_barang" value="{{ old('kode_barang') }}" />
        @error('kode_barang')
            <div class="invalit-feedback">
              {{ $message }}
            </div>
            @enderror
      </div>

      <div class="mb-2">
        <x-label for="kategori_id" isi="Kategori Item" />
        <select class="form-select" name= kategori_id>
        @foreach ($kategoris as $item)
        @if(old('kategori_id') == $item->id)
          <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
          @else
          <option value="{{ $item->id }}">{{ $item->nama }}</option>
        @endif
        @endforeach
        </select>
      </div>


      <div class="mb-2">
        <x-label for="status_id" isi="Status Item" />
        <select class="form-select" name= status_id>
          @foreach ($statuses as $status)
          @if(old('status_id') == $item->id)
            <option value="{{ $status->id }}" selected>{{ $status->status }}</option>
            @else
            <option value="{{ $status->id }}">{{ $status->status }}</option>
          @endif
          @endforeach
          
          </select>
          @error('status_id')
              <div class="invalit-feedback">
                {{ $message }}
              </div>
              @enderror
      </div>


      <div class="mb-2">
        <x-label for="kepemilikan" isi="kepemilikan Item" />
        <x-input placeholder="kepemilikan Barang" name='kepemilikan' class="form-control @error('kepemilikan') is-invalid @enderror" id="kepemilikan" value="{{ old('kepemilikan') }}" />    
        @error('kepemilikan')
            <div class="invalit-feedback">
              {{ $message }}
            </div>
            @enderror
      </div>


      <div class="mb-2">
       <x-label for="jumlah" isi="jumlah Item" />
       <x-input placeholder="jumlah" name='jumlah' class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" value="{{ old('jumlah') }}" />    
            @error('jumlah')
            <div class="invalit-feedback">
              {{ $message }}
            </div>
            @enderror
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection