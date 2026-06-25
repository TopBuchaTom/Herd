<html>
    <head>
        <title>Show lecture {{ $lecture->id }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <h1>Show lecture {{ $lecture->id }}</h1>
    <ul>
        <li>Title: {{ $lecture->title }}</li>
        <li>Studycourse: {{ $lecture->studycourse }}</li>
        <li>From: {{ $lecture->from }}</li>
        <li>To: {{ $lecture->to }}</li>
    </ul>

    <form method="GET" action="{{ route('lectures.edit', ["lecture" => $lecture->id]) }}">
        <input type="submit" value="Edit" />
    </form>
    <form method="POST" action="{{ route('lectures.destroy', ["lecture" => $lecture->id]) }}">
        <input type="submit" value="Delete" />
        @csrf
        @method('DELETE')
    </form>
    </body>
</html>
