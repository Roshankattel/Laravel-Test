@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h4><b>{{ __('USER CHEQUE BOOK REQUESTS') }}</b></h4>
                    </center>
                </div>
                <div class="card-body">
                    <table class=" table table-striped">
                        <thead>
                            <tr>
                                <th>Rec. Id</th>
                                <th>User Id</th>
                                <th>Account Number</th>
                                <th>Account Name</th>
                                <th>View Data</th>
                                <th>Status</th>
                                <th>Delete Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cheques as $cheque)
                            @if($cheque->status=="new")
                            <tr>
                                <td>{{$cheque->id}}</td>
                                <td>{{$cheque->user_id}}</td>
                                <td>{{$cheque->account_number}}</td>
                                <td>{{$cheque->account_name}}</td>
                                <td class > <a href="/cheque/{{$cheque->id}}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">View Data</a> </td>
                                <td>
                                <a href="{{action('ChequeController@edit', $cheque['id'])}}" class="btn btn-success btn-sm" role="button" aria-pressed="true">Approve</a>
                                </td>
                                <td>

                                    {!!Form::open(['action' => ['ChequeController@destroy',$cheque->id],'method'=>'POST','class'=>'pull-left'])!!}
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