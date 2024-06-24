<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
</head>

<body>
    <nav>
        <a href="/" @class(['current' => request()->is('/')])>Todo</a>
        <a href="/counter" @class(['current' => request()->is('counter')])>Counter</a>
        <a href="/posts" @class(['current' => request()->is('posts')])>Posts</a>
        <a href="/create-posts" @class(['current' => request()->is('create-posts')])>Create Posts</a>
    </nav>
    {{ $slot }}
    @livewireScripts
</body>

</html>
