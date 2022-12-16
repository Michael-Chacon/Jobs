<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold text-center mb-10">
                        Mis Notificaciones
                    </h1>
                    @forelse ($notificaciones as $notificacion)
                        <div class="p-5 border border-gray-200 flex lg:justify-between lg:items-center">
                            <div>
                                <p>Tienes un nuevo candidato en: 
                                    <span class="font-bold">
                                        {{ $notificacion->data['nombre_vacante'] }}
                                    </span>
                                </p>
                                <p>
                                    <small class="">
                                        {{ $notificacion->created_at->diffForHumans() }}
                                    </small>
                                </p>
                            </div>
                            <div class="mt-5 lg:mt-0">
                                <a href="#" class="bg-indigo-600 p-4 text-sm text-white rounded-lg">
                                    Ver candidato
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-600">No hay notificaciones nuevas</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>