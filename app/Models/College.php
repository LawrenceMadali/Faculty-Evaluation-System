<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class College extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [ 'name' ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name'])
        ->useLogName('College')
        ->setDescriptionForEvent(fn(string $eventName) => "The college has been {$eventName} by: ".Auth::user()->name);
    }
}
