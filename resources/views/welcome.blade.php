<!doctype html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Hello {{ $person }}</h1>
        <ul>
            @foreach ($tasks as $task)
                <table>
                    <tr>
                        <td>{{ $task }}</td>
                    </tr>
                </table>
                <li>{{ $task }}</li>
            @endforeach
        </ul>
    </body>
</html>
