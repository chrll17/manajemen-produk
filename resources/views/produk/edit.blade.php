<x-layout>
    <x-slot:title>
        edit
    </x-slot:title>
    
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4>Edit Produk</h4>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('update',$produk['id']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama',$produk['nama']) }}">
        
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select @error('kategori') is-invalid @enderror" id="kategori" name="kategori" aria-label="Default select example">
                            <option value="">
                                pilih kategori
                            </option>
                            <option value="rokok" {{ old('kategori', $produk['kategori']) == 'rokok' ? 'selected' : '' }}>
                                rokok
                            </option>
                            <option value="sabun mandi" {{ old('kategori', $produk['kategori']) == 'sabun mandi' ? 'selected' : '' }}>
                                sabun mandi
                            </option>
                            <option value="mie" {{ old('kategori', $produk['kategori']) == 'mie' ? 'selected' : '' }}>
                                mie
                            </option>
                        </select>
        
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga',$produk['harga']) }}">
                        </div>
        
                        @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok',$produk['stok']) }}">
        
                        @error('stok')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-fill">Edit Produk</button>
                        <button type="reset" class="btn btn-secondary flex-fill">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a href="{{ route('index') }}"><< Kembali</a>
</x-layout>