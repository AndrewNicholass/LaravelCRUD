<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>All Movies</h1>
            <a href="{{ route('movie.create') }}">
                <button class="btn btn-success">New Movie</button>
            </a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($movies as $movie)
                <div class="col">
                    <a href="{{ route('movie.detail', ['id' => $movie->id]) }}" class="text-decoration-none">
                        <div class="card h-100" style="cursor: pointer;">
                            <div class="card-body">
                                <h5 class="card-title">{{  $movie->title }}</h5>
                                <p class="card-text">
                                    <strong>Genre:</strong> {{ $movie->genre }}<br>
                                    <strong>Rates:</strong> <img
                                        src="https://www.iconpacks.net/icons/1/free-star-icon-984-thumb.png" alt="star"
                                        style="width: 16px;"> {{ $movie->rating }}<br>
                                    <strong>Date:</strong> {{ $movie->date }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
