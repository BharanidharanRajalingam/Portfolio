<?php
// $pageTitle = 'About Us ';
// $pageDescription = '';
include('header.php');
?>

<header class="pf_header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="home">
        <div class="container">
            <a class="navbar-brand" href="#home"><img src="assets/fe_logo.png" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container" id="about">
    <div class="row aboutussec">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h4>Hello I'm</h4>
            <h2>Bharanidharan</h2>
            <h6>(Frontend Developer)</h6>
            <p>Dedicated Frontend Developer specializing in healthcare solutions with a track record of success in
                developing and maintaining user-friendly and Responsive Websites Web Applications. Collaborate
                effectively with cross-functional teams to ensure the seamless integration of design and
                functionality. </p>
            <a href="assets/BHARANIDHARAN R.pdf" class="mt-3" target="_blank">Resume <span><img
                        src="assets/download.gif" /></span></a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <img src="assets/fe_bg.jpg" />
        </div>
    </div>
</div>
<div class="container skills" id="skills">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <h2>Skills</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 skillsets">
            <div>
                <img src="assets/html_5.png" />
            </div>
            <div>
                <img src="assets/css.png" />
            </div>
            <div>
                <img src="assets/jquery.png" />
            </div>
            <div>
                <img src="assets/javascript.png" />
            </div>
            <div>
                <img src="assets/vue.png" />
            </div>
            <div>
                <img src="assets/nuxtjs.png" />
            </div>
            <div>
                <img src="assets/bootstrap.png" />
            </div>
            <div>
                <img src="assets/bootstrapvue.png" />
            </div>
            <div>
                <img src="assets/primevue.png" />
            </div>
            <div>
                <img src="assets/git.png" />
            </div>
            <div>
                <img src="assets/github.png" />
            </div>
            <div>
                <img src="assets/bitbucket.png" />
            </div>
            <div>
                <img src="assets/sourcetree.png" />
            </div>
        </div>
    </div>
</div>
<div class="container projects" id="projects">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <h2>Projects</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 projectsection">
            <div class="position-relative">
                <img src="assets/project_billing.png" />
                <div class="pcard">
                    <h4>Billing</h4>
                </div>
            </div>
            <div class="position-relative">
                <img src="assets/project_transtan.png" />
                <div class="pcard">
                    <h4>Transtan</h4>
                </div>
            </div>
            <div class="position-relative">
                <img src="assets/project_transplant.png" />
                <div class="pcard">
                    <h4>Transplant</h4>
                </div>
            </div>
            <div class="position-relative">
                <img src="assets/project_inventory.png" />
                <div class="pcard">
                    <h4>Inventory Management</h4>
                </div>
            </div>
            <div class="position-relative">
                <img src="assets/project_crm.png" />
                <div class="pcard">
                    <h4>CRM</h4>
                </div>
            </div>
            <div class="position-relative">
                <img src="assets/project_hms.png" />
                <div class="pcard">
                    <h4>HMS</h4>
                </div>
            </div>
            <div class="position-relative">
                <img src="assets/project_gbr.png" />
                <div class="pcard">
                    <h4>GBR Clinic</h4>
                </div>
            </div>
            <div class="position-relative">
                <img src="assets/project_medway.png" />
                <div class="pcard">
                    <h4>Medway Hospitals</h4>
                </div>
            </div>
            <div class="position-relative">
                <img src="assets/project_user.png" />
                <div class="pcard">
                    <h4>User Management</h4>
                </div>
            </div>
            <div class="position-relative">
                <img src="assets/project_mocero.png" />
                <div class="pcard">
                    <h4>Mocero Health Solutions</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container contactus" id="contact">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="contactcard">
                <h4>Get in Touch</h4>
                <p>Whether you're looking to collaborate on a project or have an exciting job opportunity, I'm all ears!
                    Feel free to reach out using the form below or through the contact information provided. I'm eager
                    to hear about your projects or discuss potential career opportunities.</p>
                <div>
                    <i class="bi bi-person-fill"></i>
                    <p>Bharanidharan</p>
                </div>
                <div id="emailContainer">
                    <i class="bi bi-envelope-fill"></i>
                    <p id="emailText">bharanidharanrajalingam@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 getclass">
            <div class="getintouch clearfix">
                <h4>Contact Us</h4>
                <form action="https://formsubmit.co/bharanidharanrajalingam@gmail.com" method="POST">
                    <input type="text" class="form-control mb-3" name="Name" placeholder="User Name" required>
                    <input type="email" class="form-control mb-3" name="Mail" placeholder="Email" required>
                    <textarea class="form-control mb-3" name="Message" rows="2" placeholder="Message"></textarea>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<section>
    <i class="bi bi-arrow-up-circle-fill" id="scroll-top" style="display: none;"></i>
</section>
<footer class="footer">
    <div>
        <a href="https://www.instagram.com/_b_dharan_i_?igsh=ODVrdWM2M3pzN3Ny" target="_blank"><i
                class="bi bi-instagram"></i></a>

        <a href="mailto:bharani@gmail.com" target="_blank"><i class="bi bi-envelope-open"></i></a>

        <a href="https://www.linkedin.com/in/bharanidharan-rajalingam-aa0689158" target="_blank"><i
                class="bi bi-linkedin"></i></a>

        <a href="https://github.com/BharanidharanRajalingam" target="_blank"><i class="bi bi-github"></i></a>
    </div>
</footer>