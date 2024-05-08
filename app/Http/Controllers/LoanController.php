<?php
namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index(Request $request)
    {
        $query = Loan::query();

        if ($request->has('creation_date')) {
            $query->whereDate('creation_date', $request->creation_date);
        }
        if ($request->has('amount')) {
            $query->where('amount', $request->amount);
        }

        return $query->get();
    }

    public function store(Request $request)
    {
        $loan = Loan::create($request->all());
        return response()->json($loan, 201);
    }

    public function show($id)
    {
        return Loan::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $loan = Loan::findOrFail($id);
        $loan->update($request->all());
        return response()->json($loan);
    }

    public function destroy($id)
    {
        Loan::destroy($id);
        return response()->json(null, 204);
    }
}
