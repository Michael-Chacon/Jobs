<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacantes as $vacante)
        <div class="p-6 text-gray-900 md:flex md:justify-between md:items-center">
            <div class="space-y-3">
                <a href="{{ route('vacantes.show', $vacante) }}" class="text-xl">
                    {{ $vacante->titulo }}
                </a>
                <p class="text-sm  text-gray-600">{{ $vacante->empresa }}</p>
                <p>Ultimo día: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
            </div>
            <div class="flex flex-col md:flex-row items-stretch gap-3 text-center mt-5 md:mt-0">
                <a href="{{ route('candidatos.index', $vacante) }}" class="uppercase bg-slate-800 px-4 rounded-lg text-white text-center  ">
                    {{ $vacante->candidatos->count() }}
                    @choice('Candidato|Candidatos', $vacante->candidatos->count())
                </a >
                <a href="{{ route('vacantes.edit', $vacante->id) }}" class="uppercase bg-blue-800 px-4 rounded-lg text-white text-center  ">
                    Editar
                </a>
                <button wire:click="$emit('mostrarAlerta', {{ $vacante->id }})" class="uppercase bg-red-600 px-4 rounded-lg text-white text-center  ">
                    Eliminar
                </button>
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
</div>

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', vacanteId => {
            Swal.fire({
                title: '¿Eliminar vacante?',
                text: "Una vacante eliminada no se puede recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
                    // Eliminar vacante desde el componente
                    Livewire.emit('eliminarVacante', vacanteId),
                    Swal.fire(
                    'Eliminada!',
                    'La vacante a sido eliminada.',
                    'success'
                    )
            }
            })
        })
    </script>
@endpush