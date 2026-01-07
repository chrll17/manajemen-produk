<x-layout>
    <x-slot:title>
        Tambah Produk
    </x-slot:title>

    <div class="container mt-4">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4>Tambah Produk</h4>
        </div>

        <!-- Form -->
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama produk">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" id="kategori" name="kategori">
                            <option value="">Pilih kategori</option>
                            <option value="rokok">
                                Rokok
                            </option>
                            <option value="sabun mandi">
                                Sabun Mandi
                            </option>
                            <option value="mie">
                                Mie
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="0" min="0">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" placeholder="0" min="0">
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-fill">Simpan Produk</button>
                        <button type="reset" class="btn btn-secondary flex-fill">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a href="{{ route('index') }}"><< Kembali</a>
</x-layout>