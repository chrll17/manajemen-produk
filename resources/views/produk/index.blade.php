<x-layout>
    <x-slot:title>
        produk
    </x-slot:title>
    <div class="mt-2 mx-2">
        <a href="{{ route('tambah') }}" class="btn btn-primary">tambah produk</a>
    </div>
    <div class="mx-5 mt-2">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Kategori</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Opsi</th>
                </tr>
            </thead>
            @foreach ($produk as $p)
                <tbody>
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $p['nama'] }}</td>
                        <td>{{ $p['kategori'] }}</td>
                        <td>Rp {{ number_format($p['harga'], 0, ',', '.') }}</td>
                        <td>{{ $p['stok'] }}</td>
                        <td>
                            <div class="d-flex gap-1">
                                <a href="" class="btn btn-warning mb-1">edit</a>
                                <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</x-layout>