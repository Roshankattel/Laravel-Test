@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">

                    @if ((auth()->user()->id) == 1)
                    <center>
                        <h4><b>{{ __('ADMIN DASHBOARD') }}</b></h4>
                    </center>
                    @else
                    <center>
                        <h4><b>{{ __('DASHBOARD') }}</b></h4>
                    </center>
                    @endif
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <div class="cards-list1">

                        <div class="card1 1">
                            @if ((auth()->user()->id) == 1)
                            <a href="{{ url('account/')}}">
                                @else
                                <a href="{{ url('account/create')}}">
                                    @endif
                                    <div class="card_image1" style="background-color:#f8d7da;"></div>
                                    <div class="card_title1 title1-black">
                                        <p>ACCOUNT OPENING FORM</p>
                                    </div>
                                </a>
                        </div>

                        <div class="card1 2">
                            @if ((auth()->user()->id) == 1)
                            <a href="{{ url('cheque/')}}">
                                @else
                                <a href="{{ url('cheque/create')}}">
                                    @endif
                                    <div class="card_image1" style="background-color:#b4f882 ;"> </div>
                                    <div class="card_title1 title1-black">
                                        <p>CHEQUE BOOK REQUEST</p>
                                    </div>
                                </a>
                        </div>

                        <div class="card1 3">
                            @if ((auth()->user()->id) == 1)
                            <a href="{{ url('debit/')}}">
                                @else
                                <a href="{{ url('debit/create') }}">
                                    @endif
                                    <div class="card_image1" style="background-color:#f8c182;"> </div>
                                    <div class="card_title1 title1-black">
                                        <p>CREDIT/DEBIT CARD REQUEST</p>
                                    </div>
                                </a>
                        </div>

                        <div class="card1 4">
                            @if ((auth()->user()->id) == 1)
                            <a href="{{ url('IB/')}}">
                                @else
                                <a href="{{ url('IB/create') }}">
                                    @endif
                                    <div class="card_image1" style="background-color:#f9a4e8 ;"></div>
                                    <div class="card_title1 title1-black">
                                        <p>INTERNET BANKING REQUEST</p>
                                    </div>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="{{ asset('css/dashboard-button.css') }}" rel="stylesheet">
@endsection