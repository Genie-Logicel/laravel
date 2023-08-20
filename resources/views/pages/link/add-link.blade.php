<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Formations') }}
            </h2>
            <div>
                <form action="{{ route('link') }}" method="get">
                    @csrf
                    <button type="submit" class="btn font-bold">Retour</button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-4 overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('link.store') }}" class="flex justify-between gap-5 items-end">
                    @csrf
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Type</span>
                        </label>
                        <input name="nom" type="text" placeholder="Ex : facebook" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Lien</span>
                        </label>
                        <input name="relation" type="text" placeholder="Ex : facebook/id?1050540" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success font-bold">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
