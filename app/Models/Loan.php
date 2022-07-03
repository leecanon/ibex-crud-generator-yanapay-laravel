<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Loan
 *
 * @property $id
 * @property $id_clients
 * @property $loan_amount
 * @property $interest
 * @property $total_interest
 * @property $expenses
 * @property $number_debts
 * @property $currency
 * @property $start_date
 * @property $total_pay
 * @property $clause
 * @property $id_payments_types
 * @property $id_investments
 * @property $late_payment
 * @property $total_late_payment
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Due[] $dues
 * @property Investment $investment
 * @property PaymentsType $paymentsType
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Loan extends Model
{
    
    static $rules = [
		'id_clients' => 'required',
		'loan_amount' => 'required',
		'interest' => 'required',
		'total_interest' => 'required',
		'expenses' => 'required',
		'number_debts' => 'required',
		'currency' => 'required',
		'start_date' => 'required',
		'total_pay' => 'required',
		'clause' => 'required',
		'id_payments_types' => 'required',
		'id_investments' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_clients','loan_amount','interest','total_interest','expenses','number_debts','currency','start_date','total_pay','clause','id_payments_types','id_investments','late_payment','total_late_payment'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'id_clients');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dues()
    {
        return $this->hasMany('App\Models\Due', 'id_loans', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function investment()
    {
        return $this->hasOne('App\Models\Investment', 'id', 'id_investments');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paymentsType()
    {
        return $this->hasOne('App\Models\PaymentsType', 'id', 'id_payments_types');
    }
    

}
