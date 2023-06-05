<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address'];

    public function client() {
        return $this->hasMany(Client::class);
    }

    public function service() {
        return $this->hasMany(Service::class);
    }

    public function invoice() {
        return $this->hasMany(Invoice::class);
    }

    public function getAddressAttribute(){
        return "{$this->address_street}, {$this->address_city}, {$this->address_state}, {$this->address_zip}";
    }
}
