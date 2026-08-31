<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['member_group_id', 'name', 'role', 'avatar', 'order'];

    protected $appends = ['avatar_url'];

    public function getAvatarUrlAttribute(): ?string
    {
        if (!$this->avatar) {
            return null;
        }
        return str_starts_with($this->avatar, 'http')
            ? $this->avatar
            : url('storage/' . $this->avatar);
    }

    public function group()
    {
        return $this->belongsTo(MemberGroup::class, 'member_group_id');
    }
}
