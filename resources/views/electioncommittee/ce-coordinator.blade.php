<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-PETAKOM</title>
     <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- MATERIAL ICONS CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,1,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- GOOGLE FONTS - POPPINS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!-- STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="/style.css"/>
    <script src="main.js"></script>
</head>

<body>
    <!------------------- MODUL FATHUL --------------------->
    <!------------------- TOP NAVIGATION BAR --------------------->
    <div class="navigation__bar">
        <div class="navigation__container">
            <img src="../images/logo.png" class="logo">
            <!-- <div class="search__bar">
                <span class="material-symbols-rounded">
                    search
                </span>
                <input type="search" placeholder="Search">
            </div> -->
            <div class="profile__area">
                <div class="theme__btn">
                    <span class="material-symbols-rounded active-theme">
                        light_mode
                    </span>
                    <span class="material-symbols-rounded">
                        dark_mode
                    </span>
                </div>
                <div class="profile__container">
                    <div class="profile__photo">
                        <img src="../images/profile-2.png">
                    </div>
                    <h5 class="mt-2">CB19070</h5>
                    <span class="material-symbols-rounded">
                        expand_more
                    </span>
                </div>
                <button id="menu__btn">
                    <span class="material-symbols-rounded">
                        menu
                    </span>
                </button>
            </div>
        </div>
    </div>
    <!-- END OF NAVBAR -->

    <main>
        <aside>
            <button id="close__btn">
                <span class="material-symbols-rounded">
                    close
                </span>
            </button>

            <!----------------------------SIDEBAR---------------------------->
            <div class="sidebar__container">
                <a href="#" class="sidebar__btn">
                    <span class="material-symbols-rounded">manage_accounts</span>
                    <h4>Profile</h4>
                </a>
                <a href="#" class="sidebar__btn">
                    <span class="material-symbols-rounded">sprint</span>
                    <h4>Activities</h4>
                </a>
                <a href="#" class="sidebar__btn">
                    <span class="material-symbols-rounded">calendar_month</span>
                    <h4>Yearly Calendar</h4>
                </a>
                <a href="#" class="sidebar__btn">
                    <span class="material-symbols-rounded">list_alt</span>
                    <h4>Report</h4>
                </a>
                <a href="#" class="sidebar__btn">
                    <span class="material-symbols-rounded">edit_document</span>
                    <h4>Proposal</h4>
                </a>
                <a href="#" class="sidebar__btn active-sidebar-btn">
                    <span class="material-symbols-rounded">diversity_3</span>
                    <h4>Committee<br>Election</h4>
                </a>
                <a href="#" class="sidebar__btn">
                    <span class="material-symbols-rounded">newspaper</span>
                    <h4>Bulletin</h4>
                </a>
            </div>
            <!-- END OF SIDEBAR -->
        </aside>
        <!------------- END OF ASIDE ------------->
        <!------------- END OF ASIDE ------------->
        <section class="middle">
            <div class="header">
                <h1>Committee Election</h1>
            </div>
            <div class="election__container">
                <button class="electionmain">
                    <h2>Manage Candidate Registration</h2>
                </button>
                <button class="electionmain">
                    <h2>Manage Election</h2>
                </button>

                <button class="electionmain">
                    <h2>Voting Count</h2>
                </button>
            </div>
        </section>
        <!-- END OF MIDDLE -->
        <section class="right">

        </section>
        <!-- END OF RIGHT -->
    </main>
    <!------------- END OF ASIDE------------->
    <!------------------- JAVASCRIPT & JQUERY --------------------->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="main.js"></script>
    <script src="sidebar_toggle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
</body>

</html>
