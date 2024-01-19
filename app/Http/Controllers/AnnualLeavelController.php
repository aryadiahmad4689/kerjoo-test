<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnnualLeaveRequest;
use App\Repository\AnnualLeaveRepositoryInterface;

class AnnualLeavelController extends Controller
{
    //
    protected $annualLeave;

    public function __construct(AnnualLeaveRepositoryInterface $annualLeave)
    {
        $this->annualLeave = $annualLeave;
    }

    public function store(StoreAnnualLeaveRequest $request)
    {
        $leave = $this->annualLeave->create($request);
        return response()->json($leave, 201);
    }

    public function index()
    {
        $leaves = $this->annualLeave->getAll();
        return response()->json($leaves);
    }

    public function show($id)
    {
        $leave = $this->annualLeave->getById($id);
        return response()->json($leave);
    }
}
