<?php

namespace App\Models;

use App\Models\Concerns\ResolvesMediaUrls;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use ResolvesMediaUrls;

    protected $fillable = ['member_group_id', 'name', 'role', 'avatar', 'order'];

    protected $appends = ['avatar_url'];

    public function getAvatarUrlAttribute(): ?string
    {
        if (! $this->avatar) {
            return null;
        }

        return $this->mediaUrl($this->avatar);
    }

    public function group()
    {
        return $this->belongsTo(MemberGroup::class, 'member_group_id');
    }
}
