<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Designation;


class User extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = true;

    public function department()
{
    return $this->belongsTo(Department::class, 'departmenet');
}

public function designation()
{
    return $this->belongsTo(Designation::class ,'designation');
}

}
