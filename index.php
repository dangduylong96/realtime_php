<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Bootstrap Chat Box Example</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME  CSS -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>


    <div class="container">
        <div class="row pad-top pad-bottom">
            <div class="chat-box-footer">
                <div class="input-group">
                    <input id="message" type="text" class="form-control" placeholder="Enter Text Here...">
                    <span class="input-group-btn">
                        <button id="send" class="btn btn-info" type="button">SEND</button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- USING SCRIPTS BELOW TO REDUCE THE LOAD TIME -->
    <!-- CORE JQUERY SCRIPTS FILE -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- CORE BOOTSTRAP SCRIPTS  FILE -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.0/socket.io.dev.js"></script>
    <script>
        var socket = io('http://localhost:3000');
        socket.on('get_chat_server',function(data){
            alert(data);
        })
        $(document).ready(function(){
            $('#send').click(function(){
                var message=$('#message').val();
                console.log(message);
                socket.emit('send_chat',message)
            })
        })
    </script>
</body>

</html>
