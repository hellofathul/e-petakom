<?php

$logged_user = session()->get('logged_user');
$username = session()->get('username');
$roles = session()->get('role');

?>

<!-- STYLESHEET -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/animation-login.css') }}">
<!-- MATERIAL ICONS CDN -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,700,1,0" />
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!-- GOOGLE FONTS - POPPINS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" <!--Hey! This is the
    original version of Simple CSS Waves-->

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
                    <img src="../images/profile-1.png">
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
<!------------------- END OF NAVIGATION BAR --------------------->

<!------------------- MODUL FATHUL --------------------->
<!------------------- MAIN PAGE LAYOUT (3 COLUMN GRID SYSTEM) --------------------->
<main>
    <!------------------- START OF ASIDE PAGE LAYOUT (GRID COLUMN 1) --------------------->
    <aside>
        <button id="close__btn">
            <span class="material-symbols-rounded">
                close
            </span>
        </button>

        <!------------------- SIDEBAR --------------------->
        <div class="sidebar__container">
            <a href="#" class="sidebar__btn active-sidebar-btn">
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
            <a href="#" class="sidebar__btn">
                <span class="material-symbols-rounded">diversity_3</span>
                <h4>Committee<br>Election</h4>
            </a>
            <a href="#" class="sidebar__btn">
                <span class="material-symbols-rounded">newspaper</span>
                <h4>Bulletin</h4>
            </a>
        </div>
        <!------------------- END OF SIDEBAR --------------------->
    </aside>
    <!------------------- END OF ASIDE (GRID COLUMN 1) --------------------->

    <!------------------- START OF MIDDLE SECTION LAYOUT (GRID COLUMN 2) --------------------->
    <section class="middle__container">
        <div class="header__container">
            <h1>Manage Profile</h1>
        </div>
        <div class="main__container">
            <div class="secondary__container">
                <div class="double__input__field">
                    <div class="input__field">
                        <h4>First Name</h4>
                        <input id="tbprofession" type="first-name">
                    </div>
                    <div class="input__field">
                        <h4>Last Name</h4>
                        <input id="tbprofession" type="last-name">
                    </div>
                </div>
                <div class="double__input__field">
                    <div class="email__input__field">
                        <h4>Email</h4>
                        <input type="email">
                    </div>
                    <div class="mobile__no">
                        <h4>Mobile No</h4>
                        <input type="mobile-no">
                    </div>
                </div>
                <div class="address__">
                    <h4>Address</h4>
                    <input type="email">
                </div>
                <div class="double__input__field">
                    <div class="input__field">
                        <h4>City</h4>
                        <input type="city">
                    </div>
                    <div class="input__field">
                        <h4>State</h4>
                        <input type="state">
                    </div>
                </div>
                <div class="double__input__field">
                    <div class="email__input__field">
                        <h4>Zip Code</h4>
                        <input type="zipcode">
                    </div>
                    <div class="mobile__no">
                        <h4>Country</h4>
                        <input type="country">
                    </div>
                </div>
                <div class="password__">
                    <div>
                        <h4>Password</h4>
                    </div>
                    <input type="password" class="input2">
                    <span class="material-symbols-outlined show">
                        visibility
                    </span>
                    <span class="material-symbols-outlined hide eye-active">
                        visibility_off
                    </span>
                </div>
                <div class="update__button__container">
                    <button class="update__button">Update</button>
                </div>
            </div>
            <div class="tertiary__container">
                <div class="fourth__container">
                    <div class="profile__picture">
                        <h1>Profile Picture</h1>
                    </div>
                </div>
                <div class="fourth__container">
                    <div class="course__dropdown">
                        <h4>Course</h1>
                            <select class="form-select course-dropdown" aria-label="Default select example">
                                <option selected>Software Engineering</option>
                                <option value="1">Graphics and Multimedia Technology</option>
                                <option value="2">Computer System's and Networking</option>
                                <option value="3">Diploma Computer Science</option>
                            </select>
                    </div>
                    <div class="triple__grid">
                        <div class="year__dropdown">
                            <h4>Year</h1>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                    <option value="4">5</option>
                                </select>
                        </div>
                        <div class="semester__dropdown">
                            <h4>Semester</h1>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                    <option value="4">5</option>
                                    <option value="5">6</option>
                                    <option value="6">7</option>
                                    <option value="7">8</option>
                                    <option value="8">9</option>
                                </select>
                        </div>
                        <div class="matric__id">
                            <div class="input__field">
                                <h4>Matric ID</h4>
                                <input type="matric-id" class="matric-id">
                            </div>
                        </div>
                    </div>
                    <div class="update__button__container">
                        <button class="update__button">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!------------------- END OF MAIN PAGE LAYOUT --------------------->


<!------------------- JAVASCRIPT & JQUERY --------------------->
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/sidebar-toggle.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
