<!DOCTYPE html>
<html lang="{{str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .bg-primary {
            background-color: #F79327;
        }
        .text-primary {
            color: #FF5722;
        }
        .hover\:bg-primary:hover {
            background-color: #FF5722;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

@yield('childContent')

<script>

</script>
</body>
</html>
