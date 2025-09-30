<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GPI Mrican')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Gereja GPI Mrican</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('jadwal') }}" class="nav-link">jadwal</a></li>
                    <li class="nav-item"><a href="{{ route('kontak') }}" class="nav-link">kontak</a></li>
                </ul>
            </div>
        </div>
     </nav>

     <!-- Isi Halaman -->
      <div class="container mt-4">
        @yield('content')
      </div>

      <!-- Footer -->
       <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy; 2025 GPI Mrican</p>
       </footer>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>