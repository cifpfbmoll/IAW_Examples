<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Taules multiplicar</h1>
            
            <?php

            for ($i=1; $i<=10; $i++):
                ?>
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <h2>Taula del <?= $i ?></h2>
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td>1x3=</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>2x3=</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>3x3=</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>4x3=</td>
                                <td>12</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <h2>Taula del 4</h2>
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td>1x4=</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>2x4=</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>3x4=</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>4x4=</td>
                                <td>16</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
             endfor;  // End for $i iteration
            ?>
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
    </html>
    