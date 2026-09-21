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
                </ul>

                <div class="ms-lg-4">
                    <a href="#" class="btn btn-primary btn-sm px-4 rounded-pill">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container my-5">

        <div class="row justify-content-center g-3">
            <div class="col-lg-4">
                <div class="card border border-warning">
                    <div class="card-header bg-warning text-center fw-bold">
                        This is the header
                    </div>
                    <div class="card-body" style="text-align: justify;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border border-success">
                    <div class="card-header bg-success text-white text-center fw-bold">
                        This is the header
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- <footer class="py-4 bg-dark text-white-50">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <span class="fw-bold text-white">Brand</span>
            <small>&copy; 2025 Brand. Made for the next idea.</small>
            <a href="#home" class="link-light text-decoration-none">Back to top &uarr;</a>
        </div>
    </footer> -->



    <?php include '_scripts.php'; ?>
</body>

</html>