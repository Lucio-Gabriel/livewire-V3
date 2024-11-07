<form wire:submit="submit" class="flex flex-col gap-4">
    <div>
        <x-text-input placeholder="User Name" wire:model.live="name" />
        @error('name')
            <div class="text-sm italic font-semibold text-red-400">
                {{$message}}
            </div>
        @enderror
    </div>

    <div>
        <x-text-input placeholder="Email" wire:model.blur="email" />
        @error('email')
            <div class="text-sm italic font-semibold text-red-400">
                {{$message}}
            </div>
        @enderror
     </div>

    <div>
        <x-text-input placeholder="password" wire:model="password" type="password" />
        @error('password')
        <div class="text-sm italic font-semibold text-red-400">
            {{$message}}
        </div>
        @enderror
    </div>

    <div>
    <x-text-input placeholder="Password Confirmation" wire:model="password_confirmation" type="password" />
        @error('password')
        <div class="text-sm italic font-semibold text-red-400">
            {{$message}}
        </div>
        @enderror
    </div>

    <div>
      <x-primary-button>
        Save User
      </x-primary-button>
    </div>
</form>
