<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debit/Internet Banking Reqest</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
</head>

<body>
    <div class="container">
        <h1>
            <center>DEBIT CARD/INTERNET BANKING REQUEST FORM</center>
        </h1>
        <form method="post" action="{{ url('debit')}}">
            {{csrf_field() }}
            <div class="form-group">
                <label>Branch:</label>
                <input type="text" class="form-controller" name="branch">
            </div>
            <div class="form-group">
                <label>Date:</label>
                <input type="text" class="form-controller" name="date">
            </div>
            <div class="form-group">
                <label>I/we request you to provide us below mentioned services offered by your bank.</label></br>
                <input type="checkbox" name="service1" value="visa">
                <label for="service1">VISA card &nbsp;</label>
                <input type="checkbox" name="service2" value="eBanking">
                <label for="service2">e-Banking &nbsp;</label>
                <input type="checkbox" name="service3" value="iBanking">
                <label for="service3">  i-Banking &nbsp;</label><br>
            </div>
            <div class="form-group">
                <label>Applicant's name:</label>
                <input type="text" class="form-controller" name="name">
            </div>
            <div class="form-group">
                <label>Applicant's address:</label>
                <input type="text" class="form-controller" name="address">
            </div>
            <div class="form-group">
                <label>Account number</label>
                <input type="number" class="form-controller" name="acNumber">
            </div>
            <b><u>A.VISA CARD</u></b>
            <div class="form-group">
                <label>Card Type:</label>
                <input type="checkbox" name="visatype1" value="visanew">
                <label for="visatype1">New &nbsp;</label>
                <input type="checkbox" name="visatype2" value="replacement">
                <label for="visatype2">Replacement &nbsp;</label>
                <input type="checkbox" name="visatype3" value="supplementary">
                <label for="visatype3">Supplementary &nbsp;</label>
                <input type="checkbox" name="visatype4" value="repin">
                <label for="visatype4">Repin &nbsp;</label><br>
                &emsp;&emsp;&emsp;&emsp;&ensp;
                <input type="checkbox" name="visatype5" value="debit">
                <label for="visatype5">Debit &nbsp;</label>
                <input type="checkbox" name="visatype6" value="usdDebit">
                <label for="visatype6">USD Debit &nbsp;</label>
                <input type="checkbox" name="visatype7" value="usdPrepaid">
                <label for="visatype7">USD Prepaid &nbsp;</label>
                <input type="checkbox" name="visatype8" value="instantCard">
                <label for="visatype8">Instant Card &nbsp;</label>
            </div>
            <div class="form-group">
                <u><b>To replace card</u></b></br>
                <label>Current card Number:</label>
                <input type="number" class="form-controller" name="acNumber">
            <div class="form-group">
                <label>Reason for replacement:</label>
                <input type="text" class="form-controller" name="reason">
            </div>
            <div class="form-group">
                <u><b> Supplementary card only</b></u></br>
                <label>Name:</label>
                <input type="number" class="form-controller" name="suppName">
            </div>

            <b><u>B.e-BANKING</u></b>
            <div class="form-group">
                <label>Mobile Number:</label>
                <input type="number" class="form-controller" name="mobile">
            </div>
            <div class="form-group">
                <label>Application For:</label>
                <input type="checkbox" name="etype1" value="enew">
                <label for="etype1">New &nbsp;</label>
                <input type="checkbox" name="etype2" value="delete">
                <label for="etype2">Delete &nbsp;</label>
                <input type="checkbox" name="etype3" value="numberChange">
                <label for="etype3">Number Change &nbsp;</label>
                <input type="checkbox" name="etype4" value="addAcc">
                <label for="etype4">Add Account &nbsp;</label><br>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <input type="checkbox" name="etype5" value="addMobile">
                <label for="etype5">Add Mob. No.&nbsp;</label>
                <input type="checkbox" name="etype6" value="mod">
                <label for="etype6">Modification &nbsp;</label>
                <input type="checkbox" name="etype7" value="add">
                <label for="etype7">Add &nbsp;</label>
                <input type="checkbox" name="etype8" value="e-repin">
                <label for="etype8">Repin &nbsp;</label>
            </div>
            <div class="form-group">
                <label>Change/Add Mobile No:</label>
                <input type="number" class="form-controller" name="CAmobile">
            </div>
            </div>

            <div class="form-group">
                <label>New Account Number:</label>
                <input type="number" class="form-controller" name="newAccNum">
            </div>
            <div class="form-group">
                <label>Required Service:</label>
                <input type="checkbox" name="service1" value="mBanking">
                <label for="service1">Mobile Banking &nbsp;</label>
                <input type="checkbox" name="service2" value="pBanking">
                <label for="service2">Premium Banking &nbsp;</label>
            </div>

            <b><u>C.i-BANKING</u></b>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-controller" name="email">
            </div>

            <div class="form-group">
                <label>Service Required:</label>
                <input type="checkbox" name="iservice1" value="viewonly">
                <label for="service1">A. View Only &nbsp;</label>
                <input type="checkbox" name="iservice2" value="fundtransfer">
                <label for="service2">B. Fund Transfer &nbsp;</label>
            </div>
            
            <b><u>Account to be linked</u></b>
            <div class="form-group">
                <table>
                    <tr>
                    <th>S.No</th>
                    <th>Account Number</th>
                    <th>Account Holder's Name</th>
                    </tr>
                    <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    </tr>
                    <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    </tr>
                    <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    </tr>
                </table>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>