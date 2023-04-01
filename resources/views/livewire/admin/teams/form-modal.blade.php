<!-- Create Modal -->
<div wire:ignore.self class="modal fade" id="addTeamsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Agregar Empresa</h5>
            <button type="button" wire:click="closeModal" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        {{-- cargando --}}
        <div wire:loading class="spinner-border text-warning mx-auto my-10" role="status">
            <span class="visually-hidden"></span>
        </div>
    
        {{-- cargado --}}
        <div wire:loading.remove>
            <form wire:submit.prevent="storeTeams">
                <div class="modal-body">
                    <fieldset class="t_fieldset">
                        <legend class="t_legend">Empresas</legend>
    
                        <div class="grid gap-2">
                            <div>
                                <label class="t_label" for="status"> Estado</label>
                                <input checked class="t_input-checkbox" type="checkbox" name="status" wire:model.defer="status"  id="status">
                                @error('status')<small class="text-sm text-red-600">{{$message}}</small>@enderror
                            </div>
                            <div>
                                <label class="t_label" for="">Nombre</label>
                                <input class="t_input" type="text" name="name"  wire:model.defer="name"  id="">
                                @error('name')<small class="text-sm text-red-600">{{$message}}</small>@enderror
                            </div>
                            <div>
                                <label class="t_label" for="">Telefono</label>
                                <input class="t_input" type="text" name="phone" wire:model.defer="phone" id="">
                                @error('phone')<small class="text-sm text-red-600">{{$message}}</small>@enderror
                            </div>
                            <div>
                                <label class="t_label" for="">Direccion</label>
                                <input class="t_input" type="text" name="adress" wire:model.defer="adress" id="">
                                @error('adress')<small class="text-sm text-red-600">{{$message}}</small>@enderror
                            </div>
                            <div>
                                <label class="t_label" for="">Email</label>
                                <input class="t_input" type="email" name="email" wire:model.defer="email" id="">
                                @error('email')<small class="text-sm text-red-600">{{$message}}</small>@enderror
                            </div>
                            <div>
                                <label class="t_label" for="">Ciudad</label>
                                <input class="t_input" type="text" name="city" wire:model.defer="city" id="">
                                @error('city')<small class="text-sm text-red-600">{{$message}}</small>@enderror
                            </div>
                            <div>
                                <label class="t_label" for="">Facebook</label>
                                <input class="t_input" type="text" wire:model.defer="social.facebook" id="">
                                @error("social.facebook")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                @error("social")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                            </div>
                            <div>
                                <label class="t_label" for="">Twitter</label>
                                <input class="t_input" type="text" wire:model.defer="social.twitter" id="">
                                @error("social.twitter")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                            </div>
                            <div>
                                <label class="t_label" for="">Instagram</label>
                                <input class="t_input" type="text" wire:model.defer="social.instagram" id="">
                                @error("social.instagram")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                @error("social")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                            </div>
                            <div>
                                <label class="t_label" for="">Youtube</label>
                                <input class="t_input" type="text" wire:model.defer="social.youtube" id="">
                                @error("social.youtube")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                            </div>
                            <div>
                                <label class="t_label" for="">Tiktok</label>
                                <input class="t_input" type="text" wire:model.defer="social.tiktok" id="">
                                @error("social.tiktok")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                @error("social")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="t_button w-auto" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="t_button2 w-auto">Guardar</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>
    
    <!-- Edit Modal -->
    <div wire:ignore.self class="modal fade" id="updateTeamsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Empresas</h5>
                <button type="button" wire:click="closeModal" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
            {{-- cargando --}}
            <div wire:loading class="spinner-border text-warning mx-auto my-10" role="status">
                <span class="visually-hidden"></span>
            </div>
        
            {{-- cargado --}}
            <div wire:loading.remove>
                <form wire:submit.prevent="updateTeams">
                    <div class="modal-body">
                        <fieldset class="t_fieldset">
                            <legend class="t_legend">Empresas</legend>
        
                                <div class="grid gap-2">
                                    <div>
                                        <label class="t_label" for="status">
                                        <input class="t_input-checkbox" type="checkbox" name="status"  wire:model.defer="status"  id="status"> Estado</label>
                                        @error('status')<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                    </div>
                                    <div>
                                        <label class="t_label" for="">Nombre</label>
                                        <input class="t_input" type="text" name="name"  wire:model.defer="name"  id="">
                                        @error('name')<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                    </div>
                                    <div>
                                        <label class="t_label" for="">Telefono</label>
                                        <input class="t_input" type="text" name="phone" wire:model.defer="phone" id="">
                                        @error('phone')<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                    </div>
                                    <div>
                                        <label class="t_label" for="">Direccion</label>
                                        <input class="t_input" type="text" name="adress" wire:model.defer="adress" id="">
                                        @error('adress')<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                    </div>
                                    <div>
                                        <label class="t_label" for="">Email</label>
                                        <input class="t_input" type="email" name="email" wire:model.defer="email" id="">
                                        @error('email')<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                    </div>
                                    <div>
                                        <label class="t_label" for="">Ciudad</label>
                                        <input class="t_input" type="text" name="city" wire:model.defer="city" id="">
                                        @error('city')<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                    </div>
                                    <div>
                                        <label class="t_label" for="">Facebook</label>
                                        <input class="t_input" type="text" wire:model.defer="social.facebook" id="">
                                        @error("social.facebook")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                        @error("social")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                    </div>
                                    <div>
                                        <label class="t_label" for="">Twitter</label>
                                        <input class="t_input" type="text" wire:model.defer="social.twitter" id="">
                                        @error("social.twitter")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                    </div>
                                    <div>
                                        <label class="t_label" for="">Instagram</label>
                                        <input class="t_input" type="text" wire:model.defer="social.instagram" id="">
                                        @error("social.instagram")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                        @error("social")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                    </div>
                                    <div>
                                        <label class="t_label" for="">Youtube</label>
                                        <input class="t_input" type="text" wire:model.defer="social.youtube" id="">
                                        @error("social.youtube")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                    </div>
                                    <div>
                                        <label class="t_label" for="">Tiktok</label>
                                        <input class="t_input" type="text" wire:model.defer="social.tiktok" id="">
                                        @error("social.tiktok")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                        @error("social")<small class="text-sm text-red-600">{{$message}}</small>@enderror
                                    </div>
                                </div>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="t_button w-auto" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="t_button2 w-auto">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    
    <!-- Delete Modal -->
    <div wire:ignore.self class="modal fade" id="deleteTeamsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Empresa</h5>
                <button type="button" wire:click="closeModal" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
    
            {{-- cargando --}}
            <div wire:loading class="spinner-border text-warning mx-auto my-10" role="status">
                <span class="visually-hidden"></span>
            </div>
    
            {{-- cargado --}}
            <div wire:loading.remove>
                <form wire:submit.prevent="destroyTeams">
                    <div class="modal-body">
                        <p>Esta seguro de eliminar el registro?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="t_button w-auto" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="t_button2 w-auto">Si. Eliminar</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>