<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receitas extends Model
{
    use HasFactory;
    protected $table = 'receitas';
    protected $primary_key = 'receita_id';

    protected $fillable = ['nome', 'descricao', 'valor', 'data'];

    protected $casts = [
        'nome' => 'string',
        'descricao' => 'string',
        'valor' => 'double'
    ];
}
