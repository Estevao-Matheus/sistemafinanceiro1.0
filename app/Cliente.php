<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable =['nome','endereco','telefone'];
    public $timestamps=false;

    /*public function Transacao()
    {
        return $this->$this->hasMany(Transacao::class);
    }*/
}
