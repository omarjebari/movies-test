<!DOCTYPE html>
<html lang="en" class="notranslate" translate="no">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google" content="notranslate" />
    <title>Movies</title>
    <link rel="shortcut icon" type="image/jpeg" href="/images/favicon-32x32.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body class="bg-white dark:bg-slate-800 bg-mobile-light dark:bg-mobile-dark lg:bg-desktop-light lg:dark:bg-desktop-dark bg-no-repeat bg-contain">
    <div id="app">
        <movie-list></movie-list>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
