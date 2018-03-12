<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Megusta extends Model
{

    use \Conner\Likeable\Likeable;

    protected $fillable = ['megusta'];

    public function chusqers()
    {
        return $this->belongsTo(Chusqer::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }


}
