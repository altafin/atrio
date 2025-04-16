<div class="space-y-6">
    <div>
        <flux:input wire:model="form.name" :label="__('Name')" type="text"  autocomplete="form.name" placeholder="Name"/>
    </div>
    <flux:radio.group wire:model="form.type" label="Pessoa">
        <flux:radio value="F" label="Física" />
        <flux:radio value="J" label="Jurídica" />
    </flux:radio.group>
    <div class="flex items-center gap-4">
        <flux:button variant="primary" type="submit">{{ __('Submit') }}</flux:button>
    </div>
</div>
