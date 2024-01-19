<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'annual_leave_id',
        'date',
        // Kolom-kolom lain yang ingin Anda tambahkan jika ada
    ];
    public function annualLeave()
    {
        return $this->belongsTo(AnnualLeave::class, 'annual_leave_id');
    }
}
