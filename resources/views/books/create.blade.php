<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku - Simple Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Tambah Buku</h4>
                    </div>
                    <div class="card-body">

                        {{-- Error handling --}}
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Terjadi Kesalahan!</strong>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        {{-- Form Tambah Buku --}}
                        <form action="{{ route('books.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul (wajib diisi)</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    placeholder="Masukkan judul buku" required>
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Penulis (wajib diisi)</label>
                                <input type="text" class="form-control" name="author" id="author"
                                    placeholder="Masukkan nama penulis" required>
                            </div>
                            <div class="mb-3">
                                <label for="year" class="form-label">Tahun Terbit</label>
                                <input type="number" class="form-control" name="year" id="year"
                                    placeholder="Contoh: 2023">
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>