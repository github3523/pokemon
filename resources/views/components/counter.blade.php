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

<div class="flex flex-col items-center gap-5">
    <img src="{{ asset('images/pikachu.jpeg') }}" alt="Pikachu" class="size-32 animate-float rounded-full border-4 border-yellow-400 object-cover shadow-lg">

    <div class="flex items-center gap-4">
        <button wire:click="decrement" class="size-12 rounded-full border-4 border-slate-900 bg-blue-500 text-2xl font-bold text-white shadow-[3px_3px_0_0_#0f172a] transition hover:-translate-y-0.5 hover:bg-blue-400 active:translate-y-0.5 active:shadow-none" aria-label="Decrement">-</button>
        <span class="min-w-16 rounded-2xl bg-yellow-300 px-3 py-1 text-center text-3xl font-bold text-slate-900">{{ $count }}</span>
        <button wire:click="increment" class="size-12 rounded-full border-4 border-slate-900 bg-red-500 text-2xl font-bold text-white shadow-[3px_3px_0_0_#0f172a] transition hover:-translate-y-0.5 hover:bg-red-400 active:translate-y-0.5 active:shadow-none" aria-label="Increment">+</button>
    </div>

    @if ($count >= 10)
        <p class="animate-bounce rounded-full bg-green-400 px-4 py-2 text-center font-bold text-slate-900">🎉 Congratulations! You now have 10 pokemon!</p>
    @endif
</div>
