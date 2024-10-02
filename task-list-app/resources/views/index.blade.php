<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task List App</title>
        <link rel="stylesheet" href="./css/app.css" />
    </head>
    <body>
        <header>
            <h1>Task List App</h1>
        </header>
        <section>
            @if(count($tasks))
                <ul>
                @foreach($tasks as $task)
                    <li>{{ $task -> title }}</li>
                @endforeach
                </ul>
            @else
            <span>There is no tasks!</span>
            @endif
        </section>
    </body>
</html>


