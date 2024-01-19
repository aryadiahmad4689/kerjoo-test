<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnualLeave extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reason'
        // Kolom-kolom lain yang bisa diisi secara masif (jika ada)
    ];

    public function leaveDates()
    {
        return $this->hasMany(LeaveDate::class, 'annual_leave_id');
    }
}
