<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/6/2018
 * Time: 10:18 PM
 */

class mainHeaderTemplate{
    public static function pageHeader()
    {
        echo <<<pageHeader
            <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Latest compiled and minified CSS - get from getbootstrap.com-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            div.container{
            width: 100%;
            padding-left: 0px;
            }
            div.contentrow{
            padding-top: 15px;
            }
            main{
                background-color: #EBF2EA;
                margin-left: 0px;
                margin-right:0px;
                padding-bottom: 0px;
            }
            aside{
                background-color: #888C46;
                margin-bottom: 0px;
                margin-top: 0px;
                height: 1150px;
            }
            footer{
                text-align: center;
                background-color: #132226;
            }
            nav{
                text-align: right;
                padding-right:50px;
            }
            header{
                background-color: #132226;
                color: white;
            }
        </style>
    </head>
            <header>
                <div class="row">
                    <div class="col-xs-3">
                        <h6>ehhhhh</h6>
                    </div>
                    <div class="col-xs-9">
                        <nav>
                            <h4> <a href = "index.php" button id="button1id" name="button1id" class="btn btn-md btn-primary" >Home</a></button> | Contact | Cart | About |  <a href = "addingAProduct.php" button id="button2id" name="button2id" class="btn btn-md btn-success" >Add A Product</a></button></h4>
                        </nav>
                    </div>
                </div>
            </header>
pageHeader;

    }
}