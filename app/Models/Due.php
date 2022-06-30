<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Due
 *
 * @property $id
 * @property $num_debts_order
 * @property $debt_amount
 * @property $debt_payment_date
 * @property $state
 * @property $id_loans
 * @property $created_at
 * @property $updated_at
 *
 * @property Loan $loan
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Due extends Model
{
    
    static $rules = [
		'num_debts_order' => 'required',
		'debt_amount' => 'required',
		'debt_payment_date' => 'required',
		'state' => 'required',
		'id_loans' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['num_debts_order','debt_amount','debt_payment_date','state','id_loans'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function loan()
    {
        return $this->hasOne('App\Models\Loan', 'id', 'id_loans');
    }

}
