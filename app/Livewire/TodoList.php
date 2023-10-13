<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Component;

class TodoList extends Component
{
    public array $todos;

    public $isReactEnabled = true;

    public function mount()
    {
        $this->todos[] = 'Ir ao banco';
        $this->todos[] = 'Ir à loja';
        $this->todos[] = 'Buscar ovos';
    }

    #[Locked]
    public function toggle()
    {
        $this->isReactEnabled = ! $this->isReactEnabled;
    }

    public function randomPerson()
    {
        return collect(['Daniel', 'Patricio'])->random();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
