<x-layout>
    <x-slot:title>
        produk
    </x-slot:title>
    <div class="mt-2 mx-2">
        <a href="" class="btn btn-primary">tambah produk</a>
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
                <tbody>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
        </table>
    </div>
</x-layout>