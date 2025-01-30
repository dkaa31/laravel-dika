@extends ('template.master')
@section('atas', 'Tambah Data Cast')
@section ('judul', 'Tambah Data Cast')

@section('conten')
          <!-- left column -->
<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Cast</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('cast.store') }}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label for="namacast">Nama Cast</label>
                  <input type="text" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" class="form-control" id="namacast" name="nama" placeholder="Masukkan Nama Cast" value="{{ old('nama') }}">
                  </div>
                  <div class="form-group">
                  <label for="namacast">Umur Cast</label>
                  <input type="number" class="form-control @error('umur') {{ 'is-invalid' }} @enderror" class="form-control" id="umurcast" name="umur" placeholder="Masukkan Umur" value="{{ old('umur') }}">  
                  </div>
                  <div class="form-group">
                  <label for="bio">Bio</label>
                  <textarea name="bio" id="bio" class="form-control @error('bio') {{ 'is-invalid' }} @enderror" class="form-control " value="{{ old('bio') }}"></textarea>
                  </div>
                @error('nama')
                   <span id="terms-error"  class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                @enderror
                @error('umur')
                   <span id="terms-error"  class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                @enderror
                @error('bio')
                   <span id="terms-error"  class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="reset" class="btn btn-warning">Reset</button>
    <a href="{{ route('cast.index') }}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</div>
            <!-- /.card -->
@endsection
