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

    <div class="grid grid-cols-3">
        <div class="space-y-3">
            <div>
                <h1 class="text-3xl font-bold">Compétences</h1>
            </div>
            <div>
                <select class="select select-bordered w-full max-w-xs">
                    <option disabled selected>Liste des compétences</option>
                    @forelse ($skills as $item)
                    <option value="{{ $item->id }}">{{ $item->nom }}</option>
                    @empty
                    <option>Vide</option>
                    @endforelse
                </select>
            </div>
        </div>
        <div class="space-y-3">
            <div>
                <h1 class="text-3xl font-bold">Experiences</h1>
            </div>
            <div>
                <select class="select select-bordered w-full max-w-xs">
                    <option disabled selected>Liste des experiences</option>
                    @forelse ($experiences as $item)
                    <option value="{{ $item->id }}">{{ $item->société }} | {{ $item->poste }} | {{ $item->annee }}</option>
                    @empty
                    <option>Vide</option>
                    @endforelse
                </select>
            </div>
        </div>
        <div class="space-y-3">
            <div>
                <h1 class="text-3xl font-bold">Etudes</h1>
            </div>
            <div>
                <select class="select select-bordered w-full max-w-xs">
                    <option disabled selected>Liste des études</option>
                    @forelse ($studies as $item)
                    <option value="{{ $item->id }}">{{ $item->institution }} | {{ $item->niveau }} | {{ $item->domaine }}</option>
                    @empty
                    <option>Vide</option>
                    @endforelse
                </select>
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
        <button class="btn btn-success">Enregistrer</button>
    </div>
</div>
