<div>
    <label for="password" class="">Password</label>
    <div class="relative">
        <input wire:model="password" class="h-8 w-full mb-3 rounded-md border border-slate-300  pl-2 bg-transparent outline-blue-600 shadow-sm" id="password" type="{{ $showPassword ? 'text' : 'password' }}">
        <button wire:click="togglePasswordVisibility" type="button" class="absolute top-2 right-2">
            {{ $showPassword ? 'Hide' : 'Show' }}
        </button>
    </div>
</div>
