<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentsType
 *
 * @property $id
 * @property $value
 * @property $description
 * @property $apply_days
 * @property $created_at
 *
 * @property Loan[] $loans
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PaymentsType extends Model
{
    
    static $rules = [
		'value' => 'required',
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['value','description','apply_days'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function loans()
    {
        return $this->hasMany('App\Models\Loan', 'id_payments_types', 'id');
    }
    

}
