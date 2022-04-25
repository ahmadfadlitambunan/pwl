<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Belajar Laravel</title>
        <link rel="stylesheet" href="blog.css">
    </head>
    <body>
        <article>
            {!! $article !!}
        </article>
        <a href="/">Kembali</a>
    </body>
</html>
