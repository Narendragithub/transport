<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
     /**
     * Get the invoicetrips for the invoice.
     */
    public function invoicetrips()
    {
        return $this->hasMany('App\Invoicetrip');
    }
}
