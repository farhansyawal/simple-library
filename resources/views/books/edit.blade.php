<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">

                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">Edit Buku</h4>
                    </div>
                    <div class="card-body p-4">

                        <!-- Error Validation -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Terjadi kesalahan:</strong>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Form -->
                        <form action="{{ route('books.update', $book->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    value="{{ old('title', $book->title) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="author" class="form-label">Penulis</label>
                                <input type="text" class="form-control" name="author" id="author"
                                    value="{{ old('author', $book->author) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="year" class="form-label">Tahun</label>
                                <input type="number" class="form-control" name="year" id="year"
                                    value="{{ old('year', $book->year) }}">
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">
                                    Kembali
                                </a>
                                <button type="submit" class="btn btn-success">
                                    Simpan Perubahan
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
