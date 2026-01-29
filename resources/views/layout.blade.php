
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For My Love</title>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    
    <!-- THIS IS THE MAGIC LINE YOU MIGHT BE MISSING -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-love-bg font-cute min-h-screen flex flex-col items-center justify-center p-4 text-center">
    @yield('content')
</body>
</html>