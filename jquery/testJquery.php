<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BibliothequeJS</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">

    <!-- Bootstrap JS et Popper.js CDN (order is important) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Bibliothèques JS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jquery/testJquery.php">jquery</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <button type="button" id="btn1" class="btn btn-primary">btn1</button>
        <p class="" id='p1'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Fuga qui itaque harum perferendis tempore esse iste eos, ex iure quaerat accusamus
             recusandae quod maxime at ipsum illo deserunt totam nulla!</p><br>
             <label for="">Test</label>

    </main>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        $("#btn1").click(function() {
            // alert("Bouton cliqué !");
            // $("#p1").addClass("p1");
            // $("#p1").fadeOut();
            // $("#p1").fadeToggle();
            $("#p1").fadeTo("slow", 0.5);
            // $("#p1").fadeOut();
            // $("#p1").fadeOut();
            // $("#p1").fadeOut();
            // $("#p1").fadeOut();
            // $("#p1").fadeOut();
        });
    </script>
</body>
</html>