<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paymenttable extends Model
{
    //
    public function paymentPlan()
    {
        return $this->belongsTo(Paymentplan::class, 'paymentplan_id', 'id'); // Assuming paymentplan_id is a foreign key
    }
    
}
