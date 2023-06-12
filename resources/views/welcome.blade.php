<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <title>Livewire</title>
    @livewireStyles
</head>
<body>
    {{-- @livewire('counter') --}}
    @livewire('comments')
    @livewireScripts
</body>
</html>