<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Protype extends Model
{
    protected $fillable = ['caption', 'type', 'description', 'image', 'sequence', 'project_id'];

    /**
     * Get the project that owns the Protype.
     */
    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
    public function paymentplans()
{
    return $this->hasMany(Paymentplan::class, 'protype_id');
}
    public function getTypeDescriptionAttribute()
    {
        return $this->type === '1' ? 'Commercial' : 
        ($this->type === '2' ? 'Residential' : 
        ($this->type === '3' ? 'Down Town' : 'Unknown'));
 
    }
    public function paymenttables()
    {
        return $this->hasManyThrough(Paymenttable::class, Paymentplan::class, 'protype_id', 'paymentplan_id');
    }
    
}
