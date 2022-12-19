<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-PETAKOM</title>
    <!-- MATERIAL ICONS CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,1,0" />
    <!-- GOOGLE FONTS - POPPINS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="./style.css">
    <script src="main.js"></script>
</head>

<body>
    <nav>
        <div class="container">
            <img src="./images/logo.png" class="logo">
            <div class="search-bar">
                <span class="material-symbols-rounded">
                    search
                </span>
                <input type="search" placeholder="Search">
            </div>
            <div class="profile-area">
                <div class="theme-btn">
                    <span class="material-symbols-rounded active">
                        light_mode
                    </span>
                    <span class="material-symbols-rounded">
                        dark_mode
                    </span>
                </div>
                <div class="profile">
                    <div class="profile-photo">
                        <img src="./images/profile-2.png">
                    </div>
                    <h5>CB19022</h5>
                    <span class="material-symbols-rounded">
                        expand_more
                    </span>
                </div>
                <button id="menu-btn">
                    <span class="material-symbols-rounded">
                        menu
                    </span>
                </button>
            </div>
        </div>
    </nav>
    <!-- END OF NAVBAR -->

    <main class="election">
        <aside>
            <button id="close-btn">
                <span class="material-symbols-rounded">
                    close
                </span>
            </button>
            <div class="sidebar">
                <a href="#">
                    <span class="material-symbols-rounded">manage_accounts</span>
                    <h4>Profile</h4>
                </a>
                <a href="#">
                    <span class="material-symbols-rounded">sprint</span>
                    <h4>Activities</h4>
                </a>
                <a href="#">
                    <span class="material-symbols-rounded">calendar_month</span>
                    <h4>Yearly Calendar</h4>
                </a>
                <a href="#" class="active">
                    <span class="material-symbols-rounded">diversity_3</span>
                    <h4>Committee<br />Election</h4>
                </a>
                <a href="#">
                    <span class="material-symbols-rounded">newspaper</span>
                    <h4>Bulletin</h4>
                </a>
            </div>
            <!-- END OF SIDEBAR -->
        </aside>
        <!------------- END OF ASIDE ------------->
        <section class="middle">
            <div class="header">
                <h1>Committee Election</h1>
                
            </div>
            <div class="electionregister__container">
                <br />
                <h1 style="font-size: 1.8rem;">Register As Candidate</h1>
                <button class="electionuploadregister">
                    <img class="file" src="./images/upload-file.png">
                </button>
                <br />
                <a>
                    <h2 style="text-align:center;">Upload Profile Image</h2>
                </a>
                <div class="electionforms__container">
                    <div class="electionform__container">
                        <form>
                            <div class="electionform_inputname_manifesto">
                                <div class="electionforminputname">
                                    <h4>Name: </h4>
                                    <input class="electiontextform_name" type="text" name="studentname" />
                                </div>

                                <div class="electionforminputname">
                                    <h4>Manifesto: </h4>
                                    <input class="electiontextform_manifesto" type="text" name="studentmanifesto" />
                                </div>
                            </div>
                            <br />

                            <div class="electionforminputname">
                                <h4>Matric ID: </h4>
                                <input class="electiontextform_matricid" type="text" name="studentmatricid" />
                            </div>

                            <br />


                                <h4>Position to compete for: </h4>
                                <br />
                                <h4>Terms & Conditions of becoming a member of the PETAKOM Committee </h4>
                                <br />
                                <textarea class="terms" label="terms" rows="7">
First term
First term
First term
First term
First term
First term
                            </textarea>
                                <br />
                                <div style="text-align:center">
                                    <button class="electionnormal"><h3>Cancel</h3></button>
                                    <button class="electionnormal"><h3>Register</h3></button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OF MIDDLE -->
        <section class="right">

        </section>
        <!-- END OF RIGHT -->
    </main>
    <!------------- END OF ASIDE------------->

</body>

</html>