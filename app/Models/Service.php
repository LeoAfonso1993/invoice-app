<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['company_id', 'name', 'description', 'price'];

    // Define the relationship with the Company model
    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function invoices() {
        return $this->hasMany(Invoice::class);
    }
}
