<div>
    <ul>
        @foreach($todos as $todo)
        <li> {{ $todo }} </li>
        @endforeach
    </ul>

    <button
        wire:click="toggle"
        class="mt-8 bg-indigo-600 hover:bg-indigo-700 py-2 px-4 text-white rounded-lg"
    >
        Toggle Hello world
    </button>

    @if($isReactEnabled)
        React is enabled 🔥
        <div wire:ignore>
            {{-- entregar o @this ao React --}}
            <div id="helloWorld2"></div>
        </div>
    @else
        React is disabled 😓
    @endif
</div>
