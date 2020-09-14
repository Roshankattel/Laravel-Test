@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h4><b>{{ __('INTERNET BANKING REQUEST FORM') }}</b></h4>
                    </center>
                </div>
                <div class="card-body">

                    <form method="post" enctype="multipart/form-data" action="{{ url('IB')}}">
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
                            <input type="radio" id="service2" name="service" value="eBanking">
                            <label for="service2">e-Banking &nbsp;</label>
                            <input type="radio" id="service3" name="service" value="iBanking">
                            <label for="service3"> i-Banking &nbsp;</label><br>
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
                            <label>Account number</label>
                            <input type="number" class="form-control" name="acNumber">
                        </div>
                        <hr>
                        <b>A. e-BANKING</b>
                        <div class="form-group">
                            <label>Mobile Number:</label>
                            <input type="number" class="form-control" name="mobile">
                        </div>
                        <div class="form-group">
                            <label>Application For:</label><br>
                            <input type="radio" id="etype1" name="ebank" value="enew">
                            <label for="etype1">New &nbsp;</label>
                            <input type="radio" id="etype2" name="ebank" value="delete">
                            <label for="etype2">Delete &nbsp;</label>
                            <input type="radio" id="etype3" name="ebank" value="numberChange">
                            <label for="etype3">Number Change &nbsp;</label>
                            <input type="radio" id="etype4" name="ebank" value="addAcc">
                            <label for="etype4">Add Account &nbsp;</label>
                            <input type="radio" id="etype5" name="ebank" value="addMobile">
                            <label for="etype5">Add Mobile No.&nbsp;</label>
                            <input type="radio" id="etype6" name="ebank" value="mod">
                            <label for="etype6">Modification &nbsp;</label>
                            <input type="radio" id="etype7" name="ebank" value="add">
                            <label for="etype7">Add &nbsp;</label>
                            <input type="radio" id="etype8" name="ebank" value="e-repin">
                            <label for="etype8">Repin &nbsp;</label>
                        </div>
                        <div class="form-group">
                            <label>Change/Add Mobile No:</label>
                            <input type="number" class="form-control" name="CAmobile">
                        </div>

                        <div class="form-group">
                            <label>New Account Number:</label>
                            <input type="number" class="form-control" name="newAccNum">
                        </div>
                        <div class="form-group">
                            <label>Required Service:</label>
                            <input type="radio" id="eservice1" name="eservice" value="mBanking">
                            <label for="eservice1">Mobile Banking &nbsp;</label>
                            <input type="radio" id="eservice2" name="eservice" value="pBanking">
                            <label for="eservice2">Premium Banking &nbsp;</label>
                        </div>
                        <hr>
                        <b>B. i-BANKING</b>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email">
                        </div>

                        <div class="form-group">
                            <label>Service Required:</label>
                            <input type="radio" id="iservice1" name="iservice" value="viewonly">
                            <label for="iservice1">A. View Only &nbsp;</label>
                            <input type="radio" id="iservice2" name="iservice" value="fundtransfer">
                            <label for="iservice2">B. Fund Transfer &nbsp;</label>
                        </div>
                        <hr>
                        <b>Account to be linked</b>
                        <div class="form-group">
                            <label>Account Number:</label>
                            <input type="number" class="form-control" name="linkedAccNo">
                        </div>
                        <div class="form-group">
                            <label>Account Name:</label>
                            <input type="text" class="form-control" name="linkedAccName">
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection