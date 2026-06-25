<html>
    <head>
        <title>Lectures</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <h1>Lectures</h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        @foreach ($lectures as $lecture)
                        <li>
                            <a href="{{ route('lectures.show', ["lecture" => $lecture->id]) }}">
                                {{ $lecture->title }}
                            </a>
                            ({{ $lecture->studycourse }})
                            [{{ $lecture->from }} - {{ $lecture->to }}]
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('lectures.create') }}">Create</a>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
