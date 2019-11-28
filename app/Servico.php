<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //
    protected $fillable =['nome','descricao','preco'];
    public $timestamps=false;

    /*public function Transacao()
    {
        return $this->$this->hasMany(Transacao::class);
    }*/
}
