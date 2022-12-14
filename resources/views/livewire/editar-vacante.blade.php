<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='editarVacante' enctype="multipart/form-data">
    <div>
        <x-input-label for="titulo" :value="__('Titulo vacante:')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')" placeholder="Titulo vacante" />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario de la vacante:')" />
        <select wire:model="salario" id="salario" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            <opton>-- selecciones -- </opton>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach)
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria:')" />
        <select wire:model="categoria" id="categoria" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            <opton>-- selecciones -- </opton>
            @foreach ($categorias as $id => $categoria)
                <option value="{{ $id }}">{{ $categoria }}</option>
            @endforeach)
        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Nombre de la empresa:')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')" placeholder="Empresa: ejm. Netflix, Facebook, Laravel" />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para postularse:')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia" :value="old('ultimo_dia')"/>
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción del trabajo:')" />
        <textarea id="descripcion" wire:model="descripcion" cols="30" rows="10" placeholder="Descripción general del puesto, experiencia"
        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('descripcion') }}</textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen:')" />
        <x-text-input id="imagen" class="block mt-1 w-full" type="file" accept="image/*" wire:model="imagen_nueva"/>
        <x-input-label for="imagen" :value="__('Imagen actual')" class="mt-5"/>
        <div class="my-5 w-80 flex items-center">
            <img src="{{ asset('storage/vacantes/'. $imagen) }}" alt="{{ 'Imagen vacante' . $titulo }}">
        </div>
        <x-input-label for="imagen" :value="__('Imagen nueva:')" />
        <div class="my-5 w-80 flex items-center">
            @if ($imagen_nueva)
                <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="">
            @endif
        </div>
        <x-input-error :messages="$errors->get('imagen_nueva')" class="mt-2" />
    </div>

    <x-primary-button class="w-full justify-center">
        {{ __('Guardar cambios') }}
    </x-primary-button>
</form>

