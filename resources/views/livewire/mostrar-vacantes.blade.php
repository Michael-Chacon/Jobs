<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @forelse ($vacantes as $vacante)
    <div class="p-6 text-gray-900 md:flex md:justify-between md:items-center">
        <div class="space-y-3">
            <a href="#" class="text-xl">
                {{ $vacante->titulo }}
            </a>
            <p class="text-sm  text-gray-600">{{ $vacante->empresa }}</p>
            <p>Ultimo día: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
        </div>
        <div class="flex flex-col md:flex-row items-stretch gap-3 text-center mt-5 md:mt-0">
            <a href="#" class="uppercase bg-slate-800 px-4 rounded-lg text-white text-center  ">
                Candidatos
            </a>
            <a href="{{ route('vacantes.edit', $vacante->id) }}" class="uppercase bg-blue-800 px-4 rounded-lg text-white text-center  ">
                Editar
            </a>
            <a href="#" class="uppercase bg-red-600 px-4 rounded-lg text-white text-center  ">
                Eliminar
            </a>
        </div>
    </div>
        <hr>
        @empty
        <p class="p-3 text-center text-sm text-gray-600"> No hay vacantes</p>
    @endforelse
</div>

<div class="mt-10">
    {{ $vacantes->links() }}
</div>
