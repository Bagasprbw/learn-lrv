<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Learn git | @yield('title')</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  @include('partials.navbar');

  <!-- Content -->
  <div class="container mt-4">
    @yield('content')
    <!-- Add more content here as needed -->
  </div>

  <!-- Content goes here -->

  <!-- Bootstrap JS and Popper.js (required for Bootstrap components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
