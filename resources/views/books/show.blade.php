<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku - {{ $book->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0">Detail Buku</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text"><strong>Penulis:</strong> {{ $book->author }}</p>
                        <p class="card-text"><strong>Tahun:</strong> {{ $book->year ?? '-' }}</p>
                        <p class="card-text"><strong>Dibuat pada:</strong> {{ $book->created_at->format('d-m-Y H:i') }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
