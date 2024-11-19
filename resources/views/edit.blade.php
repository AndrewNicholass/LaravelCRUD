<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Edit Movie</h1>
        <form action="{{ route('movie.update', ['id' => $movie->id]) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="title" required>
            </div>
            <div class="mb-3">
                <label for="rates" class="form-label">Rates</label>
                <input name="rating" type="number" class="form-control" id="rates" step="0.1" min="0" max="10"
                    required>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input name="genre" type="text" class="form-control" id="genre" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input name="date" type="datetime-local" class="form-control" id="date" required>
            </div>
            <div class="mb-3">
                <label for="synopsis" class="form-label">Synopsis</label>
                <textarea name="synopsis" class="form-control" id="synopsis" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add Movie</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
