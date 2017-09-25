<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoicetrip extends Model
{
    /**
     * Get the invoice that owns the invoicetrip.
     */
    public function invoice()
    {
        return $this->belongsTo('App\Invoice');
    }
}
