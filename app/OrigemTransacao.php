<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrigemTransacao extends Model
{
    //
    protected $fillable =['nome','descricao'];
    public $timestamps=false;

    /*public function Transacao()
    {
        return $this->$this->hasMany(Transacao::class);
    }*/
}
