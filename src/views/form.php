<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producte</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/crear.css">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--Leaflet-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</head>

<body>
    <?php include "navbar.php"; ?>

    <div class="containerC justify-content-center mt-5 mb-5 col-12">
        <h1 class="text-center title mt-4">Formulari</h1>
        <form class="createGim" id="formGimcana" action="index.php" method="POST">
            <input type="hidden" name="r" value="doInsertForm">

            <div class="row justify-content-center mt-4">
                <div class="col-12 col-md-8 questions">

                    <div class="mb-3">
                        <label for="nom_producte" class="form-label">Nom producte</label>
                        <input type="text" class="form-control" id="nom_producte" name="nom_producte"
                            placeholder="Producte ..." required>
                    </div>

                    <div class="mb-3">
                        <label for="categoria" class="form-label">Selecciona el tipus de categoria</label>
                        <select id="categoria" name="categoria" class="form-control" required>
                            <option value="1">Alimentació sostenible</option>
                            <option value="2">Higiene eco</option>
                            <option value="3">Llar eficient</option>
                            <option value="4">Tecnologia responsable</option>
                            <option value="5">Moda sostenible</option>
                            <option value="6">Mobilitat verda</option>
                            <option value="7">Reduir/Reutilitzar</option>
                            <option value="8">Compostatge i jardí</option>
                            <option value="9">Energia renovable</option>
                            <option value="10">Altres</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="descripcio_curta" class="form-label">Descripció curta sobre el producte</label>
                        <textarea class="form-control" id="descripcio_curta" name="descripcio_curta"
                            placeholder="Descripció curta" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="productor" class="form-label">Productor</label>
                        <input type="text" class="form-control" id="productor" name="productor"
                            placeholder="Sara Alaoui" required>
                    </div>

                    <div class="mb-3">
                        <label for="email_contacte" class="form-label">Email de contacte</label>
                        <input type="email" class="form-control" id="email_contacte" name="email_contacte"
                            placeholder="Ex: salaoui@cendrassos.net" required>
                    </div>

                    <div class="mb-3">
                        <label for="preu" class="form-label">Preu del producte</label>
                        <input type="number" class="form-control" id="preu" name="preu"
                            placeholder="Ex: 25" required>
                    </div>

                    <!-- Buttons -->
                    <div class="buttons mb-4">
                        <div class="d-flex gap-3 mt-3 flex-wrap">
                            <a href="index.php" class="btn btn-danger flex-grow-1 text-white text-decoration-none">Cancel·la</a>
                            <button type="submit" class="btn btn-success flex-grow-1">Enviar</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer><?php include "footer.php"; ?></footer>
</html>