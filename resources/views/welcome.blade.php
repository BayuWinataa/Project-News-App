<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-200">
    @include('components.header')

    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm font-semibold text-gray-700 dark:text-gray-200 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-700 dark:text-gray-200 underline">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm font-semibold text-gray-700 dark:text-gray-200 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
 
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @component('components.news-card', [
                        'title' => 'Berita Pertama',
                        'image' => 'https://via.placeholder.com/400',
                        'date' => '2024-07-17',
                        'description' => 'Ini adalah deskripsi singkat untuk berita pertama.'
                    ])@endcomponent

                    @component('components.news-card', [
                        'title' => 'Berita Kedua',
                        'image' => 'https://via.placeholder.com/400',
                        'date' => '2024-07-16',
                        'description' => 'Ini adalah deskripsi singkat untuk berita kedua.'
                    ])@endcomponent

                    @component('components.news-card', [
                        'title' => 'Berita Ketiga',
                        'image' => 'https://via.placeholder.com/400',
                        'date' => '2024-07-15',
                        'description' => 'Ini adalah deskripsi singkat untuk berita ketiga.'
                    ])@endcomponent

                    <!-- Tambahkan lebih banyak kartu berita sesuai kebutuhan -->
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
</body>
</html>
