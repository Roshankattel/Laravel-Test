 @extends('layouts.app')
 @section('content')

 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-10">
             <div class="card">
                 <div class="card-header">
                     <center>
                         <h4><b>ID-{{$show_cheque->id}} CHEQUE BOOK REQUEST DETAILS</b></h4>
                     </center>
                 </div>
                 <div class="card-body">
                     <div>
                         <b>Branch:</b>
                         &nbsp;{{$show_cheque->branch}}
                     </div>

                     <div>
                         <b>Date:</b>
                         &nbsp;{{$show_cheque->date}}
                     </div>

                     <div>
                         <b>No of leaves:</b>
                         &nbsp;{{$show_cheque->leaves}}
                     </div>

                     <div>
                         <b>Account Number:</b>
                         &nbsp;{{$show_cheque->account_number}}

                     </div>

                     <div>
                         <b>Account Name:</b>
                         &nbsp;{{$show_cheque->account_name}}
                     </div>

                     <div>
                         <b>Currency of Account:</b>
                         &nbsp;{{$show_cheque->currency}}
                     </div>
                     <div>
                         <hr>
                         <b> COLLECTION BY AUHORIZED PERSON</b><br>
                         <b>Name of Authorized person:</b>
                         &nbsp;{{$show_cheque->auth_name}}
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 @endsection