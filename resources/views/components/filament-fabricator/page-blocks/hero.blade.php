@props([
    'name' => 'Name',
    'introduction' => 'Your introduction',
])
<div class="px-4 py-4 md:py-8">
    <div class="max-w-7xl mx-auto">
        {{ $name }}

        {{ $introduction }}
    </div>
</div>
