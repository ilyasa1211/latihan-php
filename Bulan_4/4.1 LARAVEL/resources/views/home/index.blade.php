@extends('templates/template')

@section('title')
    Home
@endsection

@section('style')
    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@endsection

@section('script')
    {{-- Java Script --}}
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/script.js')}}"></script>
@endsection

@section('content')
    <!-- Button trigger modal -->
    <div class="container mb-3">
        <button type="button" class="btn-tambah btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Barang
        </button>
    </div>

    <!-- Modal -->
    <form action="{{ url('add') }}" method="post" class="form-core">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nama Barang</label>
                            <input type="text" class="input-nama form-control" name="namaBarang" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Harga Barang</label>
                            <input type="text" class="input-harga form-control" name="hargaBarang" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Jumlah Barang</label>
                            <input type="text" class="input-jumlah form-control" name="jumlahBarang" placeholder="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="submit-button btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
    @livewire('search')
@endsection
