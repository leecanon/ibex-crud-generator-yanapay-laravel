<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerDetail
 *
 * @property $id
 * @property $job
 * @property $job_address
 * @property $business
 * @property $business_address
 * @property $id_clients
 *
 * @property Client $client
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CustomerDetail extends Model
{
    
    static $rules = [
		'id_clients' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['job','job_address','business','business_address','id_clients'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'id_clients');
    }
    

}
