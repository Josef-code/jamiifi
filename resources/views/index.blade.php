<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>JamiiFi</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk&family=Gabarito:wght@500&display=swap" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">JamiiFi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        @auth 
                            <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></li>
                        @else   
                            <li class="nav-item"><a class="nav-link" href="pricing.html">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Empower Your Community to Build a Better Tomorrow</h1>
                            <p class="lead fw-normal text-white-50 mb-4">Welcome to JamiiFi, where we unite to transform our communities. Together, we can create a brighter future by funding essential projects.</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn bg-button btn-lg px-4 me-sm-3" href="{{ url('/create-project') }}">Start a Campaign</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">Support a Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://img.freepik.com/free-photo/medium-shot-student-with-smartphone_23-2148913209.jpg?w=740&t=st=1698161892~exp=1698162492~hmac=05fc94f3873d24d048787d4691f25bc59f312735e4f5cebe9593438895d4f060" alt="..." /></div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h2 class="fw-bolder mb-0">A better way to make an impact</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people-fill"></i></div>
                                <h2 class="h5">Community Collaboration</h2>
                                <p class="mb-0">Our platform promotes active engagement and community decision-making.</p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-cash-stack"></i></div>
                                <h2 class="h5"> Simple and Secure Donations </h2>
                                <p class="mb-0"> Our secure payment gateway ensures hassle-free and safe financial transactions. </p>
                            </div>
                            <div class="col mb-5 mb-md-0 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-graph-up"></i></div>
                                <h2 class="h5">Transparent Progress Tracking</h2>
                                <p class="mb-0">We believe in transparency, so you can see how your contributions make a difference.</p>
                            </div>
                            <div class="col h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-award-fill"></i></div>
                                <h2 class="h5">Celebrate Your Impact</h2>
                                <p class="mb-0">Contribute to the community's well-being and earn badges as a symbol of your generosity.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section-->
        <div class="py-5 bg-light">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10 col-xl-7">
                        <div class="text-center">
                            <div class="fs-4 mb-4 fst-italic">"The best way to find yourself is to lose yourself in the service of others."</div>
                            <div class="d-flex align-items-center justify-content-center">
                                <img class="rounded-circle me-3" src="https://www.dailyexcelsior.com/wp-content/uploads/2020/10/Untitled-1-copy-768x781.jpg" alt="..." width="60" />
                                <div class="fw-bold">
                                    Mahatma Gandhi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder"> Featured Projects </h2>
                            <p class="lead fw-normal text-muted mb-5"> Discover our handpicked campaigns making a significant impact in communities just like yours. Join them in their journey to create a better world. </p>
                        </div>
                    </div>
                </div>

                @if (count($projects) > 0)

                
                <div class="row gx-5">
                @foreach ($projects as $project)
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <!-- <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." /> -->
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $project->category }}</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">{{ $project->project_name }}</h5>
                                </a>
                                <p class="card-text mb-0">{{ $project->description }}</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                        <div class="small">
                                            <div class="fw-bold">{{ $project->user->name }}</div>
                                            <div class="text-muted">Start date: {{ $project->start_date }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach    
                </div>

                @endif
                <!-- Call to action-->
                <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                    <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                        <div class="mb-4 mb-xl-0">
                            <div class="fs-3 fw-bold text-white"> Sign up for our newsletter now. </div>
                            <div class="text-white-50"> Stay updated with our latest campaigns and community stories. </div>
                        </div>
                        <div class="ms-xl-4">
                            <div class="input-group mb-2">
                                <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                                <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                            </div>
                            <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; JamiiFi 2023</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>