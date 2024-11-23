<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bienvenido al curso: ') }} {{ $curso->nombre }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
    <x-secondary-button class="mt-4 mb-4"><a href="{{route('cursos.index')}}">Volver a cursos</a></x-secondary-button><br>
    <x-secondary-button class="mt-4 mb-4"><a href="{{route('cursos.edit',$curso)}}">Editar curso</a></x-secondary-button>
                    <p><strong>Categoria: </strong>{{ $curso->categoria }}</p>
                    <p>{{ $curso->descripcion }}</p>
                    <br>
                    <form action="{{route('cursos.destroy',$curso)}}" method="POST">
                        @csrf
                        @method('delete')
                        <x-danger-button>Eliminar Curso</x-danger-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>