@extends('layouts.app')

@section('content')
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                        <h4><b>ACCOUNT OPENING FORM</b></h4>
                </div>
                @if(count($errors)>0)
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif
                <div class="card-body">

                    <div class="row">
                        <!-- FORM STARTS HERE-->
                        <!-- <form action="submit" method="post" accept-charset="UTF-8"> -->
                        <form method="post" enctype="multipart/form-data" action="{{ url('account')}}">
                            {{csrf_field()}}

                            <div class="col-md-12">
                                <label>Reference Number:</label>
                                <input class="col-md-2" name="ref_num" value="{{random_int('11111','99999')}}" readonly>
                            </div>
                            <hr />
                            <div class="col-md-12 ">
                                <label>Please select branch from the drop down:<br></label>

                            </div>

                            <br>
                            <div class="col-md-4 col-sm-4 ">
                                <div class="form-group">
                                    <select name="bank_branch_id" id="branch" class="form-control">
                                        <option value="New Road" selected="selected">Kathmandu</option>
                                        <option value="Pokhara">Pokhara</option>
                                        <option value="Suryabinayak">Suryabinayak</option>
                                        <option value="Satdobato">Satdobato</option>
                                        <option value="Kalanki">Kalanki</option>
                                        <option value="New Baneshwor">New Baneshwor</option>
                                        <option value="Hetauda">Hetauda</option>
                                        <option value="Teku">Teku</option>
                                        <option value="Dhangadi">Dhangadi</option>
                                        <option value="Ekantakuna">Ekantakuna</option>
                                        <option value="Mahendranagar">Mahendranagar</option>
                                        <option value="Ghorahi">Ghorahi</option>
                                        <option value="Surkhet">Surkhet</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Salutation* : </label>

                                    <input name="Salutation" type="radio" value="Mr"><span>&nbsp;</span>Mr &nbsp;

                                    <input name="Salutation" type="radio" value="Mrs"><span>&nbsp;</span>Mrs &nbsp;

                                    <input name="Salutation" type="radio" value="Miss"><span>&nbsp;</span>Miss &nbsp;

                                </div>
                            </div>


                            <div class="row col-md-12">
                                <div class="col">
                                    <label class="fg-label">First Name <span class="astrick">*</span></label>
                                    <input class="form-control" name="first_name" type="text">
                                </div>
                                <div class="col">
                                    <label class="fg-label">Middle Name</label>
                                    <input class="form-control" name="middle_name" type="text">
                                </div>
                                <div class="col">
                                    <label class="fg-label">Last Name <span class="astrick">*</span></label>
                                    <input class="form-control" name="last_name" type="text">
                                </div>
                            </div>

                            <div class="row col-md-8">
                                <div class="col">
                                    <label class="fg-label">Tel No.</label>
                                    <input class="form-control" name="tel_no" type="text">
                                </div>
                                <div class="col">
                                    <label class="fg-label">Mobile No. <span class="astrick">*</span></label>
                                    <input class="form-control fg-input" name="mobile_no" type="text">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Gender* : </label>

                                    <input name="gender" type="radio" value="M">
                                    <span>&nbsp;</span> Male &nbsp;

                                    <input name="gender" type="radio" value="F">
                                    <span>&nbsp;</span>Female &nbsp;

                                    <input name="gender" type="radio" value="O">
                                    <span>&nbsp;</span> Other &nbsp;
                                </div>
                            </div>
                            <hr>

                            <div class="row col-md-8">
                                <div class="col">
                                    <label class="fg-label">Citizenship/Passport No. <span class="astrick">*</span></label>
                                    <input class="form-control" name="citizenship_passport_no" type="text">
                                </div>

                                <div class="col">
                                    <label class="fg-label">Place of Issue: <span class="astrick">*</span></label>
                                    <input class="form-control fg-input" name="place_of_issue" type="text">
                                </div>
                            </div>
                            <br>
                            <div class="row col-md-5">
                                <div class="col">
                                    <label class="fg-label">Date of Issue (DD/MM/YYYY)&nbsp;<span class="astrick">*</span></label>
                                    <input class="form-control" name="date_of_issue" type="text">
                                </div>
                            </div>

                            <hr />

                            <!--- DATE OF BIRTH STARTS HERE-->
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label class="fg-label">Date of Birth <span class="astrick">*</span></label>
                                    <label class="radio radio-inline m-r-20">
                                        <input type="radio" name="date_type" value="AD" checked="checked" class="valid" aria-invalid="false">
                                        <i class="input-helper"></i>
                                        AD
                                    </label>

                                    <label class="radio radio-inline m-r-20">
                                        <input type="radio" name="date_type" value="BS" aria-invalid="false" class="valid">
                                        <i class="input-helper"></i>
                                        BS
                                    </label>
                                </div>
                                <input type="hidden" id="date_type_val" value="AD">
                            </div>

                            <div class="row col-md-5">
                                <div class="col">
                                    <label class="fg-label">(DD/MM/YYYY) format<span class="astrick">*</span></label>
                                    <input class="form-control" name="date_of_birth" type="text">
                                </div>
                            </div>

                            <!--Date of Birth ends here-->
                            <br>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label class="fg-label">Nationality <span class="astrick">*</span></label>

                                    <div class="fg-line">
                                        <input type="text" class="form-control" name="birth_country" value="Nepali">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Marital Status* : </label>

                                    <input name="marital_status" type="radio" value="Single"><span>&nbsp;</span>Single &nbsp;

                                    <input name="marital_status" type="radio" value="Married"><span>&nbsp;</span>Married &nbsp;

                                    <input name="marital_status" type="radio" value="Other"><span>&nbsp;Other</span> &nbsp;

                                </div>
                            </div>
                            <hr />

                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Occupation* : </label>

                                    <input name="occupation" type="radio" value="Salaried"><span>&nbsp;</span>Salaried &nbsp;

                                    <input name="occupation" type="radio" value="Self-Employed"><span>&nbsp;</span>Self employed &nbsp;

                                    <input name="occupation" type="radio" value="Professional"><span>&nbsp;Professional</span> &nbsp;
                                    <input name="occupation" type="radio" value="Other"><span>&nbsp;</span>Other &nbsp;
                                </div>
                            </div>

                            <div class="row col-md-12">
                                <div class="col">
                                    <label class="fg-label">Organization Name</label>
                                    <input class="form-control fg-input" name="organization_name" type="text">


                                </div>

                                <div class="col">
                                    <label class="fg-label">Address</label>

                                    <input class="form-control fg-input" name="organization_address" type="text">
                                </div>

                                <div class="col">
                                    <label class="fg-label">Designation</label>
                                    <input class="form-control fg-input" name="designation" type="text">
                                </div>
                            </div>

                            <div class="row col-md-8">
                                <div class="col">
                                    <label class="fg-label">Estimated Annual Income</label>
                                    <input class="form-control fg-input" name="estimated_annual_income" type="text">
                                </div>

                                <div class="col">
                                    <label class="fg-label">Tel No.</label>
                                    <input class="form-control fg-input" name="organization_tel_no" type="text">
                                </div>
                            </div>
                            <hr />

                            <div class="col-md-12"> Family information</div>
                            <br>
                            <div class="row col-md-12">
                                <div class="col">
                                    <label class="fg-label">Grandfather's Name <span class="astrick">*</span></label>
                                    <input class="form-control fg-input" name="grand_father_name" type="text">

                                </div>

                                <div class="col">
                                    <label class="fg-label">Father's Name <span class="astrick">*</span></label>
                                    <input class="form-control fg-input" name="father_name" type="text">

                                </div>

                                <div class="col">
                                    <label class="fg-label">Mother's Name <span class="astrick">*</span></label>
                                    <input class="form-control fg-input" name="mother_name" type="text">

                                </div>
                            </div>
                            <hr />

                            <div class="col-md-12 ac_head">Permanent Address </div><br>
                            <div class="row col-md-12">
                                <div class="col">
                                    <label class="fg-label">House No.</label>
                                    <input class="form-control fg-input" id="p_house_no" name="permanent_house_no" type="text">
                                </div>

                                <div class="col">
                                    <label class="fg-label">Street</label>
                                    <input class="form-control fg-input" name="permanent_street" type="text">
                                </div>

                                <div class="col col-md-2">
                                    <label class="fg-label">Ward No. <span class="astrick">*</span></label>
                                    <input class="form-control fg-input" name="permanent_ward_no" type="text">
                                </div>

                                <div class="col">
                                    <label class="fg-label">VDC/MC <span class="astrick">*</span></label>
                                    <input class="form-control fg-input" name="permanent_vdc_mc" type="text">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="fg-label">City <span class="astrick">*</span></label>
                                <input class="form-control fg-input" name="permanent_city" type="text">
                            </div>

                            <div class="col-md-3">
                                <label class="fg-label">Country <span class="astrick">*</span></label>
                                <input class="form-control fg-input" name="permanent_country_name" type="text" value="Nepal">

                            </div>

                            <hr />
                            <div class="col-md-12">Current Address
                            </div>
                            <br>


                            <div class="row col-md-12">
                                <div class="col">
                                    <label class="fg-label">House No.</label>
                                    <input class="form-control fg-input" name="current_house_no" type="text">
                                </div>

                                <div class="col">
                                    <label class="fg-label">Address <span class="astrick">*</span></label>
                                    <input class="form-control fg-input" name="current_address" type="text">

                                </div>

                                <div class="col">
                                    <label class="fg-label">City <span class="astrick">*</span></label>
                                    <input class="form-control fg-input" name="current_city" type="text">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="fg-label">Country <span class="astrick">*</span></label>
                                <input class="form-control fg-input" name="current_country_name" type="text" value="Nepal">

                            </div>

                            <hr />
                            <div class="col-md-12">Source of fund* : </div>
                            <div class="col-md-12 ">
                                <div class="form-group">

                                    <input name="source_of_fund" type="radio" value="src_saving"><span>&nbsp;</span>Saving &nbsp;

                                    <input name="source_of_fund" type="radio" value="src_salary"><span>&nbsp;</span>Salary &nbsp;

                                    <input name="source_of_fund" type="radio" value="src_investment"><span>&nbsp;</span>Investment &nbsp;
                                    <input name="source_of_fund" type="radio" value="src_business_income"><span>&nbsp;</span>Business Income &nbsp;
                                    <input name="source_of_fund" type="radio" value="src_remittance"><span>&nbsp;</span>Remittance &nbsp;
                                </div>
                            </div>


                            <div class="col-md-12">Average Expected Transaction per month : </div>
                            <div class="row col-md-12">
                                <div class="col-md-2">
                                    <label class="fg-label">Currency <span class="astrick">*</span></label>
                                    <input class="form-control fg-input" name="expected_transaction_currency" type="text" value="NPR">
                                </div>

                                <div class="col">
                                    <label class="fg-label">Amount <span class="astrick">*</span></label>
                                    <input class="form-control fg-input" name="expected_transaction_amount" type="text">
                                </div>

                                <div class="col">
                                    <label class="fg-label">No. of transaction <span class="astrick">*</span></label>
                                    <input class="form-control fg-input" name="expected_transaction_no" type="text">
                                </div>
                            </div>


                            <br>

                            <div class="col-md-12 ">Nature of Transaction* : </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" value="Cash" name="nature_of_transaction" id="transaction_c">&nbsp;Cash&nbsp;
                                    </label>
                                    <label>
                                        <input type="checkbox" value="Cheque" name="nature_of_transaction" id="transaction_ch">&nbsp;Cheque&nbsp;
                                    </label>
                                    <label>
                                        <input type="checkbox" value="Remittance" name="nature_of_transaction" id="transaction_r">&nbsp;
                                        Remittance&nbsp;
                                    </label>

                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Do you want Internet Banking Facility?*</label> <br>

                                    <input checked="checked" name="internet_banking" type="radio" value="0">
                                    <i class="input-helper"></i>
                                    No

                                    <input name="internet_banking" type="radio" value="1">
                                    <i class="input-helper"></i>
                                    Yes
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="upload_file" class="control-label col-sm-12 ac_head">Upload Citizenship or Passport (must be PDF): </label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" accept="application/pdf" name="uploaded_doc" id="upload_file" required>
                                </div>
                            </div>

                            <input type="hidden" name="account_number" value="">
                            <input type="hidden" name="customer_ID" value="">
                            <!-- <input type="hidden" name="status" value="pending"> -->

                            <div class="col-md-12">
                                <button class="btn btn-primary">Submit
                                </button>

                            </div>

                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!--connect form wrap end-->

            </div>
        </div>
    </div>
</div>
</div>


@endsection
