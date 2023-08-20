<div class="space-y-5">
    {{-- base info --}}
    <div class="space-y-3">
        <div>
            <h1 class="text-3xl font-bold">Information de base</h1>
        </div>
        <div class="flex gap-5">
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Nom</span>
                </label>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Prénoms</span>
                </label>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Adresse</span>
                </label>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
            </div>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-10">
        <div class="space-y-3">
            <div class="flex gap-2 justify-between items-center">
                <h1 class="text-3xl font-bold">Compétences</h1>
                <div class="col-md-2">
                    <button class="btn text-white btn-info btn-sm btn-circle" wire:click.prevent="add({{$i_skill}})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="space-y-5">
                @foreach($inputs_skill as $key => $value)
                <div class="flex justify-between items-center">
                    <select wire:model='id_skills.{{ $key }}' class="select select-bordered w-full max-w-xs">
                        <option value="" selected>Liste des compétences</option>
                        @forelse ($skills as $item)
                        <option value="{{ $item->id }}">{{ $item->nom }}</option>
                        @empty
                        <option>Vide</option>
                        @endforelse
                    </select>
                    <div>
                        <button class="btn btn-error btn-circle btn-sm" wire:click.prevent="remove({{$key}})">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="space-y-3">
            <div class="flex gap-2 justify-between items-center">
                <h1 class="text-3xl font-bold">Experiences</h1>
                <div class="col-md-2">
                    <button class="btn text-white btn-info btn-sm btn-circle" wire:click.prevent="add_exp({{$i_exp}})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="space-y-5">
                @foreach($inputs_exp as $key => $value)
                <div class="flex justify-between items-center">
                    <select wire:model='id_exp.{{ $key }}' class="select select-bordered w-full max-w-xs">
                        <option disabled selected>Liste des experiences</option>
                        @forelse ($experiences as $item)
                        <option value="{{ $item->id }}">{{ $item->société }} | {{ $item->poste }} | {{ $item->annee }}</option>
                        @empty
                        <option>Vide</option>
                        @endforelse
                    </select>
                    <div>
                        <button class="btn btn-error btn-circle btn-sm" wire:click.prevent="remove_exp({{$key}})">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="space-y-3">
            <div class="flex gap-2 justify-between items-center">
                <h1 class="text-3xl font-bold">Etudes</h1>
                <div class="col-md-2">
                    <button class="btn text-white btn-info btn-sm btn-circle" wire:click.prevent="add_study({{$i_study}})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="space-y-5">
                @foreach($inputs_study as $key => $value)
                <div class="flex justify-between items-center">
                    <select wire:model='id_study' class="select select-bordered w-full max-w-xs">
                        <option disabled selected>Liste des études</option>
                        @forelse ($studies as $item)
                        <option value="{{ $item->id }}">{{ $item->institution }} | {{ $item->niveau }} | {{ $item->domaine }}</option>
                        @empty
                        <option>Vide</option>
                        @endforelse
                    </select>
                    <div>
                        <button class="btn btn-error btn-circle btn-sm" wire:click.prevent="remove_study({{$key}})">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="grid grid-cols-3">
        <div class="space-y-3">
            <div>
                <h1 class="text-3xl font-bold">Formations</h1>
            </div>
            <div>
                <select class="select select-bordered w-full max-w-xs">
                    <option disabled selected>Liste des formations</option>
                    @forelse ($formations as $item)
                    <option value="{{ $item->id }}">{{ $item->titre }} | {{ $item->institution }} | {{ $item->annee }}</option>
                    @empty
                    <option>Vide</option>
                    @endforelse
                </select>
            </div>
        </div>
        <div class="space-y-3">
            <div>
                <h1 class="text-3xl font-bold">Liens</h1>
            </div>
            <div>
                <select class="select select-bordered w-full max-w-xs">
                    <option disabled selected>Liste des liens</option>
                    @forelse ($links as $item)
                    <option value="{{ $item->id }}">{{ $item->nom }} | {{ $item->relation }}</option>
                    @empty
                    <option>Vide</option>
                    @endforelse
                </select>
            </div>
        </div>
        <div class="space-y-3">
            <div>
                <h1 class="text-3xl font-bold">Autres</h1>
            </div>
            <div>
                <select class="select select-bordered w-full max-w-xs">
                    <option disabled selected>Liste des autres</option>
                    @forelse ($others as $item)
                    <option value="{{ $item->id }}">{{ $item->nom }}</option>
                    @empty
                    <option>Vide</option>
                    @endforelse
                </select>
            </div>
        </div>
    </div>

    <div class="grid">
        <div class="space-y-3">
            <div>
                <h1 class="text-3xl font-bold">Role</h1>
            </div>
            <div>
                <select class="select select-bordered w-full max-w-xs">
                    <option disabled selected>Liste des roles</option>
                    @forelse ($roles as $item)
                    <option value="{{ $item->id }}">{{ $item->nom }}</option>
                    @empty
                    <option>Vide</option>
                    @endforelse
                </select>
            </div>
        </div>
    </div>
    <div>
        <button wire:click='store' class="btn btn-success">Enregistrer</button>
    </div>
</div>
