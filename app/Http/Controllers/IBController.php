<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\debit;
use App\IB;

class IBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => ['index','edit','update','show','destroy']]);
    }

    public function index()
    {

        $IBs = IB::all();
        return view('admin.adminIB', compact('IBs'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.IB');
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
            'mobile' => 'required',
            'ebank' => 'required',
            'CAmobile' => 'required',
            'newAccNum' => 'required',
            'eservice' => 'required',
            'email' => 'required',
            'iservice' => 'required',
        ]);

        $IB = new IB;
        $IB->branch = $request->input('branch');
        $IB->date = $request->input('date');
        $IB->service = $request->input('service');
        $IB->applicant_name = $request->input('name');
        $IB->address = $request->input('address');
        $IB->account_number = $request->input('acNumber');
        $IB->mobile_no = $request->input('mobile');
        $IB->application_for = $request->input('ebank');
        $IB->change_add_mobile_no = $request->input('CAmobile');
        $IB->new_account_no = $request->input('newAccNum');
        $IB->e_required_Service = $request->input('eservice');
        $IB->email = $request->input('email');
        $IB->i_required_Service = $request->input('iservice');
        $IB->linked_account_no = $request->input('linkedAccNo');
        $IB->linked_account_name = $request->input('linkedAccName');
        $IB->user_id = auth()->user()->id;
        $IB->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $show_IB = IB::find($id);
        return view('admin.IBdetail', compact('show_IB'));
        return redirect('home')->with('success', 'Internet Banking Request has been submitted!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $update_IB = IB::find($id);
        $update_IB->status = "approved";
        $update_IB->save();
        return redirect('IB')->with('success', 'IB Book Request has been approved!');
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

        $del_IB = IB::find($id);
        $del_IB->delete();
        return redirect('/IB');
    }
}
