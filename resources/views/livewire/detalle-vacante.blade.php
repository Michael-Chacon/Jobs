<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3 text-black text-center">
            {{ $vacante->titulo }}
        </h3>
        <div class="md:grid md:grid-cols-2 text-center">
            <p class="text-gray-500 text-sm my-3 uppercase">
                Empresa: 
                <span class="normal-case font-normal text-black">{{ $vacante->empresa }}</span>
            </p>
            <p class="text-gray-500 text-sm my-3 uppercase">
                Ultimo día para postularse: 
                <span class="normal-case font-normal text-black">{{ $vacante->ultimo_dia->toFormattedDateString() }}</span>
            </p>
            <p class="text-gray-500 text-sm my-3 uppercase">
                Categoria: 
                <span class="normal-case font-normal text-black">{{ $vacante->categoria->categoria }}</span>
            </p>
            <p class="text-gray-500 text-sm my-3 uppercase">
                Salario: 
                <span class="normal-case font-normal text-black">{{ $vacante->salario->salario }}</span>
            </p>
        </div>
    </div>
    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img src="{{ asset('storage/vacantes/'. $vacante->imagen) }}" alt="{{ 'Imagen vacante' . $vacante->titulo }}">
        </div>
        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5">
               Descripción:
            </h2>
            <p>
                {{ $vacante->descripcion }}
            </p>
        </div>
    </div>
    @guest
    <div class="mt-5 bg-gray-50 border border-dashed p-5 text-center">
        <p>¿Deseas aplicar a esta vacante? <a href="{{ route('register') }}" class="font-bold text-indigo-600"> Obten una cuenta y aplica a está vacante</a></p>
    </div>
    @endguest

    @cannot('create', App\Models\Vacante::class)
        <livewire:postular-vacante />
    @endcannot
</div>