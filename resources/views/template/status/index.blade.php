@extends('template.dashboard.layout.main')

@Section('container')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-8" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <div class="mb-2">
                {{-- <label for="nama" class="form-label ">Nama Item</label> --}}
                <x-label for="nama" isi="Nama Item" />
                <input placeholder="Nama Barang" type="text" name='nama' class="form-control @error('nama') is-invalid @enderror" id="nama" required value="{{ old('nama') }}" >
                @error('nama')
                    <div class="invalit-feedback">
                      {{ $message }}
                    </div>
                    @enderror
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>

  @endsection