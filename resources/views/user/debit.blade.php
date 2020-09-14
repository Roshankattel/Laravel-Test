@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <center><b>{{ __('DEBIT/CREDIT CARD REQUEST FORM') }}</b>
                    </h4>
                    </center>
                </div>
                <div class="card-body">

                    <form method="post" enctype="multipart/form-data" action="{{ url('debit')}}">
                        {{csrf_field() }}
                        <div class="form-group">
                            <label for="branch">Branch:</label></br>
                            <select name="branch" id="branch" class="form-control">
                                <option value="New Road">Kathmandu</option>
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
                        <div class="form-group">
                            <label>Date (DD/MM/YYYY):</label>
                            <input type="text" class="form-control" name="date">
                        </div>
                        <div class="form-group">
                            <label>I/we request you to provide us below mentioned services offered by your bank.</label></br>
                            <input type="radio" id="service1" name="service" value="VISA">
                            <label for="service1">VISA card &nbsp;</label>
                            <input type="radio" id="service2" name="service" value="DEBIT">
                            <label for="service2">DEBIT card &nbsp;</label>
                        </div>
                        <div class="form-group">
                            <label>Applicant's name:</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Applicant's address:</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="form-group">
                            <label>Account number:</label>
                            <input type="number" class="form-control" name="acNumber">
                        </div>
                        <div class="form-group">
                            <label>VISA Card Type:</label><br>
                            <input type="radio" id="visatype1" name="visa" value="VISA-new">
                            <label for="visatype1">New &nbsp;</label>
                            <input type="radio" id="visatype2" name="visa" value="replacement">
                            <label for="visatype2">Replacement &nbsp;</label>
                            <input type="radio" id="visatype3" name="visa" value="supplementary">
                            <label for="visatype3">Supplementary &nbsp;</label>
                            <input type="radio" id="visatype4" name="visa" value="repin">
                            <label for="visatype4">Repin &nbsp;</label>
                            <input type="radio" id="visatype5" name="visa" value="debit">
                            <label for="visatype5">Debit &nbsp;</label>
                            <input type="radio" id="visatype6" name="visa" value="USD-Debit">
                            <label for="visatype6">USD Debit &nbsp;</label>
                            <input type="radio" id="visatype7" name="visa" value="USD-Prepaid">
                            <label for="visatype7">USD Prepaid &nbsp;</label>
                            <input type="radio" id="visatype8" name="visa" value="instant-card">
                            <label for="visatype8">Instant Card &nbsp;</label>
                        </div>
                        <hr>
                        <div class="form-group">
                            <b>TO REPLACE CARD</b></br>
                            <label>Current card Number:</label>
                            <input type="number" class="form-control" name="cardNumber">
                        </div>
                        <div class="form-group">
                            <label>Reason for replacement:</label>
                            <input type="text" class="form-control" name="reason">
                        </div>
                        <hr>
                        <div class="form-group">
                            <b> SUPPLEMENTARY CARD ONLY</b><br>
                            <label>Name:</label>
                            <input type="text" class="form-control" name="suppName">
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection