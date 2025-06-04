<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Form</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  {{-- header component --}}
  <x-formHeader></x-formHeader>
  {{-- content --}}
  @yield('formContent')
  {{-- footer component --}}
  <x-formFooter></x-formFooter>
</body>
</html>
