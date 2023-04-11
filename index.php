<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/home-style.css">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/e4f4aab979.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/isLogged.js"></script>
</head>
<body>
    <div class="container shadow-lg">
        <h3><i class="fa-solid fa-cloud fa-2xl"></i> <span class="title">Cloud Computing</span> </h3>

        <div id="content">
        <p class="intro">Il progetto di cloud-computing consiste nella creazione di una web application che sfrutta gli AWS per l'hosting dei servizi necessari al funzionamento di essa. Questo progetto sfrutta diverse tecnologie e linguaggi che vedremo piú nello specifico nelle sezioni sottostanti</p>
        <h3>Risorse utilizzate: </h3>
            <div class="row">
                <div class="col-6 d-flex justify-content-center">
                    <div class="box" id="learnMore-aws">
                        <h4>AWS</h4>
                        <hr>
                        <p class="info">Amazon web services, utilizzato per l'hosting dei servizi</p>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <div class="box" id="learnMore-docker">
                        <h4>Docker</h4>
                        <hr>
                        <p class="info">Utilizzato per isolare i differenti servizi</p> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 d-flex justify-content-center">
                    <div class="box" id="learnMore-code">
                        <h4>Code</h4>
                        <hr>
                        <p class="info">jQuery, Bootstrap, CSS, HTML, Javascript, mysql, php</p>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>

        </div>
    </div>

    <script src="js/changeContent-aws.js"></script>
    <script src="js/changeContent-docker.js"></script>
    <script src="js/changeContent-code.js"></script>
    <script src="js/redirect.js"></script>
</body>
</html>