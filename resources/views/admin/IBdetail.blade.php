@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h4><b>ID-{{$show_IB->id}} Internet Banking REQUEST DETAILS</b></h4>
                    </center>
                </div>
                <div class="card-body">
                    <div>
                        <b>Branch:</b>&nbsp;{{$show_IB->branch}}

                    </div>
                    <div>
                        <b>Date:</b>&nbsp;{{$show_IB->date}}
                    </div>
                    <div>
                        <b>Request to provide service:</b>&nbsp;{{$show_IB->service}}

                    </div>
                    <div>
                        <b>Applicant's name:</b>&nbsp;{{$show_IB->applicant_name}}
                    </div>
                    <div>
                        <b>Applicant's address:</b>&nbsp;{{$show_IB->address}}
                    </div>
                    <div>
                        <b>Account number:</b>&nbsp;{{$show_IB->account_number}}
                    </div>
                    <hr>
                    <div><b>A. e-BANKING</b></div>
                    <div>
                        <b>Mobile Number:</b>&nbsp;{{$show_IB->mobile_no}}
                    </div>
                    <div>
                        <b>Application For:</b>&nbsp;{{$show_IB->application_for}}

                    </div>
                    <div>
                        <b>Change/Add Mobile No:</b>&nbsp;{{$show_IB->change_add_mobile_no}}
                    </div>

                    <div>
                        <b>New Account Number:</b>&nbsp;{{$show_IB->new_account_no}}
                    </div>
                    <div>
                        <b>Required Service:</b>&nbsp;{{$show_IB->e_required_service}}

                    </div>
                    <hr>
                    <div><b>B. i-BANKING</b>
                    </div>
                    <div>
                        <b>Email:</b>&nbsp;{{$show_IB->email}}
                    </div>

                    <div>
                        <b>Service Required:</b>&nbsp;{{$show_IB->i_required_service}}

                    </div>
                    <hr>
                    <div><b>ACCOUNT TO BE LINKED</b></div>
                    <div>
                        <b>Account Number:</b>&nbsp;{{$show_IB->linked_account_no}}
                    </div>
                    <div>
                        <b>Account Name:</b>&nbsp;{{$show_IB->linked_account_name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection