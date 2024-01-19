<?php
namespace App\Repository;

use Illuminate\Http\Request;

interface AnnualLeaveRepositoryInterface
{
    public function create(Request $request);
    public function getAll();
    public function getById($id);
}
