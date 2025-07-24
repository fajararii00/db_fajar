<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Laravel Kampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="/">Kampusku</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('prodis.index') }}" class="nav-link">Prodi</a></li>
                    <li class="nav-item"><a href="{{ route('mahasiswas.index') }}" class="nav-link">Mahasiswa</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
