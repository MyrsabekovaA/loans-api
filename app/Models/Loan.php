<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = ['amount', 'creation_date', 'status'];
    protected $casts = [
        'creation_date' => 'date',
    ];
}
