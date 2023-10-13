<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
</head>
<body>
    <section class="mt-12 container mx-auto">
        <h1 class="text-dark mb-4 text-indigo-600 text-3xl font-bold sm:text-4xl md:text-[40px]"> He4rt Dev </h1>
    </section>

    <section class="mt-12 container mx-auto">
        <div id="helloWorld"></div>
    </section>

    <section class="mt-12 container mx-auto text-center">

        <livewire:todo-list />

    </section>

</body>
</html>
