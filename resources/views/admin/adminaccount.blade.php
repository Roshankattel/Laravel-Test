@extends('layouts.app')
@section('content')

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">

                    <h4><b>{{ __('BANK USER ACCOUNTS') }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('account/create')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true"> + Open New Account</a></b></h4>

            </div>
            <div class="card-body">
                <table class=" table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Reference Number</th>
                        <th>Account Name</th>
                        <th>Mobile Number</th>
                        <th>Status</th>
                        <th>View Data</th>
                        <th>Delete Data</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($accounts as $account)
                        @if($account->status == 'new')


                        <tr>
                            <td>{{$account->id}}</td>
                            <td>{{$account->reference_number}}</td>
                            <td>{{$account->first_name}} {{$account->middle_name}} {{$account->last_name}}</td>
                            <td>{{$account->mobile_no}}</td>
                            <td> <a href="{{action('AccountController@edit', $account['id'])}}" class="btn btn-primary btn-warning btn-sm" role="button" aria-pressed="true">Update status</a> </td>

                            <td> <a href="/account/{{$account->id}}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">View Data</a> </td>
                            <td>
                                {!!Form::open(['action' => ['AccountController@destroy',$account->id],'method'=>'POST','class'=>'pull-left'])!!}
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
