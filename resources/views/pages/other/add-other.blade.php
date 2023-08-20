<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Ajout autre compétences') }}
            </h2>
            <div>
                <form action="{{ route('other') }}" method="get">
                    @csrf
                    <button type="submit" class="btn font-bold">Retour</button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-4 overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('other.store') }}" class="flex justify-between gap-5 items-end">
                    @csrf
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Nom</span>
                        </label>
                        <input name="nom" type="text" placeholder="Ex : Soudure" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Description</span>
                        </label>
                        <input name="description" type="text" placeholder="Avancée" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success font-bold">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
