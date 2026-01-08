<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/llistat.css">
      <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
<?php include "navbar.php";?>

<div class="container mt-5 mb-5">
    <div class="ranking-card">

        <!-- Titol -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="title mb-0">PRODUCTES</h1>
        </div>

        <!-- Sorteig -->
        <button id="sorteig" class="btn btn-success mt-4 mb-4">Sorteig Productors</button>

        <!-- filtre -->
        <div class="containerFilter mb-4 d-flex justify-content-between align-items-center">
            <form method="POST" action="index.php" class="filterForm">

            <!-- <label for="searchbar" class="visually-hidden" id="search1">Buscar productes</label> -->
            <input type="hidden" id="searchbar" class="searchBar" name="r" placeholder="Busca" aria-label="Buscar productes" value="filter">
                <div class="searchWrapper">
                    <!-- <label for="searchbar" class="visually-hidden" id="search">Buscar productes</label> -->
                    <input type="text" class="searchBar" name="filteringValue" placeholder="Busca" aria-label="Buscar productes" value="<?= $filteringValue ?? '' ?>">
                </div>
            
            <button type="submit" class="filterBtn ms-1"><img src="/img/search.png" class="imgSearch" alt="search"></button>
            </form>
        </div>

        <!-- Productes -->
        <?php $productors = []; ?>

        <?php if (empty($productes) || !is_array($productes)): ?>
            <div class="alert alert-info">No hi han dades de productes registrats.</div>
        <?php else: ?>
            <!-- Taula productes -->
            <div class="table-responsive mb-4">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr class="text-muted">
                            <th style="width:80px">Núm.</th>
                            <th>Producte</th>
                            <th class="text-center">Preu(€)</th>
                            <th>Categoria</th>
                            <th>Data alta</th>
                            <th>Productor</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($productes as $p): ?>
                        <tr class="user-row">
                                <td>
                                    <span class="rank-badge"><?= $p["id_producte"]?></span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <?= htmlspecialchars($p["nom_producte"]) ?><br>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span><?= $p["preu"]?></span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <?= htmlspecialchars($p["categoria"]) ?><br>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span><?=$p["data_alta"]?></span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <?= htmlspecialchars($p["productor"])?><br>
                                        <?php $productors[] = $p["productor"];?>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <?= htmlspecialchars($p["email_contacte"]) ?><br>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>

    <!--Notificació oculta-->
    <div id="notification" style="display:none;">
        <div id="notification-box" >
            <span id="notification-text"></span>
        </div>
    </div>
</div>
<script>
    const productors = <?php echo json_encode($productors); ?>;
</script>
<script src="./js/llistat.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php include "footer.php"; ?>
</body>
</html>