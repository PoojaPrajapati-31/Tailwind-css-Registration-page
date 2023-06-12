<div>
    <label for="confirmPassword">Confirm Password</label>
    <div class="relative">
        <input wire:model="confirmPassword"  class="h-8 w-full mb-3 rounded-md border border-slate-300  pl-2 bg-transparent outline-blue-600 shadow-sm" id="confirmPassword" type="{{ $showConfirmPassword ? 'text' : 'password' }}">
        <button wire:click="toggleConfirmPasswordVisibility" type="button" class="absolute top-2 right-2">
            {{ $showConfirmPassword ? 'Hide' : 'Show' }}
        </button>
    </div>
</div>

@error('confirmPassword')
    <div class="text-red-500 mt-1">{{ $message }}</div>
@enderror


