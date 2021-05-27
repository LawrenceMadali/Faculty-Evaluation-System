<?php

namespace App\Models;

use App\Models\YearAndSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubjectCode extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'year_and_section_id'];

    public function yearAndSections()
    {
        return $this->belongsTo(YearAndSection::class);
    }
}
