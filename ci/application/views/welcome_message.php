<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <?php $this->load->helper('url'); ?>

    <style type="text/css">

        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }

        .result {
            width: 23%;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<h1>Welcome to CodeIgniter!</h1>

<div id="body">
    <div class="wrapper">
        <div class="col-md-12 div_login">
            <div>
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <a class="navbar-brand" href="welcome">Home</a>
                    <a class="navbar-brand" href="post">Post</a>
                </nav>
                <h3 class="header">Please Enter Number.</h3>

            </div>


            <form method="post" action="" id="registration" name="registration">

                <div class="row">
                    <div class="form-group div_1">
                        <input type="number" class="form-control number_box" name="number" min="0" max="71" id="number"
                               value=0 required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group div_1">
                        <button type="button" class="btn btn-warning btn-block" id="sign_up" onclick="send();">
                            GO
                        </button>
                    </div>
                </div>

            </form>


            <table border="1" id="table">
                <tr>
                    <td class="result"> Dec</td>
                    <td class="result"> Hex</td>
                    <td class="result"> IE</td>
                    <td class="result"> Binary</td>
                    <td class="result"> CHAR</td>
                </tr>
            </table>


        </div>
    </div>


</div>

<script>
    function send() {

        var number = $("#number").val();
        jQuery.ajax({
            url: "<?php echo base_url();?>calculate/index",
            type: 'POST',
            data: {number: number},
            dataType: 'json',
            success: function (data) {
                if(data['str']== 'null'){
                    $("#table").append("<tr> <td >" + data['dec'] + "</td> <td >" + data['hex'] + "</td> <td> " + data['ie'] + "</td> <td >" + data['binary'] + "</td>  <td >"+ data['str'] +"</td> </tr>")

                }

                else if(data['str'].indexOf(' ') === -1){
                    $("#table").append("<tr> <td >" + data['dec'] + "</td> <td >" + data['hex'] + "</td> <td> " + data['ie'] + "</td> <td >" + data['binary'] + "</td>  <td ><iframe src='<?php echo base_url();?>svg.font/" + data['str'] + "-01.svg' width='50' height='50' ></td> </tr>")

                }
                else{
                    $("#table").append("<tr> <td >" + data['dec'] + "</td> <td >" + data['hex'] + "</td> <td> " + data['ie'] + "</td> <td >" + data['binary'] + "</td>  <td >"+ data['str'] +"</td> </tr>")

                }


            },
            error: function (jqXhr, textStatus, errorMessage) {
                alert('Please insert right number.');
            }
        });
    }

</script>
</body>
</html>