<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Models\Bank;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('main', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $positions = Position::all();
        $banks = Bank::all();
        return view('form', compact('provinces', 'regencies', 'positions', 'banks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        Employee::create($request->all());

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        $provinces = Province::all();
        $regencies = Regency::all();
        $positions = Position::all();
        $banks = Bank::all();
        return view('form-edit', compact('employee', 'provinces', 'regencies', 'positions', 'banks'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(EmployeeUpdateRequest $request, string $id)
    public function update(Request $request)
    {
        $city_id = $request->has('city_id') ? $request->city_id : $request->old_city;

        Employee::where('id', $request->id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'date_of_birth' => $request->date_of_birth,
            'phone_number' => $request->phone_number,
            'email_address' => $request->email_address,
            'province_id' => $request->province_id,
            'city_id' => $city_id,
            'street_address' => $request->street_address,
            'zip_code' => $request->zip_code,
            'ktp_number' => $request->ktp_number,
            'position_id' => $request->position_id,
            'bank_id' => $request->bank_id,
            'bank_account_number' => $request->bank_account_number
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect('/');
    }

    public function getRegencies($province_id)
    {
        $regencies = Regency::where('province_id', $province_id)->get();
        return response()->json($regencies);
    }
}
