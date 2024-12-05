<div>
    <h1> COMPONENTE LIVEWIRE COUNT </h1>
    
    <div>
        
        <x-text-input wire:model.live="name" />
        {{$name}}

        <x-primary-button wire:click="toogle" />
    </div>
</div>
