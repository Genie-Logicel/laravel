<div class="space-y-5">
    {{-- base info --}}
    <div class="space-y-3">
        <div>
            <h1 class="text-3xl font-bold">Information de base</h1>
        </div>
        <div class="grid grid-cols-3 gap-5">
            <div>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span></p>
                            <p class="text-xs text-gray-500">PNG, JPG (MAX. 800x400px)</p>
                        </div>
                        <input wire:model='image' id="dropzone-file" type="file" class="file-input w-full max-w-xs" />
                    </label>
                </div>
            </div>
            <div class="flex justify-center items-center">
                @if ($image)
                <img src="{{ $image->temporaryUrl() }}">
                @endif
            </div>
        </div>
        <div class="flex gap-5 flex-wrap">
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Nom</span>
                </label>
                <input wire:model='nom' type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Prénoms</span>
                </label>
                <input wire:model='prenom' type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Adresse</span>
                </label>
                <input wire:model='adresse' type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input wire:model='email' type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
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
                        <option  value=""  selected>Liste des experiences</option>
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
                    <select wire:model='id_study.{{ $key }}' class="select select-bordered w-full max-w-xs">
                        <option  value=""  selected>Liste des études</option>
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

    <div class="grid grid-cols-3 gap-10">
        <div class="space-y-3">
            <div class="flex gap-2 justify-between items-center">
                <h1 class="text-3xl font-bold">Formations</h1>
                <div class="col-md-2">
                    <button class="btn text-white btn-info btn-sm btn-circle" wire:click.prevent="add_form({{$i_form}})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="space-y-5">
                @foreach($inputs_form as $key => $value)
                <div class="flex justify-between items-center">
                    <select wire:model='id_form.{{ $key }}' class="select select-bordered w-full max-w-xs">
                        <option  value=""  selected>Liste des formations</option>
                        @forelse ($formations as $item)
                        <option value="{{ $item->id }}">{{ $item->titre }} | {{ $item->institution }} | {{ $item->annee }}</option>
                        @empty
                        <option>Vide</option>
                        @endforelse
                    </select>
                    <div>
                        <button class="btn btn-error btn-circle btn-sm" wire:click.prevent="remove_form({{$key}})">
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
                <h1 class="text-3xl font-bold">Liens</h1>
                <div class="col-md-2">
                    <button class="btn text-white btn-info btn-sm btn-circle" wire:click.prevent="add_link({{$i_link}})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="space-y-5">
                @foreach($inputs_link as $key => $value)
                <div class="flex justify-between items-center">
                    <select wire:model='id_link.{{ $key }}' class="select select-bordered w-full max-w-xs">
                        <option  value=""  selected>Liste des liens</option>
                        @forelse ($links as $item)
                        <option value="{{ $item->id }}">{{ $item->nom }} | {{ $item->relation }}</option>
                        @empty
                        <option>Vide</option>
                        @endforelse
                    </select>
                    <div>
                        <button class="btn btn-error btn-circle btn-sm" wire:click.prevent="remove_link({{$key}})">
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
                <h1 class="text-3xl font-bold">Autres</h1>
                <div class="col-md-2">
                    <button class="btn text-white btn-info btn-sm btn-circle" wire:click.prevent="add_other({{$i_other}})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="space-y-5">
                @foreach($inputs_other as $key => $value)
                <div class="flex justify-between items-center">
                    <select wire:model='id_other.{{ $key }}' class="select select-bordered w-full max-w-xs">
                        <option  value=""  selected>Liste des autres</option>
                        @forelse ($others as $item)
                        <option value="{{ $item->id }}">{{ $item->nom }}</option>
                        @empty
                        <option>Vide</option>
                        @endforelse
                    </select>
                    <div>
                        <button class="btn btn-error btn-circle btn-sm" wire:click.prevent="remove_other({{$key}})">
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

    <div class="grid">
        <div class="space-y-3">
            <div>
                <h1 class="text-3xl font-bold">Role</h1>
            </div>
            <div>
                <select wire:model='role_id' class="select select-bordered w-full max-w-xs">
                    <option value="" selected>Liste des roles</option>
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
