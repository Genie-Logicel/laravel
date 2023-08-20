<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Experiences') }}
            </h2>
            <div>
                <form action="{{ route('experience.create') }}" method="get">
                    @csrf
                    <button type="submit" class="btn btn-primary font-bold">Nouvelle experience</button>
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
                                    <th>Société | Institution</th>
                                    <th>Poste</th>
                                    <th>Année</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row 1 -->
                                @forelse ($expericences as $index => $item)
                                <tr>
                                    <th>{{ $index + 1 }}</th>
                                    <td>{{ $item->société }}</td>
                                    <td>{{ $item->poste }}</td>
                                    <td>{{ $item->annee }}</td>
                                    <td></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">Vide</td>
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
