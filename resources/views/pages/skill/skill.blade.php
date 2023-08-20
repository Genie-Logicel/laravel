<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Compétences') }}
            </h2>
            <div>
                <form action="{{ route('skill.create') }}" method="get">
                    @csrf
                    <button type="submit" class="btn btn-primary font-bold">Nouvelle competences</button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-4 overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    List
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
