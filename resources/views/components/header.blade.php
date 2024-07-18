<header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-5xl font-bold text-center ">Berita Terkini</h1>
        <nav>
            <ul class="flex space-x-4 text-xl pt-5 ">
                <li><a href="{{ url('/') }}" class="hover:underline">Home</a></li>
                <li><a href="{{ url('/world') }}" class="hover:underline">World</a></li>
                <li><a href="{{ url('/sports') }}" class="hover:underline">Sports</a></li>
                <li><a href="{{ url('/technology') }}" class="hover:underline">Technology</a></li>
                <li><a href="{{ url('/entertainment') }}" class="hover:underline">Entertainment</a></li>
                <li><a href="{{ url('/business') }}" class="hover:underline">Business</a></li>
                <li><a href="{{ url('/health') }}" class="hover:underline">Health</a></li>
                <li><a href="{{ url('/science') }}" class="hover:underline">Science</a></li>
            </ul>
        </nav>
    </div>
</header>
