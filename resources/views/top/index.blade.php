<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Simple Modal</title>
        <link rel="stylesheet" href="/css/build/top/index.css">
    </head>
    <body>
        <div class="justifiy-content-center" id="app" >
            <modal></modal>
        </div>

        {{-- <script src="https://unpkg.com/vue@3"></script> --}}
        <script src="/js/build/top/index.js"></script>
    </body>
</html>
