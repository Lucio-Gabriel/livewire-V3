<div>
    <h1>Meu componente de properties</h1>

    <h2>O nome do sistema é: {{$nameSystem}} </h2>

    <br>


    Digite aqui: {{$msg}}
    <x-text-input wire:model.live="msg" />
    <x-primary-button>Enviar</x-primary-button>
    <x-primary-button wire:click="refresh">Limpar</x-primary-button>

    <br><br>

    <h2>O nome do administrador:: {{$name}} {{$lastName}} </h2>
</div>
