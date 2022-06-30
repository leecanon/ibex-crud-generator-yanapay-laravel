<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $name
 * @property $document_type
 * @property $document_number
 * @property $address
 * @property $city
 * @property $email
 * @property $phone_number
 * @property $state
 * @property $created_at
 * @property $updated_at
 *
 * @property CustomerDetail[] $customerDetails
 * @property Loan[] $loans
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    
    static $rules = [
		'name' => 'required',
		'document_type' => 'required',
		'document_number' => 'required',
		'address' => 'required',
		'city' => 'required',
		'phone_number' => 'required',
		'state' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','document_type','document_number','address','city','email','phone_number','state'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customerDetails()
    {
        return $this->hasMany('App\Models\CustomerDetail', 'id_clients', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function loans()
    {
        return $this->hasMany('App\Models\Loan', 'id_clients', 'id');
    }
    

}
