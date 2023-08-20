<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Liens Personnels') }}
            </h2>
            <div>
                <form action="{{ route('link.create') }}" method="get">
                    @csrf
                    <button type="submit" class="btn btn-primary font-bold">Nouvelle lien</button>
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
                                    <th>Type</th>
                                    <th>Liens</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row 1 -->
                                @forelse ($links as $index => $item)
                                <tr>
                                    <th>{{ $index + 1 }}</th>
                                    <td>{{ $item->nom }}</td>
                                    <td>{{ $item->relation }}</td>
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
