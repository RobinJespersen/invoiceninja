<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //

    public function invitations()
    {
        $this->morphMany(Invitation::class, 'inviteable');
    }
}
