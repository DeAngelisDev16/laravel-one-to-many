<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    public function isImageAUrl()
    {
        return filter_var($this->image, FILTER_VALIDATE_URL);
    }
}
