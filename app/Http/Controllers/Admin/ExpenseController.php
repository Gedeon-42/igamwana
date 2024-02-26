<?php

namespace App\Http\Controllers\Admin;

use App\Models\Expense;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpenseController extends Controller
{
    //
    public function index(){
        $expenses = Expense::all();
        return view('admin.expenses.allExpenses',[
            'expenses'=>$expenses
        ]);
    }

    public function store(Request $request){

        $formData = $request->validate([
            'expense-type'=>'required|string',
            'name'=>'required|string',
            'amount'=>'required|string',
            'status'=>'required|string',
            'phone'=>'required|string',
            'email'=>'required|email',
            'date'=>'required|string'
        ]);


        Expense::create($formData);
        return redirect('/admin/expenses')->with('message','expenses recorded successfully');
    }

    public function create(){
        return view('admin.expenses.addExpense');
    }

    public function update(Request $request,Expense $expense){
        
        $formData = $request->validate([
            'expense-type'=>'required|string',
            'name'=>'string',
            'amount'=>'string',
            'status'=>'string',
            'phone'=>'string',
            'email'=>'email',
            'date'=>'string'
        ]);

        $expense->update($formData);
        return redirect('/admin/expenses')->with('message','expenses updated  successfully');
    }

    public function edit(Expense $expense){

        return view('admin.expense.editExpense',[
            '$expense'=>$expense
        ]);
    }

    public function destroy(Expense $expense){
        
        $expense->delete();
        return back()->with('message','expense deleted successfully');
    }
}
