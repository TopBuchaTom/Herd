<html>
    <head>
        <title>Create Lecture</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <form method="POST" action="{{ route('lectures.store') }}">
            <header>
                <h1>Create lecture</h1>
            </header>

            <label for="title">Title</label>
            <input type="text" name="title" />

            <label for="studycourse">Studycourse</label>
            <textarea name="studycourse"></textarea>

            <label for="from">From</label>
            <input type="datetime-local" name="from" />

            <label for="to">To</label>
            <input type="datetime-local" name="to" />

            <footer>
                <input type="submit" value="Save" />
            </footer>
            @csrf
        </form>
    </body>
</html>
