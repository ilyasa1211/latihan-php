<div class="container">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <input wire:model="Search" class="form-control" type="text" placeholder="Search">

    <table class="table mt-5">
        <thead class="table-dark text-center">
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Jumlah Barang</th>
            <th>Ubah</th>
            <th>Hapus</th>
        </thead>
        <tbody>
            @if (count($data) <= 0)
                <tr>
                    <td colspan="5" class="text-center">Tidak Ada</td>
                </tr>
            @endif

            @foreach ($data as $item)
                <tr>
                    <td class="text-left">{{ $item->namaBarang }}</td>
                    <td class="text-center">{{ $item->hargaBarang }}</td>
                    <td class="text-center">{{ $item->jumlahBarang }}</td>
                    <td class="text-center"><button type="button" class="btn-edit btn btn-outline-secondary"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-id="{{ $item->id }}">Ubah</button></td>
                    <td class="text-center">
                        <form action="delete/{{ $item->id }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-outline-danger" value="Hapus">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
