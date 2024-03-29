<?php
include('./classes/DB.php');
include('./classes/Login.php');
	$usrid = Login::isLoggedIn();
	$usrname="";
	$usrname=DB::query('SELECT username FROM users WHERE id=:userid', array(':userid'=>$usrid))[0]['username'];
	
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRM Connect</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
    <header class="hidden-sm hidden-md hidden-lg">
        <div class="searchbox">
            <form>
                <h1 class="text-left">SRM Connect</h1>
                <div class="searchbox"><i class="glyphicon glyphicon-search"></i>
                        <input class="form-control sbox" type="text">
						<ul class="list-group autocomplete" style="position:absolute;width:100%; z-index: 100">
						</ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">MENU <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li role="presentation"><a href="profile.php?username=<?php echo $usrname;?>">My Profile</a></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><a href="index1.php">Timeline </a></li>
                        <li role="presentation"><a href="index.html">Home </a></li>
                        <li role="presentation"><a href="notify.php">Notifications </a></li>
                        <li role="presentation"><a href="my-account.php">My Account</a></li>
						<li role="presentation"><a href="messages.html">Messages</a></li>
                        <li role="presentation"><a href="logout.php">Logout </a></li>
                    </ul>
                </div>
            </form>
        </div>
        <hr>
    </header>
    <div>
        <nav class="navbar navbar-default hidden-xs navigation-clean">
            <div class="container">
                 <div class="navbar-header"><a class="navbar-brand navbar-link" href="index1.php"><i class="icon ion-ios-people"></i></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <form class="navbar-form navbar-left">
                        <div class="searchbox"><i class="glyphicon glyphicon-search"></i>
                            <input class="form-control sbox" type="text">
							<ul class="list-group autocomplete" style="position:absolute;width:100%; z-index: 100">
							</ul>
                        </div>
                    </form>
                    <ul class="nav navbar-nav hidden-md hidden-lg navbar-right">
                        <li role="presentation"><a href="index1.php">Timeline</a></li>
                        <li class="dropdown open"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" href="#">User <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li role="presentation"><a href="profile.php?username=<?php echo $usrname;?>">My Profile</a></li>
                                <li class="divider" role="presentation"></li>
                                <li role="presentation"><a href="index1.php">Timeline </a></li>
                                <li role="presentation"><a href="index.html">Home</a></li>
                                <li role="presentation"><a href="notify.php">Notifications </a></li>
                                <li role="presentation"><a href="my-account.php">My Account</a></li>
								<li role="presentation"><a href="messages.html">Messages</a></li>
                                <li role="presentation"><a href="logout.php">Logout </a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav hidden-xs hidden-sm navbar-right">
                        <li role="presentation"><a href="cms/contribute.php">Contribute</a></li>
                        <li role="presentation"><a href="cms">Articles</a></li>
                        <li role="presentation"><a href="cms/branches.html">Branches</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">User <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li role="presentation"><a href="profile.php?username=<?php echo $usrname;?>">My Profile</a></li>
                                <li class="divider" role="presentation"></li>
                                <li role="presentation"><a href="index1.php">Timeline </a></li>
                                <li role="presentation"><a href="index.html">Home </a></li>
                                <li role="presentation"><a href="notify.php">Notifications </a></li>
                                <li role="presentation"><a href="my-account.php">My Account</a></li>
								<li role="presentation"><a href="messages.html">Messages</a></li>
                                <li role="presentation"><a href="logout.php">Logout </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <h1>My Messages</h1></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group" id="users">
                    </ul>
                </div>
                <div class="col-md-9" style="position:relative;">
                    <ul class="list-group">
                        <li class="list-group-item" id="m" style="overflow:auto;height:500px;margin-bottom:55px;">
                        </li>
                    </ul>
                    <button class="btn btn-default msg-button-send" id='sendmessage' type="button">SEND </button>
                    <div class="message-input-div">
                        <input id="messagecontent" type="text" style="width:100%;height:45px;outline:none;font-size:16px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <p class="copyright">SRM Connect© 2022</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script type="text/javascript">
    SENDER = window.location.hash.split('#')[1];
    USERNAME = "";
    function getUsername() {
            $.ajax({

                    type: "GET",
                    url: "api/users",
                    processData: false,
                    contentType: "application/json",
                    data: '',
                    success: function(r) {
                            USERNAME = r;
                    }
            })
    }

    $(document).ready(function() {

            $('.sbox').keyup(function() {
                        $('.autocomplete').html("")
                        $.ajax({

                                type: "GET",
                                url: "api/search?query=" + $(this).val(),
                                processData: false,
                                contentType: "application/json",
                                data: '',
                                success: function(r) {
                                        r = JSON.parse(r)
                                        for (var i = 0; i < r.length; i++) {
                                                console.log(r[i].body)
                                                $('.autocomplete').html(
                                                        $('.autocomplete').html() +
                                                        '<a href="profile.php?username='+r[i].username+'#'+r[i].id+'"><li class="list-group-item"><span>'+r[i].body+'</span></li></a>'
                                                )
                                        }
                                },
                                error: function(r) {
                                        console.log(r)
                                }
                        })
                })
			
			
			$(window).on('hashchange', function() {
                    location.reload()
            })

            $('#sendmessage').click(function() {
                    $.ajax({

                            type: "POST",
                            url: "api/message",
                            processData: false,
                            contentType: "application/json",
                            data: '{ "body": "'+ $("#messagecontent").val() +'", "receiver": "'+ SENDER +'" }',
                            success: function(r) {
                                    location.reload()
                            },
                            error: function(r) {

                            }
                    })
            })

            $.ajax({

                    type: "GET",
                    url: "api/musers",
                    processData: false,
                    contentType: "application/json",
                    data: '',
                    success: function(r) {
                            r = JSON.parse(r)
                            for (var i = 0; i < r.length; i++) {
                                    $('#users').append('<li id="user'+i+'" data-id='+r[i].id+' class="list-group-item" style="background-color:#FFF;"><span style="font-size:16px;"><strong>'+r[i].username+'</strong></span></li>')
                                    $('#user'+i).click(function() {
                                            window.location = 'messages.php#' + $(this).attr('data-id')
                                    })
                            }
                    }
            })

            $.ajax({

                    type: "GET",
                    url: "api/messages?sender="+SENDER,
                    processData: false,
                    contentType: "application/json",
                    data: '',
                    success: function(r) {
                            r = JSON.parse(r)
                            $.ajax({

                                    type: "GET",
                                    url: "api/users",
                                    processData: false,
                                    contentType: "application/json",
                                    data: '',
                                    success: function(u) {
                                            USERNAME = u;
                                            for (var i = 0; i < r.length; i++) {
                                                    if (r[i].Sender == USERNAME) {
                                                            $('#m').append('<div class="message-from-me message"><p style="color:#FFF;padding:10px;">'+r[i].body+'</p></div><div class="message-spacer message"><p>'+r[i].body+'</p></div>')
                                                    } else {
                                                            $('#m').append('<div class="message-from-other message"><p>'+r[i].body+'</p></div><div class="message-spacer message"><p>'+r[i].body+'</p></div>')
                                                    }
                                            }
                                    }
                            })
                    },
                    error: function(r) {
                            console.log(r)
                    }
             })
    })
    </script>
</body>

</html>
