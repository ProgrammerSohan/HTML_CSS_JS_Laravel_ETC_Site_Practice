<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Sohan Admin Dashboard</h1>
  @include('admin.body.header')
    @yield('admin')
    <!-- main-sidebar & content -->
    <main>
        @include('admin.body.sidebar')
        
        @include('admin.body.content')
    </main>

   @include('admin.body.footer')

</body>
</html>