
<div class="topnav-cover">
    <div class="topnav" id="myTopnav">
        <a href="#home" id="logo" class="left">LOGO</a>
        <a id="backBtn" onclick="inputClose()"><i class="fas fa-arrow-left"></i></a>
        <div class="argi">
            <span id ="searchBtn" class="search-button"><i class="fa fa-search"></i></span>
            <input id="navSearch"  class="topnav-search" type="search" placeholder="Search">
        </div>
        <a class="right loginBtn" href="login.php" id="myBtn">LOGIN</a>

        <a id ="searchBtn1" onclick="inputOpen()" class="search-button"><i class="fa fa-search"></i></a>
        <a href="javascript:void(0);" class="icon"><i class="fa fa-bars"></i></a>
        <div class="dropdown">
            <button class="topnav-settings dropbtn"><span class="fas fa-ellipsis-v"></span></button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
                <div class="topnav-after-mobile">
                    <a class="right" href="login.php" id="myBtnMob">LOGIN</a>
                </div>
            </div>
        </div>

        </div>
    </div>

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <br><br>
            <div class="g-signin2" data-onsuccess="onSignIn"></div>
        </div>
    </div>


<script>
    let w = window.innerWidth; //Get the width of the screen!
    let body = document.getElementsByTagName("body")[0];
    let dropOpen = true;
    let logo = document.getElementById('logo');
    let navSearch = document.getElementById("navSearch");
    let drop = document.getElementsByClassName("dropdown-content")[0];
    let searchBtn = document.getElementById("searchBtn");
    let dropbtnIcon = document.getElementsByClassName("icon")[0];
    let backBtn = document.getElementById('backBtn');
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    };

    span.onclick = function() {
        modal.style.display = "none";
    };
    function inputOpen() {
        navSearch.style.display = 'block';
        dropbtnIcon.style.display = 'none';
        logo.style.display = 'none';
        backBtn.style.display = 'block';
        navSearch.focus();
    }
    function inputClose(){
        navSearch.style.display = 'none';
        dropbtnIcon.style.display = 'block';
        logo.style.display = 'block';
        backBtn.style.display = 'none';
    }
    body.onresize = function(){
        w = window.innerWidth;
        if(w > 600){
            navSearch.style.display = 'block';
            dropbtnIcon.style.display = 'none';
            backBtn.style.display = 'none';
            navSearch.style.backgroundColor = '#cccccc'
        }
    };

    function googleLogin() {
        document.getElementsByClassName("abcRioButtonContentWrapper")[0].click();
    }

    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    }

    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            console.log('User signed out.');
        });
    }

    window.onclick = function(event) {
        if (document.getElementsByClassName('dropbtn')[0].contains(event.target)  || dropbtnIcon.contains(event.target) && dropOpen === true){
            drop.style.display = "block";
            dropOpen = false;
        } else{
            drop.style.display = "none";
            dropOpen = true;
        }
        if(navSearch.contains(event.target) && w > 600){
            navSearch.style.backgroundColor = 'white'
        }else if(w <= 600){
            navSearch.style.backgroundColor = '#212121'
        }else{
            navSearch.style.backgroundColor = '#cccccc'
        }
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>