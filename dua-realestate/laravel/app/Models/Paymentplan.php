<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paymentplan extends Model
{
    protected $fillable = [
        'plan_name',
        'plan_image',
        'project_id',
        'protype_id',
        'short_description',
        'large_description',
        'specifications',
        'sequence',
    ];

    // Relationship with the Project model
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    // Relationship with the Protype model
    public function protype()
{
    return $this->belongsTo(Protype::class, 'protype_id');
}
public function paymentTables()
{
    return $this->hasMany(Paymenttable::class, 'paymentplan_id', 'id'); // Assuming paymentplan_id is a foreign key in the Paymenttable
}


}
