<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <?php $this->load->helper('url'); ?>

    <style type="text/css">
        body {
            background-color: #fff;
            margin: 100px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
            width: 70%;



        }
        #body {
            margin: 0 30px 0 200px;
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
        #blog{
            border-style: solid;
            border-width: 1px;

            height:150px;
            margin-top: 10px;
        }
        #postname{
            width: 500px;
            border-style: solid;
            border-width: 1px;
        }
        .posts{
            border-style: solid;
            border-width: 1px;

            width: 500px;
        }


    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>



    <link href="adminassets/css/charisma-app.css" rel="stylesheet">
    <link href='adminassets/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='adminassets/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='adminassets/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='adminassets/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='adminassets/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='adminassets/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>


</head>
<body>

<h1>Welcome to CodeIgniter!</h1>

<div id="body">
    <div class="wrapper">
        <br class="col-md-12 div_login">
            <div>
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">

                    <a class="navbar-brand" href="welcome">Home</a>
                    <a class="navbar-brand" href="post">Post</a>

                </nav>
            </div>
        <div class="form-group">
            <label for="exampleTextarea">Publish a post</label>
            <textarea class="form-control" id="publish_post_text" name="publish_post_text" rows="3"></textarea>
        </div>
        <div id="post">

            <?php
            foreach ($posts as $post){
                ?>

                <div class="row">
                    <div class="box col-md-12">
                        <div class="box-inner">
                            <div class="box-header well" data-original-title="" >
                                <h2 style="text-align: center"><i class="glyphicon glyphicon-tint"></i> <?=$post['name']?></h2>

                            </div>
                            <div class="box-content">
                                <?=$post['content']?><hr>
                                Published at: <?=$post['date']?>
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div><!--/row-->

            <?php
            }
            ?>
        </div>

    </div>

</div>

<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content" style="width:140%;height:70% ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">create a post</h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="pub();">Publish</button>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div id="blog" contentEditable="true" ></div>
                </div>
                <div class="form-group">
                    <div style="font-size: 25px;">Please input Post Name</div>
                    <div class="navbar-brand" id="postname" contentEditable="true" required></div>
                </div>
                <div class="form-group">
                    <table border="1" id="post_table">
                        <tr>
                            <td ><button id="press-01"><img src="<?php echo base_url();?>svg.font/press-01.svg" width='30' height='30' onclick="insert('press-01')" ></button>
                            <td ><button id="world-01"><img src="<?php echo base_url();?>svg.font/world-01.svg" width='30' height='30' onclick="insert('world-01')"></button>
                            <td ><button id="wheelchair-01"><img src="<?php echo base_url();?>svg.font/wheelchair-01.svg" width='30' height='30' onclick="insert('wheelchair-01')"></button>
                            <td ><button id="wireless-01"><img src="<?php echo base_url();?>svg.font/wireless-01.svg" width='30' height='30' onclick="insert('wireless-01')"></button>
                            <td ><button id="wheel-01"><img src="<?php echo base_url();?>svg.font/wheel-01.svg" width='30' height='30' onclick="insert('wheel-01')"></button>
                            <td ><button id="infinity-01"><img src="<?php echo base_url();?>svg.font/infinity-01.svg" width='30' height='30' onclick="insert('infinity-01')"></button>
                            <td ><button id="voice-01"><img src="<?php echo base_url();?>svg.font/voice-01.svg" width='30' height='30' onclick="insert('voice-01')"></button>
                            <td ><button id="training-01"><img src="<?php echo base_url();?>svg.font/training-01.svg" width='30' height='30' onclick="insert('training-01')"></button>
                            <td ><button id="touch-01"><img src="<?php echo base_url();?>svg.font/touch-01.svg" width='30' height='30' onclick="insert('touch-01')"></button>
                            <td ><button id="hello-01"><img src="<?php echo base_url();?>svg.font/hello-01.svg" width='30' height='30' onclick="insert('hello-01')"></button>

                        </tr>
                        <tr>
                            <td ><button id="down-01"><img src="svg.font/down-01.svg" width='30' height='30' onclick="insert('down-01');"></button>
                            <td ><button id="location-01"><img src="svg.font/location-01.svg" width='30' height='30' onclick="insert('location-01')"></button>
                            <td ><button id="search-01"><img src="<?php echo base_url();?>svg.font/search-01.svg" width='30' height='30' onclick="insert('search-01')"></button>
                            <td ><button id="man-01"><img src="<?php echo base_url();?>svg.font/man-01.svg" width='30' height='30' onclick="insert('man-01')"></button>
                            <td ><button id="female-01"><img src="<?php echo base_url();?>svg.font/female-01.svg" width='30' height='30' onclick="insert('female-01')"></button>
                            <td ><button id="video-01"><img src="<?php echo base_url();?>svg.font/video-01.svg" width='30' height='30' onclick="insert('video-01')"></button>
                            <td ><button id="smile-01"><img src="<?php echo base_url();?>svg.font/smile-01.svg" width='30' height='30' onclick="insert('smile-01')"></button>
                            <td ><button id="sunrise-01"><img src="<?php echo base_url();?>svg.font/sunrise-01.svg" width='30' height='30' onclick="insert('sunrise-01')"></button>
                            <td ><button id="stop-01"><img src="<?php echo base_url();?>svg.font/stop-01.svg" width='30' height='30' onclick="insert('stop-01')"></button>
                            <td ><button id="sun-01"><img src="<?php echo base_url();?>svg.font/sun-01.svg" width='30' height='30' onclick="insert('sun-01')"></button>

                        </tr>
                        <tr>
                            <td ><button id="phone-01" type="button" onclick="insert('phone-01');"><img src="<?php echo base_url();?>svg.font/phone-01.svg" width='30' height='30' "></button>
                            <td ><button id="call-01"><img src="<?php echo base_url();?>svg.font/call-01.svg" width='30' height='30' onclick="insert('call-01')"></button>
                            <td ><button id="tooth-01"><img src="<?php echo base_url();?>svg.font/tooth-01.svg" width='30' height='30' onclick="insert('tooth-01')"></button>
                            <td ><button id="time-01"><img src="<?php echo base_url();?>svg.font/time-01.svg" width='30' height='30' onclick="insert('time-01')"></button>
                            <td ><button id="pour-01"><img src="<?php echo base_url();?>svg.font/pour-01.svg" width='30' height='30' onclick="insert('pour-01')"></button>
                            <td ><button id="infinity-01"><img src="<?php echo base_url();?>svg.font/infinity-01.svg" width='30' height='30' onclick="insert('infinity-01')"></button>
                            <td ><button id="check-01"><img src="<?php echo base_url();?>svg.font/check-01.svg" width='30' height='30' onclick="insert('check-01')"></button>
                            <td ><button id="male-01"><img src="<?php echo base_url();?>svg.font/male-01.svg" width='30' height='30' onclick="insert('male-01')"></button>
                            <td ><button id="attachment-01"><img src="<?php echo base_url();?>svg.font/attachment-01.svg" width='30' height='30' onclick="insert('attachment-01')"></button>
                            <td ><button id="tap-01"><img src="<?php echo base_url();?>svg.font/tap-01.svg" width='30' height='30' onclick="insert('tap-01')"></button>

                        </tr>
                        <tr>
                            <td ><button id="chat-01"><img src="<?php echo base_url();?>svg.font/chat-01.svg" width='30' height='30' onclick="insert('chat-01')"></button>
                            <td ><button id="fish-01"><img src="<?php echo base_url();?>svg.font/fish-01.svg" width='30' height='30' onclick="insert('fish-01')"></button>
                            <td ><button id="idea-01"><img src="<?php echo base_url();?>svg.font/idea-01.svg" width='30' height='30' onclick="insert('idea-01')"></button>
                            <td colspan="2"><button id="space-01"><img src="<?php echo base_url();?>svg.font/space-01.svg" width='79' height='30' onclick="insert('space-01')"></button>
                            <td ><button id="del-01"><img src="<?php echo base_url();?>svg.font/del-01.svg" width='30' height='30' onclick="insert('del-01')"></button>
                            <td ><button id="punctuation-01"><img src="<?php echo base_url();?>svg.font/punctuation-01.svg" width='30' height='30' onclick="insert('punctuation-01')"></button>
                            <td ><button id="scp-01"><img src="<?php echo base_url();?>svg.font/scp-01.svg" width='30' height='30' onclick="insert('scp-01')"></button>
                            <td colspan="2"><button id="enter-01"><img src="<?php echo base_url();?>svg.font/enter-01.svg" width='79' height='30' onclick="insert('enter-01')"></button>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#publish_post_text").focus(function(){
            $('#blog').html('');
            $('#postname').text('');
            $('#myModal').modal('show');
        }) ;
    });
    function insert(id) {
        $("#blog").append("<img src='svg.font/"+id+".svg' width='40' height='40'/>");

        placeCaretAtEnd( document.getElementById("blog") );
    }
    function placeCaretAtEnd(el) {
        el.focus();
        if (typeof window.getSelection != "undefined"
            && typeof document.createRange != "undefined") {
            var range = document.createRange();
            range.selectNodeContents(el);
            range.collapse(false);
            var sel = window.getSelection();

            var txtNode = document.createTextNode(" ");
            range.insertNode(txtNode);

            sel.removeAllRanges();
            sel.addRange(range);
        } else if (typeof document.body.createTextRange != "undefined") {
            var textRange = document.body.createTextRange();
            textRange.moveToElementText(el);
            textRange.collapse(false);
            textRange.select();
        }
    }
    function pub() {

        var content=$('#blog').html();
        var name=$('#postname').text();
        var d = new Date();
        var month=d.getMonth()+1;
        var date=d.getDate()+"-"+month+"-"+d.getFullYear()+" at "+d.getHours()+" :"+d.getMinutes();

        if (name==""){
            alert("Please insert post name!");
        }
        else{
            jQuery.ajax({
                url: "<?php echo base_url();?>post/pub",
                type: 'POST',
                data: {content: content,name:name,date:date},
                dataType: 'json',
                success: function (data) {
                    if(data['result']=="ok"){
                        $("#post").append('<div class="row"><div class="box col-md-12"> <div class="box-inner"> <div class="box-header well" data-original-title=""><h2><i class="glyphicon glyphicon-tint"></i>'+name+'</h2></div><div class="box-content">'+content+'<hr>Published at: '+d.getDate()+"-"+month+"-"+d.getFullYear()+" at "+d.getHours()+" :"+d.getMinutes());

                        $("#post").append(' </div></div></div></div>');

                        $('#myModal').modal('hide');
                    }

                },
                error: function (jqXhr, textStatus, errorMessage) {
                    alert('Please insert right number.');
                }
            });
        }

    }
</script>

</body>

</html>