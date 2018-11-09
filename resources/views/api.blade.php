<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
        <title>API - Simple Wallet App</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <style>
            a {color: #039;background-color: transparent;text-decoration: none;}
            a:hover{color:orangered;}
        </style>
    </head>
    <body> 
        <div class="container">
            <h2 style="text-align:center;"><u>API - Simple Wallet APP</u></h2>
            <div class="row" > 
                <div class="col-md-9 col-md-offset-3">
                    <p><br>
                        The master project repository is
                        <a href="https://github.com/zuams/Api-SimpleWalletApp" target="_blank">https://github.com/zuams/Api-SimpleWalletApp</a>
                    </p>
                    
                    <h3><u>Accounts</u></h3>
                    <ol>
                       <li><a href="{{ url('/api/accounts')}}" target="_blank">{{ url('/api/accounts')}}</a></li>
                    </ol>
                    
                    <h3><u>Transaction</u></h3>
                    <ol>
                       <li><a href="{{ url('/api/transactions')}}" target="_blank">{{ url('/api/transactions')}}</a></li>
                    </ol>
                    
                    <h3><u>Expense cat</u></h3>
                    <ol>
                        <li><a href="{{ url('/api/expensecat')}}" target="_blank">{{ url('/api/expensecat')}}</a></li>
                    </ol>
                    
                    <h3><u>Income cat</u></h3>
                    <ol>
                       <li><a href="{{ url('/api/incomecat')}}" target="_blank">{{ url('/api/incomecat')}}</a></li>
                    </ol>
                </div>
            </div>
        </div>
                
        <!-- JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>        
    </body>
</html>
