<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = "tb_jabatan";

    protected $guarded = [''];

    public $timestamps = false;

    public function getPemerintahan()
    {
        return $this->belongsTo(StrukturPemerintahan::class, 'id', 'jabatan_id');
    }
}
