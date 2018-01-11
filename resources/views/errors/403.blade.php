
<!DOCTYPE html>
<html>
    <head>
        <title>Forbidden</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="error-container">
            <div class="error-code">403</div>
            <div class="error-text">Forbidden</div>
            <div class="error-subtext">You don't have permission to access this page.</div>
            <center> <div class="panel-body">  <a class="btn btn-primary btn-lg" href="{{ URL::previous() }}">Go back</a>  </div> </center>
                  
        </div>   
    </body>
</html>
