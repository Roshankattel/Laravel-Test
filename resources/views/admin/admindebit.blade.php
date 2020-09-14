@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h4><b>{{ __('USER CREDIT/DEBIT CARD REQUESTS') }}</b></h4>
                    </center>
                </div>
                <div class="card-body">
                    <table class=" table table-striped">
                        <thead>
                            <tr>
                                <th>Rec. Id</th>
                                <th>User Id</th>
                                <th>Account Number</th>
                                <th>Applicant Name</th>
                                <th>View Data</th>
                                <th>Status</th>
                                <th>Delete Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($debits as $debit)
                            @if($debit->status=="new")
                            <tr>
                                <td>{{$debit->id}}</td>
                                <td>{{$debit->user_id}}</td>
                                <td>{{$debit->account_number}}</td>
                                <td>{{$debit->applicants_name}}</td>
                                <td> <a href="/debit/{{$debit->id}}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">View Data</a> </td>
                                <td>
                                <a href="{{action('DebitController@edit', $debit['id'])}}" class="btn btn-success btn-sm" role="button" aria-pressed="true">Approve</a>
                                </td>
                                <td>

                                    {!!Form::open(['action' => ['DebitController@destroy',$debit->id],'method'=>'POST','class'=>'pull-left'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete Data',['class'=>'btn btn-danger btn-sm'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
