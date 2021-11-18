<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DiProxy.com</title>
        <link rel="icon" type="image/x-icon" href="templates/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="templates/css/styles.css" rel="stylesheet" />
        <meta name="generator" content="php-proxy.com">
        <meta name="version" content="<?=$version;?>">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">DiProxy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Welcome to DiProxy.com</h1>
                <p class="lead">access everything without a hitch</p>
                <form action="index.php" method="post">
                    <div class="form-group px-5">
                        <div class="input-group mb-3">
                            <input type="text" name="url" class="form-control form-control-lg" placeholder="https://" aria-label="https://" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-dark btn-lg" type="submit">Go</button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php if(isset($error_msg)){ ?>
                    <div id="error">
                        <p><?php echo strip_tags($error_msg); ?></p>
                    </div>
                <?php } ?>
            </div>
        </header>
        <!-- About section-->
        <section id="about">
            <div class="container px-2">
                <div class="row gx-2 justify-content-center">
                    <div class="col-lg-8">
                        <h2>About this page</h2>
                        <p class="lead">You can access blocked websites using an encrypted connection.</p>
                        <ul>
                            <li>Hide yout IP address.</li>
                            <li>Makes all websites SSL encrypted.</li>
                            <li>Can be used on any operating system.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; diproxy.com 2021</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="templates/js/scripts.js"></script>
        <script type="text/javascript">
            document.getElementsByName("url")[0].focus();
        </script>
    </body>
</html>
