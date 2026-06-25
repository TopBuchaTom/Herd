<html>
    <head>
        <title>Edit lecture {{ $lecture->id }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <form method="POST" action="{{ route('lectures.update', ['lecture' => $lecture->id]) }}">
            <header>
                <h1>Edit lecture {{ $lecture->id }}</h1>
            </header>

            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $lecture->title }}" />

            <label for="studycourse">Studycourse</label>
            <textarea name="studycourse">{{ $lecture->studycourse }}</textarea>

            <label for="from">From</label>
            <input type="datetime-local" name="from" value="{{ $lecture->from }}" />

            <label for="to">To</label>
            <input type="datetime-local" name="to" value="{{ $lecture->to }}" />


            <footer>
                <input type="submit" value="Save" />
            </footer>
            @method('PUT')
            @csrf
        </form>
    </body>
</html>



