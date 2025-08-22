<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Excercise</title> 
    </head>
    <body>
        <h1>{{ $title }}
            <ul>
                @foreach ( $users as $user )
                <li>{{ $user }}</li>
                @endforeach
            </ul>
        </h1>
    </body>
    </html>