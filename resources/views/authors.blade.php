<!doctype html>
<html>
    <head>
        <title>Authors</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <ul>
            @foreach ($authors as $author)
                <table>
                    <tr>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->status }}</td>
                    </tr>
                </table>
            @endforeach
        </ul>
    </body>
</html>
