<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

</head>

<body>
 
    <div class="header">
        <img class="logo" src="winteclogo.png">
        <span class="title">Industry Relationship Management System</span>
        <div class="usercol">
            <i class="fas fa-sign-out-alt"></i>
            <i class="fas fa-cog"></i>
            <img src="user.jpg">
        </div>

    </div>
    <div class="clearfix wrapper">
        <nav class="navigation ">
            <ul clas="mainmenu">
                <li>
                    <a class="active" href="dashboard.html">Dashboard</a>
                </li>
                <li>
                    <a href="">Lead</a>
                    <ul class="submenu">
                        <li>
                            <a>Approved lead</a>
                        </li>
                        <li>
                            <a>Lead list</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="student.html">Student</a>
                    <ul class="submenu">
                        <li>
                            <a href="">Application List</a>
                        </li>
                        <li>
                            <a href="">Student Information</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="Host.html">Message</a>
                </li>
                <li>
                    <a href="Host.html">Message</a>
                </li>
            </ul>
        </nav>

        <div class="mainSection">

            <div class="row">
                <div class="col message-wrapper">
                    <h4>
                        <i class="fas fa-arrow-circle-right"></i>Lead Arrangement </h4>

                    <ul class="message-content">
                        <li>
                            <a href="">New lead</a>
                        </li>
                        <li>
                            <a href="">Lead investigation</a>
                        </li>
                    </ul>
                </div>
                <div class="col message-wrapper">
                    <h4>
                        <i class="fas fa-arrow-circle-right"></i>Interview Arrangement</h4>
                    <ul class="message-content">
                        <li>
                            <a href="">Introduce Student</a>
                        </li>
                        <li>
                            <a href="">New interview request</a>
                        </li>
                        <li>
                            <a href="">Interview List</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col message-wrapper">
                    <h4>
                        <i class="fas fa-arrow-circle-right"></i>Supervisor Arrangement</h4>
                        <ul class="message-content">
                            <li>
                                <a href="">Supervisor allocation</a>
                            </li>
                        </ul>   
                </div>
                <div class="col message-wrapper">
                    <h4>
                        <i class="fas fa-arrow-circle-right"></i>Placement Arrangement</h4>

                        <ul class="message-content">
                            <li>
                                    <a href="">Process contracts</a>
                            </li>
                            <li>
                                <a href="">Proposal list</a>
                            </li>
                        </ul>
                </div>
            </div>

        </div>
<!--
        <div class="message_section">
            <h4>
             <i class="fas fa-arrow-circle-right"></i>Message</h4>
            
        </div>
-->
        
    </div>
    <footer class="navbar">
        <span>Industry relationship Manager system version 1</span>
    </footer>

</body>

</html>