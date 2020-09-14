<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\debit;

class DebitController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => ['index','edit','update','show','destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debits = debit::all();
        return view('admin.admindebit', compact('debits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.debit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'branch' => 'required',
            'date' => 'required',
            'service' => 'required',
            'name' => 'required',
            'address' => 'required',
            'acNumber' => 'required',
            // 'cardNumber' => 'required',
            // 'reason' => 'required'
        ]);

        $debit = new debit;
        $debit->branch  = $request->input('branch');
        $debit->date = $request->input('date');
        $debit->service = $request->input('service');
        $debit->applicants_name = $request->input('name');
        $debit->applicants_address = $request->input('address');
        $debit->account_number = $request->input('acNumber');
        $debit->card_type = $request->input('visa');
        $debit->existing_card_number = $request->input('cardNumber');
        $debit->reason_for_replacement = $request->input('reason');
        $debit->supplementary_name = $request->input('suppName');
        $debit->user_id = auth()->user()->id;
        $debit->save();

    
        return redirect('home')->with('success', 'Debit/Credit card request has been submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_debit = debit::find($id);
        return view('admin.debitdetail', compact('show_debit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update_debit=debit::find($id);
        $update_debit->status = "approved";
        $update_debit->save();
        return redirect('debit')->with('success', 'Credit/Debit card Request has been approved!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_debit = debit::find($id);
        $del_debit->delete();
        return redirect('/debit');
    }
}
