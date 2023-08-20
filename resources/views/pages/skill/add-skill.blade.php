<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Compétences') }}
            </h2>
            <div>
                <form action="{{ route('skill') }}" method="get">
                    @csrf
                    <button type="submit" class="btn font-bold">Retour</button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-4 overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('skill.store') }}" class="space-y-5">
                    @csrf
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Nom</span>
                        </label>
                        <input name="skill_name" type="text" placeholder="Nom" class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Description</span>
                        </label>
                        <textarea name="skill_description" class="textarea textarea-bordered h-24" placeholder="Description"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success font-bold">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
