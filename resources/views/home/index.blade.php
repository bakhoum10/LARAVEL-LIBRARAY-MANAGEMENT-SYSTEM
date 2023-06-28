<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .navbar {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .navbar-container {
            display: flex;
            align-items: center;
        }

        .navbar-brand {
            margin-right: 1cm;
        }

        .nav-link:not(:last-child) {
            margin-right: 1cm;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="nav-item nav-link text-light" href="/return-book">Return Book</a>
            <a class="nav-item nav-link text-light" href="/borrow-book">Borrow Book</a>
            <a class="navbar-brand text-light" href="/">Home</a>
            <a class="nav-item nav-link text-light" href="/books">Books</a>
            <form class="d-flex" method="GET" action="/search">
                <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </nav>
</body>
</html>
