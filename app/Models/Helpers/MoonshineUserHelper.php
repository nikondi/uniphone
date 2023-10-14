<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Models\MoonshineUser;

class MoonshineUserHelper extends Model
{
    use HasFactory;

    static public function userRole() {
        return MoonshineUser::query()->where('id', auth()->id())->first()->moonshine_user_role_id;
    }
}
