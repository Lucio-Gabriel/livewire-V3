<div>

    <form wire:submit="calculate">

    <x-text-input placeholder="primeiro numero" wire:model="num1"
            wire:keydown.y="naoQueroY"
    />

    <select wire:model="operator" class="text-slate-700">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <x-text-input placeholder="segundo numero" wire:model="num2" />
    <x-primary-button type="sumbit">
        <span  wire:loading.class="hidden" wire:target="calculate">Calcular</span>
        <span wire:loading wire:target="calculate"> Calculando .... </span>
    </x-primary-button>

    <br>

    <span wire:loading wire:target='calculate' class="text-blue-600 font-bold italic">Verificando ... Aguarde!</span>

    <br>
    Resultado: {{ $result }}
    </form>
</div>
