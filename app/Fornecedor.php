<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{

    protected $fillable =['nome','cnpj','telefone','endereco'];
    public $timestamps = false;

    /*public function transacao()
    {
        return $this->$this->hasMany(Transacao::class);
    }*/
}
