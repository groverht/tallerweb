<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('En esta página se mostrará todos los cursos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-secondary-button class="mt-4 mb-4"><a href="{{route('cursos.create')}}">Crear nuevo curso</a></x-secondary-button>
                    <ul>
                        @foreach ($cursos as $curso)
                        <li><a href="{{route('cursos.show',$curso)}}">{{$curso->nombre}}</a></li>
                        @endforeach
                    </ul>
                    {{$cursos->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>