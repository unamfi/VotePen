<!DOCTYPE html>
<html>
<head>
    <title>403 Forbidden</title>

    <link href="https://fonts.googleapis.com/css?family=Dosis:400" rel="stylesheet" type="text/css">

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
            font-family: 'Dosis';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
            max-width: 40em;
            border: 2px dashed #b2c0c6;
            border-radius: 35px;
            padding: 2em;
            margin: 2em;
        }

        .title {
            font-size: 32px;
            margin-bottom: 40px;
        }

        .logo {
            max-width: 150px;
            height: auto;
            margin-bottom: 3em;
        }

        .footer {
            display: flex;
            justify-content: space-around;
            max-width: 40em;
            margin: 1em auto;
        }

        .footer a{
            color: #b0bec5;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <a href="/">
            <img src="{{ config('app.cdn_url') }}/imgs/v-logo.png" alt="VotePen" class="logo">
        </a>

        <div class="title">
            403 Forbidden. You don't have the required permission to be here.
        </div>
    </div>

    <div class="footer">
        <a href="https://twitter.com/VotePen">
            Twitter
        </a>

        <a href="https://votepen.tumblr.com">
            Blog
        </a>

        <a href="https://status.votepen.com">
            Status
        </a>
    </div>
</div>
</body>
</html>
