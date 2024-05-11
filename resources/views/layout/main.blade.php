<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Battery Monitoring System</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/f3bc409a1d.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="w-full h-auto min-h-screen flex flex-col bg-center bg-cover bg-fixed"
        style="background-image: url('assets/bg.jpg')">
        {{-- Navbar --}}
        @include('layout.navbar')
        {{-- Content --}}
        @include('layout.hero')
        {{-- Location --}}
        @include('layout.location')
        {{-- Footer --}}
    </div>
</body>

</html>
