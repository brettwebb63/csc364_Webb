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
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">

        <style>
         
            div.container{
                width: 100%;
                padding-left: 0px;
            }
            div.footerCenter{
                text-align: center;
                color: white;
                padding-left:30px;
            }
            div.footerRight{
                padding: 40px 0px 0px 0px;
            }
            div.footerLeft{
                text-align: center;
                color: white;
                padding-left:30px;
            }
          
            div.contentrow{
                padding-top: 15px;
            }
            .content{
                background-color: #EBF2EA;
                height:100%;
            }
            .UpdateOrAddForm{
                background-color: #EBF2EA;
                height:800px;
            }  
            div.filler{
                background-color: #C0B283;
                margin-bottom: 0px;
                margin-top: 0px;
                height: 800px;
            }
            .sidebar{
                background-color: #C0B283;
                margin-bottom: 0px;
                margin-top: 0px;
                height: 100%;
            }
            .paddingNeeded{
                padding-left: 15px;
            }
            footer{
                text-align: center;
                background-color: #2C3531;
                padding-bottom: 40px;
            }
            nav{
                text-align: right;
                padding-right:50px;
            }
            header{
                background-color: #2C3531;
                color: white;
                padding-bottom: 25px; 
            }
            div.title{
                font-family:Cinzel;
            }
            img{
                max-width: 1000px;
                max-height: 225px;
                align: center;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0px 0px 0px 0px;
                overflow: hidden;
                background-color: #C0B283;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #2C3531;
            }
            div.Warranty{
                padding: 40px 0px 0px 0px;
            }
            div.review{
                padding: 40px 0px 0px 0px;
            }
            #CartTable th{
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
            }
            #CartTable td, #CartTable th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #CartTable tr:hover {background-color: #f5f5f5;}

        </style>
    </head>
            <header>
                <div class="container">
                <div class="row">
                    <div class="title col-xs-3">
                        <h2 style="text-align:center">Tina the Tiburon Inc.</h2>
                    </div>
                    <div class="col-xs-9">
                        <nav>
                            <h4> <a href = "index.php" button id="button1id" name="button1id" class="btn btn-md btn-primary" >Home</a></button> | <a href = "cartView.php" button id="button4id" name="button4id" class="btn btn-md btn-success" >View Cart</a></button> | <a href = "adminAllProducts.php" button id="button3id" name="button3id" class="btn btn-md btn-primary" >View All Products</a></button> |  <a href = "addingAProduct.php" button id="button2id" name="button2id" class="btn btn-md btn-success" >Add A Product</a></button></h4>
                        </nav>
                    </div>
                </div>
                <div class="col-xs-12">

                </div>
                </div>
            </header>
    
pageHeader;

    }
}