<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "users";

    protected $fillable = [
        'ci',
        'name',
        'lastname',
        'f_n',
        'genero',
        'id_rol',
        'id_carrera',
        'id_materia',
        'username',
        'email',
        'password'
    ];

    public $timestamps = false;

    // public function getAllUsers()
    // {
    //     return $this->all();
    // }

    // public function createUser($request)
    // {
    //     return $this->create([

    //         'name'=> $request->name,
    //         'lastname'=> $request->lastname,
    //         'id_rol'=> $request->id_rol,
    //         'id_carrera'=> $request->id_carrera,
    //         'id_materia'=> $request->id_materia,
    //         'user'=> $request->user,
    //         'email'=> $request->email,
    //         'password'=> $request->password,
    //     ]);
    // }

    // public function getUser($id)
    // {
    //     return $this->find($id);
    // }

    // public function updateUser($request, $id)
    // {
    //     $this->where('id', $id)->update($request->all());
    //     return $this->find($id);
    // }

    // public function deleteUser($id)
    // {
    //     return $this->where('id', $id)->update(['status' => false]);
    // }
}
