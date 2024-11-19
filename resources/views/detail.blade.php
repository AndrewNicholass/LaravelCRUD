<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{ $movie->title }}</h1>
                <p class="card-text">
                    <strong>Genre:</strong> {{ $movie->genre }}<br>
                    <strong>Rates:</strong> <img src="https://www.iconpacks.net/icons/1/free-star-icon-984-thumb.png"
                        alt="star" style="width: 16px;"> {{$movie->rating}}<br>
                    <strong>Date:</strong> {{ $movie->date }}
                </p>
                <p><strong>Synopsis:</strong> {{ $movie->synopsis }}</p>
                ✏️
                <a href="{{ route('movie.edit', ['id' => $movie->id]) }}">
                    <button class="btn btn-primary">Edit</button>
                </a>
                <form action="{{ route('movie.delete', ['id' => $movie->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
