@props([
    'link' => '',
    'handle' => 'your-handle',
    'social' => '',
])

<div class="mx-auto mt-16 max-w-lg items-center gap-y-6 sm:mt-20 sm:gap-y-0">
    <a href="{{ $link }}" target="__blank">
        <div class="rounded-3xl p-8 ring-1 ring-gray-900/10 sm:p-10 relative bg-white shadow-2xl">
            <h3 id="tier-personal" class="text-base font-semibold leading-7 text-indigo-600 uppercase">
                {{ $social }}
            </h3>
            <p class="mt-4 flex justify-center items-baseline gap-x-2">
                <span class="text-2xl font-bold tracking-tight text-gray-900">{{ $handle }}</span>
            </p>
        </div>
    </a>
</div>
