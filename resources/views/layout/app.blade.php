<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/cc7c777ccc.js" crossorigin="anonymous"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          
        }
      }
    }
  </script>
  <title>@yield('title') - Mangabase</title>
</head>
<body>
  <div class="container px-10 py-3 mx-auto">
    @yield('content')
  </div>
</body>
</html>