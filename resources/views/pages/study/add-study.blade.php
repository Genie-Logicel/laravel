<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Etudes') }}
            </h2>
            <div>
                <form action="{{ route('study') }}" method="get">
                    @csrf
                    <button type="submit" class="btn font-bold">Retour</button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-4 overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('study.store') }}" class="flex justify-between gap-5 items-end">
                    @csrf
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Institution</span>
                        </label>
                        <input name="institution" type="text" placeholder="Ex : EMIT" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Niveau</span>
                        </label>
                        <input name="niveau" type="text" placeholder="Ex : Licence" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Domaine</span>
                        </label>
                        <input name="domaine" type="text" placeholder="Ex : Informatique" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success font-bold">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
