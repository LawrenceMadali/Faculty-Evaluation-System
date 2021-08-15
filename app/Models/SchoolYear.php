<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;

class SchoolYear extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = ['name',];

    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;
    protected static $logAttributes = ['name'];
    protected static $logName = 'Manage School Year';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName} by: ".Auth::user()->name;
    }

    public function spe()
    {
        return $this->hasMany(Spe::class);
    }

    public function sse()
    {
        return $this->hasMany(Spe::class);
    }

}
