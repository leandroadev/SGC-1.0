<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    protected $fillable = ['cpf', 'name', 'email', 'telephone', 'birth', 'address'];
}
