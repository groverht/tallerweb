@extends('layouts.plantilla')

@section('titulo','editar curso')
@section('contenido')
  
@endsection

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('En esta página podrás editar un curso') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                <form action="{{route('cursos.update',$curso)}}" method="POST">
                  @csrf
                  @method('put')
                    <div>
                      <x-input-label for="nombre" :value="__('nombre')" />
                      <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre',$curso->nombre)" autofocus autocomplete="nombre" />
                      <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                  </div>
                    <div>
                      <x-input-label for="descripcion" :value="__('descripcion')" />
                      <x-textarea id="descripcion" class="block mt-1 w-full" name="descripcion" autofocus autocomplete="descripcion">{{old('descripcion',$curso->descripcion)}}</x-textarea>
                      <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                    </div>
                    <div>
                      <x-input-label for="categoria" :value="__('categoria')" />
                      <x-text-input id="categoria" class="block mt-1 w-full" type="text" name="categoria" :value="old('categoria',$curso->categoria)" autofocus autocomplete="categoria" />
                      <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end mt-4">   
                      <x-primary-button class="ms-4">
                          {{ __('Actualizar') }}
                      </x-primary-button>
                  </div>
                </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>