<div class="row p-4 pt-5">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-user-plus fa-2x mr-2"></i>
                    Formulaire de création d'un nouvel utilisateur
                </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" wire:submit.prevent="addUSer()">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" wire:model="newUser.nom" class="form-control @error('newUser.nom') is-invalid @enderror"> 
                                @error("newUSer.nom")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" wire:model="newUser.prenom" class="form-control @error('newUser.prenom') is-invalid @enderror"> 
                                @error("newUSer.prenom")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sexe">Sexe</label>
                        <select wire:model="newUser.sexe" class="form-control @error('newUser.sexe') is-invalid @enderror">
                            <option value="">-----------</option>
                            <option value="H">Homme</option>
                            <option value="F">Femme</option>
                        
                            @error("newUSer.sexe")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" wire:model="newUser.email" class="form-control @error('newUser.email') is-invalid @enderror"> 
                        @error("newUSer.email")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="telephone1">Telephone1</label>
                                <input type="text" wire:model="newUser.telephone1" class="form-control @error('newUser.telephone1') is-invalid @enderror"> 
                                @error("newUSer.telephone1")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="telephone2">Telephone2</label>
                                <input type="text" wire:model="newUser.telephone2" class="form-control @error('newUser.telephone2')  is-invalid @enderror"> 
                                @error("newUSer.telephone2")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="piece">Pièce d'identité</label>
                        <select id="piece" wire:model="newUser.pieceIdentite" class="form-control @error('newUser.pieceIdentite') is-invalid @enderror">
                            <option value="">-----------</option>
                            <option value="CNI">CNI</option>
                            <option value="PASSPORT">PASSPORT</option>
                            <option value="PERMIS DE CONDUIRE">PERMIS DE CONDUIRE</option>
                            
                            @error("newUSer.pieceIdentite")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nums">Numéro de piède d'identité</label>
                        <input type="text" wire:model="newUser.numeroPieceIdentite" class="form-control @error('newUser.numeroPieceIdentite') is-invalid @enderror"> 
                        @error("newUSer.numeroPieceIdentite")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" placeholder="Password" disabled>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="button" wire:click="goToListUsers()" class="btn btn-danger">Retourner à la liste des
                        utilisateurs</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    window.addEventListener('showSuccessMessage', event=>{
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            toast: true,
            title: event.detail.message || 'Opération effectuée avec succès',
            showConfirmButton: false,
            timer: 2000
        })
    })
</script>