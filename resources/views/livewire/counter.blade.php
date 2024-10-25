<div>

    <br>
    Counter::{{ $counter }}
    <br>
    <x-text-input wire:model.live="counter" />
    <x-primary-button wire:click="refresh">Refresh</x-primary-button>

    <br><br>

</div>
