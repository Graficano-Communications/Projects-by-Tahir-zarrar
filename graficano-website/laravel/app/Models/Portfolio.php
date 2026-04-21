<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    // protected $table = 'portfolios';

    /**
    * The database primary key value.
    *
    * @var string
    */
    // protected $primaryKey = 'id';
    // protected $keyType = 'string';
    // public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'title',
                  'description',
                  'client_id',
                  'location',
                  'date'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the client for this model.
     *
     * @return App\Models\Client
     */
    public function client()
    {
        return $this->belongsTo('App\Models\Client','client_id');
    }


}
