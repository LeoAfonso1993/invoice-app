<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;


    protected $fillable = ['company_id', 'client_id', 'invoice_number', 'issue_date', 'due_date', 'total_amount', 'status'];

    // Define the relationships with other models
    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
