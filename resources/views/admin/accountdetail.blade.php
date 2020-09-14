@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h4><b>ID-{{$show_account->id}} Account Details</b></h4>
                        </center>
                    </div>
                    <div class="card-body">
                        <div>
                            <b>Reference Number:</b>
                            {{$show_account->reference_number}}
                        </div>
                        <hr/>
                        <div>
                            <b>Branch:</b>
                            &nbsp;{{$show_account->branch_ID}}
                        </div>
                        <div>
                            <b>Salutation:</b>
                            &nbsp;{{$show_account->salutation}}
                        </div>
                        <div>
                            <b>First Name:</b>
                            &nbsp;{{$show_account->first_name}}
                        </div>
                        <div>
                            <b>Middle Name:</b>
                            &nbsp;{{$show_account->middle_name}}
                        </div>  <div>
                            <b>Last Name:</b>
                            &nbsp;{{$show_account->last_name}}
                        </div>


                        <div>
                            <b>Telephone Number:</b>
                            &nbsp;{{$show_account->tel_no}}
                        </div>

                        <div>
                            <b>Mobile Number:</b>
                            &nbsp;{{$show_account->mobile_no}}
                        </div>

                        <div>
                            <b>Gender</b>
                            &nbsp;{{$show_account->gender}}
                        </div>
                        <hr>
                        <div>
                            <b>Citizenship/Passport Number:</b>
                            &nbsp;{{$show_account->citizenship_passport_no}}

                        </div>

                        <div>
                            <b>Place of Issue:</b>
                            &nbsp;{{$show_account->place_of_issue}}
                        </div>

                        <div>
                            <b>Date of Issue:</b>
                            &nbsp;{{$show_account->date_of_issue}}
                        </div>

                        <div>
                            <b>Date of Birth:</b>
                            &nbsp;{{$show_account->date_of_birth}} {{$show_account->date_type_dob}}
                        </div>

                        <div>
                            <b>Birth Country:</b>
                            &nbsp;{{$show_account->birth_country}}
                        </div>
                        <div>
                            <b>Marital Status:</b>
                            &nbsp;{{$show_account->marital_status}}
                        </div>
                        <div>
                            <b>Occupation:</b>
                            &nbsp;{{$show_account->occupation}}
                        </div>
                        <hr/>
                        <div>
                            ORGANIZATION DETAILS:
                        </div>
                        <div>
                            <b>Name:</b>
                            &nbsp;{{$show_account->organization_name}}
                        </div>
                        <div>
                            <b>Address:</b>
                            &nbsp;{{$show_account->organization_address}}
                        </div>
                        <div>
                            <b>Designation:</b>
                            &nbsp;{{$show_account->designation}}
                        </div>
                        <div>
                            <b>Estimated Annual Income:</b>
                            &nbsp;{{$show_account->estimated_annual_income}}
                        </div>
                        <div>
                            <b>Telephone Number:</b>
                            &nbsp;{{$show_account->organization_tel_no}}
                        </div>


                    <hr/>
                        <div>
                            <b>Grand Father's Name:</b>
                            &nbsp;{{$show_account->grand_father_name}}
                        </div>
                        <div>
                            <b>Father's Name:</b>
                            &nbsp;{{$show_account->father_name}}
                        </div>
                        <div>
                            <b>Mother's Name:</b>
                            &nbsp;{{$show_account->mother_name}}
                        </div>
                        <hr/>
                        <div><u>ADDRESS DETAILS:</u></div>
                        <br>
                        <div>A) Permanent Details</div>
                        <br>
                        <div>
                            <b>Permanent House No:</b>
                            &nbsp;{{$show_account->permanent_house_no}}
                        </div>
                        <div>
                            <b>Ward No:</b>
                            &nbsp;{{$show_account->permanent_ward_no}}
                        </div>
                        <div>
                            <b>VDC/MC:</b>
                            &nbsp;{{$show_account->permanent_vdc_mc}}
                        </div>
                        <div>
                            <b>City:</b>
                            &nbsp;{{$show_account->permanent_city}}
                        </div>
                        <div>
                            <b>Country:</b>
                            &nbsp;{{$show_account->permanent_country_name}}
                        </div>
                        <br>
                        <div>B) CURRENT DETAILS</div>
                        <div>
                            <b>Current House No.:</b>
                            &nbsp;{{$show_account->current_house_no}}
                        </div>
                        <div>
                            <b>Address:</b>
                            &nbsp;{{$show_account->current_address}}
                        </div>
                        <div>
                            <b>City:</b>
                            &nbsp;{{$show_account->current_city}}
                        </div>
                        <div>
                            <b>Country Name:</b>
                            &nbsp;{{$show_account->current_country_name}}
                        </div>
                        <hr/>
                        <div>
                            <b>Source of Fund:</b>
                            &nbsp;{{$show_account->source_of_fund}}
                        </div>
                        <div>
                            <b>Transaction Currency:</b>
                            &nbsp;{{$show_account->expected_transaction_currency}}
                        </div>
                        <div>
                            <b>Expected Transaction Amount:</b>
                            &nbsp;{{$show_account->expected_transaction_amount}}
                        </div>
                        <div>
                            <b>Expected Number of Transactions:</b>
                            &nbsp;{{$show_account->expected_transaction_no}}
                        </div>
                        <div>
                            <b>Nature of Transaction:</b>
                            &nbsp;{{$show_account->nature_of_transaction}}
                        </div>
                        <div>
                            <b>Internet Banking:</b>
                            &nbsp;{{$show_account->internet_banking}}
                        </div>
                        <hr/>
                        <div>
                            <b>Uploaded Doc:</b>
                            &nbsp;{{$show_account->uploaded_doc}}

{{--                           <a href="storage\uploaded_doc\{{$show_account->uploaded_doc}}" >(CLICK HERE)</a>--}}
                          <a href="http://localhost:8000/storage/uploaded_doc/{{$show_account->uploaded_doc}}" target="_blank">(CLICK HERE)</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
