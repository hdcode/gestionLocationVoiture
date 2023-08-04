<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateurs extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $currentPage = PAGELIST;

    public $newUser = [];
    public $editUser = [];


    protected $rules = [
        'newUser.nom' => 'required',
        'newUser.prenom' => 'required',
        'newUser.email' => 'required|email|unique:users,email',
        'newUser.telephone1' => 'required|numeric|unique:users,telephone1',
        'newUser.pieceIdentite' => 'required',
        'newUser.sexe' => 'required',
        'newUser.numeroPieceIdentite' => 'required|unique:users,numeroPieceIdentite',
    ];

    // public function rules()
    // {
    //     return [
    //         'newUser.nom' => 'required',
    //         'newUser.prenom' => 'required',
    //         'newUser.email' => 'required|email|unique:users,email',
    //         'newUser.telephone1' => 'required|numeric|unique:users,telephone1',
    //         'newUser.pieceIdentite' => 'required',
    //         'newUser.sexe' => 'required',
    //         'newUser.numeroPieceIdentite' => 'required|unique:users,numeroPieceIdentite',
    //     ];
    // }

    // protected $messages = [
    //     'newUser.nom.required' => "Le nom de l'utilisateur est requis",
    //     // 'newUser.prenom.required' => 'Prenom requis',
    //     // 'newUser.email.required' => 'Email requis',
    //     // 'newUser.telephone1.required' => 'Numéro de telephone requis',
    //     // 'newUser.pieceIdentite.required' => "Pièce d'identite requis",
    //     // 'newUser.sexe.required' => 'Choisir le sexe',
    //     // 'newUser.numeroPieceIdentite.required' => "Numéro de pièce d'identite requis",
    // ];

    // protected $validationAttributes = [
    //     'newUser.telephone1' => 'numéro de téléphone 1',
    //     'newUser.prenom' => 'firstname',
    // ];
    public function render()
    {

        return view('livewire.utilisateurs.index', [
            "users" => User::latest()->paginate(5)
        ])
            ->extends("layouts.master")
            ->section("contenu");
    }

    public function goToAddUser()
    {
        $this->currentPage = PAGECREATEFORM;
    }

    public function goToEditUser($id){
        $this->currentPage = PAGEEDITFORM;
    }

    public function goToListUsers()
    {
        $this->currentPage = PAGELIST;
    }

    public function addUSer()
    {

        //vérification des info du formulaire
        $validationAttributes = $this->validate();

        $validationAttributes["newUser"]["password"] = "password";

        //ajouter un new user
        User::create($validationAttributes["newUser"]);

        $this->newUser = [];

        $this->dispatchBrowserEvent("showSuccessMessage", ["message" => "Utilisateur ajouté avec succès!"]);
    }

    public function confirmDelete($name, $id)
    {
        $this->dispatchBrowserEvent("showConfirmMessage", ["message" => [
            "text" => "Vous êtes sur le point de supprimer $name de la liste des utilisateurs. Voulez-vous continuer ?",
            "title" => "Êtes-vous sûr de continuer?",
            "type" => "warning",
            "data" => [
                "user_id" => $id
            ]
        ]]);
    }

    public function deleteUser($id)
    {
        User::destroy($id);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message" => "Utilisateur supprimé avec succès!"]);
    }

}