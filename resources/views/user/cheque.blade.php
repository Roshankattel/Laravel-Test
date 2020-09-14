@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <center><h4><b>{{ __('CHEQUE BOOK REQUEST FORM') }}</b></h4></center>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ url('cheque')}}">
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
                            <label>Date (DD/MM/YYYY):</label></br>
                            <input type="text" class="form-control" name="date">
                        </div>

                        <div class="form-group">
                            <label>Please supply one Cheque Book contating leaves:</label><br>
                            <input type="radio" id="chequeleaves1" name="leaves" value="10">
                            <label for="chequeleaves1">10 &nbsp;</label>
                            <input type="radio" id="chequeleaves2" name="leaves" value="20">
                            <label for="chequeleaves2">20 &nbsp;</label>
                            <input type="radio" id="chequeleaves1" name="leaves" value="30">
                            <label for="chequeleaves3">30 &nbsp;</label>
                        </div>

                        <div class="form-group">
                            <label>For Account No:</label></br>
                            <input type="number" class="form-control" name="accNumber">

                        </div>

                        <div class="form-group">
                            <label>Account Name:</label></br>
                            <input type="text" class="form-control" name="accName">
                        </div>

                        <div class="form-group">
                            <label>Currency of Account:</label></br>
                            <input type="text" class="form-control" name="currency">
                        </div>
                        <hr>
                        <b>CHEQUE COLLECTION BY AUTHORIZED PERSON</b>
                        <div class="form-group">
                            <label>Name of Authorized person:</label></br>
                            <input type="text" class="form-control" name="authName">
                        </div>
                        <button class="btn btn-primary">Submit</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection