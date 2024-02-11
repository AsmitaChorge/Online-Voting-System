<?php
    session_start();
    if(!iset($_SESSTON['userdata'])){
        header("location:../");
    }
?>

<html>
    <head>
        <title>Online Voting System - Dashboard</title>
    </head>
    <body>
        <button>Back</button>
        <button>logout</button>
        <h1>Online Voting System</h1>
        <hr>
        <div id="profile"></div>
        <div id="group" ></div>
    </body>
</html>

