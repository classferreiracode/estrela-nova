<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberGroup extends Model
{
    protected $fillable = ['title', 'order'];

    public function members()
    {
        return $this->hasMany(Member::class)->orderBy('order');
    }
}
