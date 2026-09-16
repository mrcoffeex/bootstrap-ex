<html lang="en">

<?php include '_head.php'; ?>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 fixed-top">
        <div class="container">

            <a class="navbar-brand fw-bold text-primary" href="#">Brand</a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-ul navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-3">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#contact">Contact</a>
                    </li>
                </ul>

                <div class="ms-lg-4">
                    <a href="#" class="btn btn-primary btn-sm px-4 rounded-pill">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <section class="py-5 bg-light border-bottom" id="home">
            <div class="container py-lg-5">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 text-center text-lg-start">
                        <span class="badge bg-primary-subtle text-primary fw-semibold mb-3 px-3 py-2 rounded-pill">
                            New Feature Released
                        </span>
                        <h1 class="display-4 fw-bold text-dark lh-sm mb-3">
                            Build modern web apps faster than ever
                        </h1>
                        <p class="lead text-muted mb-4">
                            A flexible, responsive starting point designed to showcase your core value proposition with clean Bootstrap 5 utilities.
                        </p>
                        <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start gap-3">
                            <a href="#" class="btn btn-primary btn-lg px-4 rounded-pill">Get Started Free</a>
                            <a href="#" class="btn btn-outline-secondary btn-lg px-4 rounded-pill">Watch Demo</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <img src="https://placehold.co/600x400/ab72ed/ffffff?text=Product+Preview" class="img-fluid rounded-4 shadow" alt="Product Preview" loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5" id="features">
            <div class="container py-lg-5">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-7">
                        <span class="text-primary fw-semibold text-uppercase small">Everything you need</span>
                        <h2 class="display-6 fw-bold mt-2 mb-3">A simpler way to bring ideas to life</h2>
                        <p class="text-muted mb-0">Spend less time wrestling with setup and more time creating an experience your customers will remember.</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="h-100 p-4 border rounded-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-3 p-3 mb-4">
                                <span class="fs-4">&#9889;</span>
                            </div>
                            <h3 class="h5 fw-bold">Move quickly</h3>
                            <p class="text-muted mb-0">Start with practical building blocks that help your team ship polished work without unnecessary friction.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="h-100 p-4 border rounded-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-success-subtle text-success rounded-3 p-3 mb-4">
                                <span class="fs-4">&#10003;</span>
                            </div>
                            <h3 class="h5 fw-bold">Stay organized</h3>
                            <p class="text-muted mb-0">Keep your work focused with a clear, consistent foundation that scales as your ambitions grow.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="h-100 p-4 border rounded-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-warning-subtle text-warning-emphasis rounded-3 p-3 mb-4">
                                <span class="fs-4">&#9733;</span>
                            </div>
                            <h3 class="h5 fw-bold">Make it memorable</h3>
                            <p class="text-muted mb-0">Create responsive, accessible experiences that feel thoughtful on every screen and at every stage.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light border-top border-bottom" id="pricing">
            <div class="container py-lg-5">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-7">
                        <span class="text-primary fw-semibold text-uppercase small">Simple pricing</span>
                        <h2 class="display-6 fw-bold mt-2 mb-3">Choose the pace that fits your team</h2>
                        <p class="text-muted mb-0">Start free, then grow into more room when you need it. No complicated contracts.</p>
                    </div>
                </div>
                <div class="row justify-content-center g-4">
                    <div class="col-md-5 col-lg-4">
                        <div class="bg-white h-100 p-4 border rounded-4">
                            <h3 class="h5 fw-bold">Starter</h3>
                            <p class="text-muted">For small ideas and early experiments.</p>
                            <div class="display-6 fw-bold mb-4">$0 <span class="fs-6 fw-normal text-muted">/ month</span></div>
                            <ul class="list-unstyled text-muted mb-4">
                                <li class="mb-2">&#10003; Core components</li>
                                <li class="mb-2">&#10003; Responsive layouts</li>
                                <li>&#10003; Community support</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary w-100 rounded-pill">Start for free</a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="bg-primary text-white h-100 p-4 rounded-4 shadow">
                            <span class="badge bg-white text-primary rounded-pill mb-3">Most popular</span>
                            <h3 class="h5 fw-bold">Scale</h3>
                            <p class="text-white-50">For teams ready to move with confidence.</p>
                            <div class="display-6 fw-bold mb-4">$24 <span class="fs-6 fw-normal text-white-50">/ month</span></div>
                            <ul class="list-unstyled text-white-50 mb-4">
                                <li class="mb-2 text-white">&#10003; Everything in Starter</li>
                                <li class="mb-2 text-white">&#10003; Advanced workflows</li>
                                <li class="text-white">&#10003; Priority support</li>
                            </ul>
                            <a href="#" class="btn btn-light text-primary w-100 rounded-pill">Choose Scale</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5" id="about">
            <div class="container py-lg-5">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6">
                        <span class="text-primary fw-semibold text-uppercase small">Built with intention</span>
                        <h2 class="display-6 fw-bold mt-2 mb-3">Good tools should make the next step obvious.</h2>
                        <p class="text-muted mb-4">We believe the best product experiences feel clear from the first click. That means fewer distractions, sensible defaults, and enough flexibility for your work to remain distinctly yours.</p>
                        <a href="#features" class="btn btn-dark px-4 rounded-pill">Explore the features</a>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="p-4 bg-dark text-white rounded-4">
                            <p class="fs-4 lh-sm mb-4">“The simplest starting point we have found for turning a rough idea into something real.”</p>
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">AM</div>
                                <div>
                                    <div class="fw-semibold">Alex Morgan</div>
                                    <small class="text-white-50">Product designer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light border-top border-bottom" id="contact">
            <div class="container py-lg-5">
                <div class="row justify-content-between gy-5">
                    <div class="col-lg-5">
                        <span class="text-primary fw-semibold text-uppercase small">Get in touch</span>
                        <h2 class="display-6 fw-bold mt-2 mb-3">Let’s talk about your next idea.</h2>
                        <p class="text-muted mb-4">Have a question, a project in mind, or simply want to say hello? Send us a message and we’ll get back to you soon.</p>
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <span class="fs-4 text-primary">&#9993;</span>
                            <div>
                                <div class="fw-semibold">Email us</div>
                                <a href="mailto:hello@example.com" class="text-muted text-decoration-none">hello@example.com</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <span class="fs-4 text-primary">&#9742;</span>
                            <div>
                                <div class="fw-semibold">Call us</div>
                                <a href="tel:+15550142789" class="text-muted text-decoration-none">+1 (555) 014-2789</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="#" method="post" class="bg-white p-4 p-lg-5 border rounded-4 shadow-sm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label fw-semibold">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-semibold">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label fw-semibold">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tell us how we can help" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-4 rounded-pill">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-primary text-white">
            <div class="container py-4">
                <div class="row align-items-center gy-3">
                    <div class="col-lg-8">
                        <h2 class="h1 fw-bold mb-2">Ready to build something great?</h2>
                        <p class="lead text-white-50 mb-0">Your next project can start with one small, confident step.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="#home" class="btn btn-light btn-lg text-primary px-4 rounded-pill">Get started today</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-4 bg-dark text-white-50">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <span class="fw-bold text-white">Brand</span>
            <small>&copy; 2025 Brand. Made for the next idea.</small>
            <a href="#home" class="link-light text-decoration-none">Back to top &uarr;</a>
        </div>
    </footer>



    <?php include '_scripts.php'; ?>
</body>

</html>