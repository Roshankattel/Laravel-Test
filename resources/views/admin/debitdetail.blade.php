@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <center><b>ID-{{$show_debit->id}} CREDIT/DEBIT REQUEST DETAILS</b>
                    </h4>
                    </center>
                </div>
                <div class="card-body">
                    <div>
                        <b> Branch:</b> &nbsp;{{$show_debit->branch}}
                    </div>
                    <div>
                        <b>Date:</b>&nbsp;{{$show_debit->date}}
                    </div>
                    <div>
                        <b>Requested service:</b>&nbsp;{{$show_debit->service}}
                    </div>
                    <div>
                        <b>Applicant's name:</b>&nbsp;{{$show_debit->applicants_name}}
                    </div>
                    <div>
                        <b>Applicant's address:</b> &nbsp;{{$show_debit->applicants_address}}
                    </div>
                    <div>
                        <b>Account number:</b>&nbsp;{{$show_debit->account_number}}
                    </div>
                    <div>
                        <b>VISA Card Type:</b> &nbsp;{{$show_debit->card_Type}}

                    </div>
                    <div>
                        <hr>
                        <b>TO REPLACE CARD</b></br>
                        <b>Current card Number:</b>&nbsp;{{$show_debit->existing_card_number}}
                    </div>
                    <div>
                        <b>Reason for replacement:</b> &nbsp;{{$show_debit->reason_for_replacement}}
                    </div>
                    <div>
                        <hr>

                        <b> SUPPLEMENTARY CARD ONLY</b><br>
                        <b>Name:</b>&nbsp;{{$show_debit->supplementary_name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection