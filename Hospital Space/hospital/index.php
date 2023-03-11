<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Space</title>
    <link rel = "icon" href = "images/logo_1.png" type = "image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "css/normalize.css">

    <link rel = "stylesheet" href = "css/main.css">
</head>
<body>
    <header class = "header bg-blue">
        <nav class = "navbar bg-blue">
            <div class = "container flex">
                <a href = "index.php" class = "navbar-brand">
                    <img src = "images/logo_1.png " width="45" height="50" alt = "site logo">
                </a>
                <button type = "button" class = "navbar-show-btn">
                    <img src = "images/ham-menu-icon.png">
                </button>

                <div class = "navbar-collapse bg-white">
                    <button type = "button" class = "navbar-hide-btn">
                        <img src = "images/close-icon.png">
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "#Home" class = "nav-link">Home</a>
                            <br>
                        </li>
                        <li class = "nav-item">
                            <a href = "#about" class = "nav-link">About</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#services" class = "nav-link">Service</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#posts" class = "nav-link">Blog</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "hms/doctor/" class = "nav-link">Doctors</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "contact.php" class = "nav-link">Contact</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "hms/admin" class = "nav-link">Admin</a>
                        </li>
                    </ul>
                    <div class = "search-bar">
                        <form>
                            <div class = "search-bar-box flex">
                                <span class = "search-icon flex">
                                    <img src = "images/search-icon-dark.png">
                                </span>
                                <input type = "search" class = "search-control" placeholder="Search here">
                            </div> 
                        </form>
                    </div>
                </div> 
            </div>
        </nav>
        <section id = "Home" class = "Home py">
        <div class = "header-inner text-white text-center">
            <div class = "container grid">
                <div class = "header-inner-left">
                    <h1>your most trusted<br> <span>health partner</span></h1>
                    <p class = "lead">We are here to provide the good medical service.</p>
                    <p class = "lead">Our site provide Virtual interface for medical consultation.</p>
                    <br>
                    <br>
                    <div class = "btn-group">
                        <a href = "hms/user-login.php" class = "btn btn-light-blue">Consult Now</a>
                    </div>
                </div> 
                <div class = "header-inner-right">
                    <img src = "images/P_2.png" height="600" width="1000">
                </div>
            </div>
        </div>
        </section>
    </header>
    <main>
        <section id = "about" class = "about py">
            <div class = "about-inner">
                <div class = "container grid">
                    <div class = "about-left text-center">
                        <div class = "section-head">
                            <h2>About Section</h2>
                            
    <p>Choose the doctor.</p>
    <p>Book a slot. </p>
    <p>Consult Doctor</p>
    <p>Make Payment </p>
    <p>Receive prescriptions instantly.</p>
                        </div>
                        <p class = "text text-lg"> </p>
                       <a href = "https://www.credihealth.com/blog/online-doctor-consultation-what-why-where/" target="_top" class = "btn btn-white">Learn More</a>
                    </div>
                        <div class = "img">
                            <img src = "images/image_Service.jpeg"> 
                        </div>
                </div>
            </div>
        </section>
        <section id = "banner-one" class = "banner-one text-center">
            <div class = "container text-white">
                <blockquote class = "lead"><i class = "fas fa-quote-left"></i> When you are young and healthy, it never occurs to you that in a single second your whole life could change. <i class = "fas fa-quote-right"></i></blockquote>
                <small class = "text text-sm">- Anonim Nano</small>
            </div>
        </section>

        <section id = "services" class = "services py">
            <div class = "container">
                <div class = "section-head text-center">
                    <h2 class = "lead">How it is work !</h2>
                    <div class = "line-art flex">
                        <div></div>
                        <img src = "images/4-dots.png">
                        <div></div>
                    </div>
                </div>
                <div class = "services-inner text-center grid">
                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/image_chat.png"> 
                        </div>
                        <h3>Chat With Doctor</h3>
                        <p class = "text text-sm">You Can do Chat Session With Doctor</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/image_chat_T.jpg" >   
                        </div>
                        <h3>Chat Session Start</h3>
                        <p class = "text text-sm">Your Chat Session With Doctor Start</p>   
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/VC_1.png" width="100" height="70">
                        </div>
                        <h3>Video Session</h3>
                        <p class = "text text-sm">You Can also Start Video Session With Doctor</p>
                    </article>
                    <article class = "service-item">
                        <br>

                        <div class = "icon">
                            <img src = "images/cs.jfif">
                        </div>
                        <h3 text-align="right">Consultation & First Aid </h3>
                        <p class = "text text-sm">Get a digital doctor consultation & prescription</p>
                    </article>
                </div>
            </div>
        </section>
        <section id = "banner-one" class = "banner-one text-center">
            <div class = "container grid">
               
                <div class = "banner-one-right">
                    <blockquote class = "lead"><i class = "fas fa-quote-left"></i>Medicines cure diseases,<br>but only doctors can cure patients.<i class = "fas fa-quote-right"></i></blockquote>
                    <br>
                </div>
            </div>
        </section>
        <section id = "doc-panel" class = "doc-panel py">
            <div class = "container">
                <div class = "section-head">
                    <h2 style ="text-align:center; color:#0E86D4">Our Doctor Panel</h2>
                </div>

                <div class = "doc-panel-inner grid">
                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/doc-1.png" alt = "doctor image" height="500">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">Rahul Patel</p>
                                <p class = "text-lg">Dentist</p>
                            </div>
                        </div>
                    </div>

                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/doc-2.png" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">Vrutti Patel </p>
                                <p class = "text-lg">Cardiology</p>
                            </div>
                        </div>
                    </div>

                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/doc-3.png" alt = "doctor image" height="500">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead"> Disha Patel</p>
                                <p class = "text-lg">Homeopath</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id = "posts" class = "posts py">
            <div class = "container">
                <div class = "section-head"> 
                    <h2 style ="text-align:center; color:#0E86D4">Blog Section</h2>
                </div>
                <div class = "posts-inner grid">
                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/post-1.jpg">
                        </div>
                        <div class = "content">
                            <h4>Inspiring stories of person and family centered care during a global pandemic.</h4>
                            <p class = "text text-sm"></p>
                            <p class = "text text-sm">.</p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> October 27, 2021</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/post-2.jpg">
                        </div>
                        <div class = "content">
                            <h4>Inspiring stories of person and family centered care during a global pandemic.</h4>
                            <p class = "text text-sm"></p>
                            <p class = "text text-sm"></p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> October 27, 2021</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/post-3.jpg">
                        </div>
                        <div class = "content">
                            <h4>Inspiring stories of person and family centered care during a global pandemic.</h4>
                            <p class = "text text-sm"></p>
                            <p class = "text text-sm"></p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> October 27, 2021</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    <footer id = "footer" class = "footer text-center">
        <div class = "container">
            <div class = "footer-inner text-white py grid">
                <div class = "footer-item">
                    <h3 class = "footer-head">about us</h3>
                    <div class = "icon">
                        <img src = "images/logo_1.png">
                        <br>
                        <br> 

                    </div>
                <h3>Our Team</h3>
                    <address>
                        Zydus Hospital<br>
                        IRIS<br>
                        Apollo Hospital<br>   
                    </address>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">tags</h3>
                    <ul class = "tags-list flex">
                        <li>medical care</li>
                        <li>emergency</li>
                        <li>therapy</li>
                        <li>surgery</li>
                        <li>medication</li>
                        <li>nurse</li>
                    </ul>
                </div>
                <div class = "footer-item">
                    <h3 class = "footer-head">make an appointment</h3>
                    <ul class = "appointment-info">
                        <li>8:00 AM - 11:00 AM</li>
                        <li>2:00 PM - 05:00 PM</li>
                        <li>8:00 PM - 11:00 PM</li>
                        <li>
                            <i class = "fas fa-envelope"></i>
                            <span>hs.uv2425@gmail.com</span>
                        </li>
                        <li>
                            <i class = "fas fa-phone"></i>
                            <span>7990773739</span>
                        </li>
                    </ul> 
                </div>
            </div>

            <div class = "footer-links">
                
        </div>
    </footer>
    <script src = "js/script.js"></script>
</body>
</html>