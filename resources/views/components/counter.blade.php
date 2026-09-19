<?php

use Livewire\Component;

new class extends Component
{
    public int $count = 0;

    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count--;
    }
};
?>

<div class="flex items-center gap-4">
    <button wire:click="decrement" class="px-3 py-1 border rounded">-</button>
    <span class="text-xl font-bold">{{ $count }}</span>
    <button wire:click="increment" class="px-3 py-1 border rounded">+</button>

<img src="{{ asset('images/pikachu.jpeg') }}" alt="Pikachu">

    @if ($count > 10)
        <p>Congratulations! you now have 10 pokemon</p>
    @endif
</div>
