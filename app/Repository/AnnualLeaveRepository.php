<?php
namespace App\Repository;

use App\Models\AnnualLeave;
use App\Models\LeaveDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnualLeaveRepository implements AnnualLeaveRepositoryInterface
{
    // membuat permohonan cuti
    public function create(Request $request)
    {
        DB::beginTransaction();

        try {
            // Membuat permohonan cuti
            $annualLeave = AnnualLeave::create([
                'user_id' => $request->user_id,
                'reason' => $request->reason,
                // Tambahkan field lain jika diperlukan
            ]);
            // Membuat tanggal cuti
            foreach ($request->dates as $date) {
                LeaveDate::create([
                    'annual_leave_id' => $annualLeave->id,
                    'date' => $date
                ]);
            }

            DB::commit();
            return $annualLeave;
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            return $e;
        }
    }

    // mengambil semua daftar cuti pegawai
    public function getAll()
    {
        return AnnualLeave::with('leaveDates')->get();
    }

    // mengambil hanya satu daftar cuti berdasarkan cuti id
    public function getById($id)
    {
        return AnnualLeave::with('leaveDates')->find($id);
    }
}

