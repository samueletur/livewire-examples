<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire - Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @livewireStyles
    </head>
    <body class="antialiased bg-slate-50">
        <div class="grid grid-cols-12 gap-6 container mx-auto md:px-4 mt-6">
            <div class="col-span-12">Current: {{ $user->name }}</div>
            <div class="col-span-12">
                <livewire:prev-next
                    prevLabel="Prev User"
                    nextLabel="Next User"
                    :prevTitle="optional($prevUser)->name"
                    :nextTitle="optional($nextUser)->name"
                    :prevUrl="$prevUser ? route('users.show', $prevUser->id) : null"
                    :nextUrl="$nextUser ? route('users.show', $nextUser->id) : null"
                />
            </div>
        </div>

        @livewireScripts
    </body>
</html>



