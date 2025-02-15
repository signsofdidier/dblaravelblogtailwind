<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //de homepagina van mijn users
        $users = User::with('roles')->orderBy('id', 'desc')->paginate(10);
        //return view('backend.users.index', ['users' => $users, 'roles' => $roles]);
        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::pluck('name', 'id')->all();
        //in mijn backend heb ik users.create
        return view('backend.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'De naam is verplicht.',
            'email.required' => 'Het e-mailadres is verplicht.',
            'email.email' => 'Voer een geldig e-mailadres in.',
            'email.unique' => 'Dit e-mailadres is al in gebruik.',
            'password.required' => 'Het wachtwoord is verplicht.',
            'password.min' => 'Het wachtwoord moet minimaal :min tekens bevatten.',
            'role_id.required' => 'Selecteer minimaal 1 rol voor de gebruiker.',
            'role_id.*.exists' => '1 van de geselecteerde rollen bestaat niet.',
            'role_id.array' => 'De rollen moeten een lijst van ID\'s zijn.',
            'is_active.required' => 'Selecteer of de gebruiker actief is.',
            'photo_id.image' => 'De geüploade afbeelding moet een geldig afbeeldingsbestand zijn.',
        ];

        //wegschrijven van de nieuwe user
        $validatedDate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'is_active' => 'required|in:0,1',
            'role_id' => 'required|array|exists:roles,id',
            'password' => 'required|min:6',
            /*'photo_id' => 'nullable|image'*/
        ], $messages);

        //password hashen
        $validatedDate['password'] = bcrypt($validatedDate['password']);

        //gebruiker aanmaken
        $user = User::create([
            'name' => $validatedDate['name'],
            'email' => $validatedDate['email'],
            'is_active' => $validatedDate['is_active'],
            'password' => bcrypt($validatedDate['password']),
        ]);
        //array van rollen wegschrijven naar de role_user tussentabel
        //sync doet een detach en daarna een attach in 1 keer
        $user->roles()->sync($validatedDate['role_id']);

        //redirect naar users
        //with('message) zet in de session en maakt succes alert als de form gesubmit is
        return redirect()->route('users.index')->with('message', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //weergave van 1 enkele user
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //weergave van 1 enkele user met de waarden opgehaald uit de database
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //is het overschrijven van de gewijzigde waarden uit de function edit.
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete van een user
    }
}
