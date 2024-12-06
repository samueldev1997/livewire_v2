<div>
    <h1> COMPONENTE LIVEWIRE COUNT </h1>
    
    <div>
        
        <x-text-input wire:model.live="name" />
        {{$name}}

        <x-primary-button wire:click="toogle('upper')"> UPPER </x-primary-button>

        <x-primary-button wire:click="toogle('lower')"> LOWER </x-primary-button>

        <x-primary-button wire:click="submit"> Create new user </x-primary-button>

        <x-primary-button wire:click="send"> Send to TODO </x-primary-button>
    </div>

    <div>
        @foreach ($users as $user)
            {{ $user->name }}
        @endforeach
    </div>
</div>
