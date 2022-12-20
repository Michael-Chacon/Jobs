<div>
    <livewire:filtrar-vacante/>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-700 mb-12">
                Nueva vacante 
            </h3>
            <div class="bg-white shadow-sm rounded-lg p-6">
                @forelse ($vacantes as $vacante)
                    <div class="md:flex md:justify-between md:items-center py-5">
                        <div class="md:flex-1">
                            <a href="{{ route('vacantes.show', $vacante->id) }}" class="text-3xl font-extrabold text-gray-600">
                                {{ $vacante->titulo }}
                            </a>
                            <p class="text-base text-gray-600 mb-1">{{ $vacante->empresa }}</p>
                            <p class="text-base text-gray-600 text-sm">
                                Último día para postularse:
                                <span class="font-normal text-black">
                                    {{ $vacante->ultimo_dia->toFormattedDateString() }}
                                </span>
                            </p>
                        </div>
                        <div class="mt-5 md:mt-0">
                        <a href="{{ route('vacantes.show', $vacante->id) }}" class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3">
                            Ver vacante
                        </a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-600">No hay vacantes</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
