<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Investment
 *
 * @property $id
 * @property $partner_name
 * @property $investment_amount
 * @property $currency
 * @property $created_at
 * @property $updated_at
 *
 * @property Loan[] $loans
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Investment extends Model
{
    
    static $rules = [
		'partner_name' => 'required',
		'investment_amount' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['partner_name','investment_amount','currency'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function loans()
    {
        return $this->hasMany('App\Models\Loan', 'id_investments', 'id');
    }
    

}
