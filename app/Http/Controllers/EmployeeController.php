<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EmployeeController extends Controller
{
    public function index()
    {
        $total = Employee::count();
        $employees = Employee::all();
        return view('tables',[
            'total' => $total,
        ], compact('employees')); 
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees',
            'image' => 'nullable|image|max:2048',
            'function' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        Employee::create($data);

        return redirect()->back();
    }

    public function update(Request $request, Employee $employee)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees,email,' . $employee->id,
            'image' => 'nullable|image|max:2048',
            'function' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            if ($employee->image) {
                Storage::disk('public')->delete($employee->image);
            }
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $employee->update($data);

        return redirect()->back();
    }

    public function destroy(Employee $employee)
    {
        if ($employee->image) {
            Storage::disk('public')->delete($employee->image);
        }
        $employee->delete();

        return redirect()->back();
    }
}
