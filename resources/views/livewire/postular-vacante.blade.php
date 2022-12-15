<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="font-bold text-2xl text-center my-5">
        Postularme a la vacante
    </h3>
    @if (session()->has('mensaje'))
        <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3">
            {{ session('mensaje') }}
        </div>
    @else
        <form wire:submit.prevent='postularme' class="w-96 mt-5">
            <div class="mb-4">
                <x-input-label  for="cv" :value="__('Curriculum o hoja de vida')" />
                <x-text-input id="cv" type="file" wire:model="cv" accept=".pdf" class="block mt-1 w-full" />
            </div>
            <x-input-error :messages="$errors->get('cv')" class="mt-2" />
            <x-primary-button class="w-full justify-center my-5">
                {{ __('Postularme') }}
            </x-primary-button>
        </form>
    @endif
</div>
