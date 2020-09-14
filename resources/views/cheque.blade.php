<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Cheque Book Request</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <STYLe>
        .invalid-feedback{
            display: block;
        }
    </STYLe>
</head>

<body>
    <center>
        <h1>CHEQUE BOOK REQUEST FORM</h1>
    </center>
    <div class="container">
        <form method="post" action="{{ url('cheque')}}">
        {{csrf_field() }}

            <div class="form-group">
                <label>Branch:</label></br>
                <input type="text" class="form-controller" name="branch">
                @if ($errors-> has('branch'))
                    <small class = "from-text invalid-feedback">{{$errors->first('branch')}}</small>
                @endif
            </div>

            <div class="form-group">
                <label>Date:</label></br>
                <input type="text" class="form-controller" name="date">
                @if ($errors-> has('date'))
                    <small class = "from-text invalid-feedback">{{$errors->first('date')}}</small>
                @endif
            </div>

            <div class="form-group">
                <label>Please Supply one Cheque book contating(10,20,30) leaves</label></br>
                <input type="number" class="form-controller" name="leaves">
                @if ($errors-> has('leaves'))
                    <small class = "from-text invalid-feedback">{{$errors->first('leaves')}}</small>
                @endif
            </div>

            <div class="form-group">
                <label>For Account No:</label></br>
                <input type="number" class="form-controller" name="accNumber">
                @if ($errors-> has('accNumber'))
                    <small class = "from-text invalid-feedback">{{$errors->first('accNumber')}}</small>
                @endif
            </div>

            <div class="form-group">
                <label>Account Name:</label></br>
                <input type="text" class="form-controller" name="accName">
                @if ($errors-> has('accName'))
                    <small class = "from-text invalid-feedback">{{$errors->first('accName')}}</small>
                @endif
            </div>

            <div class="form-group">
                <label>Currency of Account:</label></br>
                <input type="text" class="form-controller" name="currency">
                @if ($errors-> has('currency'))
                    <small class = "from-text invalid-feedback">{{$errors->first('currency')}}</small>
                @endif
            </div>

            <b><u>Cheque collection by authorized person</u></b>

            <div class="form-group">
                <label>Name of Authorized person:</label></br>
                <input type="text" class="form-controller" name="authName">
                @if ($errors-> has('authName'))
                    <small class = "from-text invalid-feedback">{{$errors->first('authName')}}</small>
                @endif
            </div>
            <button class="btn btn-primary">Submit</button>

        </form>
    </div>
</body>

</html>