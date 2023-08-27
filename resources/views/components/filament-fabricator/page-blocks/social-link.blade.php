@props([
    'link' => '',
    'handle' => 'your-handle',
    'social' => '',
])
<div class="px-4 py-4 md:py-8">
    <div class="max-w-7xl mx-auto">
        {{ $link }}
        {{ $handle }}
        {{ $social }}
    </div>
</div>
