<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Autres Compétences') }}
            </h2>
            <div>
                <form action="{{ route('other.create') }}" method="get">
                    @csrf
                    <button type="submit" class="btn btn-primary font-bold">Nouvelle</button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-4 overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <div class="overflow-x-auto">
                        <table class="table">
                            <!-- head -->
                            <thead>
                                <tr class="bg-base-200">
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row 1 -->
                                @forelse ($others as $index => $item)
                                <tr>
                                    <th>{{ $index + 1 }}</th>
                                    <td>{{ $item->nom }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center">Vide</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
