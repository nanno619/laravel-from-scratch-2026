@props([
    'title' => 'Laracasts'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        nav > a {
            color: blue;
        }

        .max-w-400{
            max-width: 400px;
            margin: auto;
        }

        .card{
            background: #e3e3e3;
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>
<body class="p-6 max-w-xl mx-auto">
    {{-- <nav>
        <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/contact">Contact Us</a>
    </nav> --}}
    <main>
        {{ $slot }}
    </main>
</body>
</html>
