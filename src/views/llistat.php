<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/list_gimcanes.css">
    <link rel="stylesheet" href="./css/llistat.css">
    <link rel="stylesheet" href="./css/showranking.css">
      <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const numProductes = <?= count($productes)?>;
        const productors = <?=  json_encode($productes) ?>;
    </script>
</head>
<body>
<?php include "navbar.php"; ?>

<div class="container mt-5 mb-5">
    <div class="ranking-card">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Productes</h2>
        </div>

        <button id="sorteig" class="btn btn-success mt-4 mb-4">Sorteig Productors</button>

        <div class="containerFilter mb-4 d-flex justify-content-between align-items-center">
            <form method="POST" action="index.php" class="filterForm">
            <input type="hidden" name="r" value="filter">
                <div class="searchWrapper">
                    <input type="text" class="searchBar" name="filteringValue" placeholder="Busca" value="<?= $filteringValue ?? '' ?>">
                </div>
                <button type="submit" class="filterBtn ms-1"><img src="/img/search.png" class="imgSearch"></button>
            </form>
        </div>

        <?php if (empty($productes) || !is_array($productes)): ?>
            <div class="alert alert-info">No hi han dades de productes registrats.</div>
        <?php else: ?>
            <div class="table-responsive mb-4">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr class="text-muted">
                            <th style="width:80px">Id</th>
                            <th>Producte</th>
                            <th class="text-center">Preu(€)</th>
                            <th>Categoria</th>
                            <th>Data alta</th>
                            <th>Productor</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productes as $idx => $row): 
                            $numResults += $idx +1;
                            $id = isset($row['id_producte']) ? $row['id_producte'] : 0;
                            $nom_producte = isset($row['nom_producte']) ? $row['nom_producte'] : null;
                            $preu = isset($row['preu']) ? $row['preu'] : 0;
                            $categoria = isset($row['categoria']) ? $row['categoria'] : null;
                            $data = isset($row['data_alta']) ? $row['data_alta'] : null;
                            $productor = !empty($row['productor']) ? $row['productor'] : null;
                            $email = !empty($row['email_contacte']) ? $row['email_contacte'] : null;
                            ?>
                        <tr class="user-row">
                            <td>
                                <span class="rank-badge"><?= $id?></span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <?= htmlspecialchars($nom_producte) ?><br>
                                </div>
                            </td>
                            <td class="text-center">
                                <span><?= $preu?></span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <?= htmlspecialchars($categoria) ?><br>
                                </div>
                            </td>
                            <td class="text-center">
                                <span><?= $data?></span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <?= htmlspecialchars($productor) ?><br>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <?= htmlspecialchars($email) ?><br>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>

    <!--Forms ocults-->
    <div id="notification" style="display:none;">
        <div id="notification-box" >
            <span id="notification-text"></span>
        </div>
    </div>
</div>
<script src="./js/llistat.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php include "footer.php"; ?>
</body>
</html>