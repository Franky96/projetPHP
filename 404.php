<?php



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Page Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style/moreProductCss.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>


        html {
            color: #888;
            display: table;
            font-family: sans-serif;

            text-align: center;
            width: 100%;
        }

        body {
            display: table-cell;
            vertical-align: middle;
            margin: 2em auto;
        }

        .notfound {
            color: #555;
            font-size: 2em;
            font-weight: 400;
        }

        p {
            margin: 0 auto;
            width: 280px;
        }

        @media only screen and (max-width: 280px) {

            body, p {
                width: 95%;
            }

            .notfound {
                font-size: 1.5em;
                margin: 0 0 0.3em;
            }

        }

        #containerNotfound {
            margin-top: 150px;
            margin-left: 62px;
        }

    </style>
</head>
<body>
<?php require_once('headerMoreproduct.php');
Head("");
?>
<div id="containerNotfound">
    <h1 class="notfound">Page Not Found</h1>

    <p>Sorry, but the page you were trying to view does not exist.</p>
</div>
</body>
<script src="script/jquery-1.11.1.min.js"></script>
<script src="script/Moreproduct.js"></script>
</html>
<!-- IE needs 512+ bytes: http://blogs.msdn.com/b/ieinternals/archive/2010/08/19/http-error-pages-in-internet-explorer.aspx -->
