<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Produk</h1>
        <a href="show.php" class="btn btn-primary mb-3">Lihat Data Produk</a>
        <div class="card">
            <div class="card-body">
                <form action="./backend/create.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Nama Produk</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Input nama produk"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="price">Harga Produk</label>
                        <input type="number" class="form-control" name="price" id="price"
                            placeholder="Input harga produk" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Gambar Produk</label>
                        <input type="file" class="form-control-file" name="image" id="image">
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>