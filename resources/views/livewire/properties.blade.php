<div>
    <h1>Meu componente de properties</h1>

    <h2>O nome do sistema é: {{$nameSystem}} </h2>

    <br>


    Digite aqui: {{$name}}
    <x-text-input wire:model.live="name" />
    <x-primary-button>Enviar</x-primary-button>
    <x-primary-button wire:click="refresh">Limpar</x-primary-button>

    <br><br>

    <div x-data="">
        <span x-text="$wire.name"></span>
        <x-secondary-button @click="$wire.set('name', 'Mensagem Suporte') ">Click Aqui</x-secondary-button>
    </div>

    <br><br>
    <h2>O nome do administrador:: {{$name}} {{$lastName}} </h2>

</div>
