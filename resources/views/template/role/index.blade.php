@extends('template.dashboard.layout.main')

@Section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create</h1>
  </div>
<div class="col-lg-6">
  
    <form method="post" action="/dashboard/addRole">
        @csrf

      <div class="mb-2">
        <x-label for="role_id" isi="Role" />
        <select class="form-select" name= kategori_id>
        @foreach ($kategoris as $item)
        @if(old('role_id') == $item->id)
          <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
          @else
          <option value="{{ $item->id }}">{{ $item->nama }}</option>
        @endif
        @endforeach
        </select>
      </div>

      <div class="mb-2">
        <x-label for="user_id" isi="user_id" />
        <select class="form-select" name= user_id>
          @foreach ($users as $user)
          @if(old('user_id') == $item->id)
            <option value="{{ $user->id }}" selected>{{ $user->nama }}</option>
            @else
            <option value="{{ $user->id }}">{{ $user->nama }}</option>
          @endif
          @endforeach
          
          </select>
          @error('user_id')
              <div class="invalit-feedback">
                {{ $message }}
              </div>
              @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection