<!-- resources/views/components/news-card.blade.php -->
<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white dark:bg-gray-800">
    <img class="w-full" src="{{ $image }}" alt="{{ $title }}">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 text-gray-900 dark:text-white">{{ $title }}</div>
        <p class="text-gray-700 dark:text-gray-300 text-base">{{ $description }}</p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <span class="text-gray-600 dark:text-gray-400 text-sm">{{ $date }}</span>
    </div>
</div>
