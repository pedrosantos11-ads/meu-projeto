<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Ano Bissexto - Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h3 class="mb-0">Verificar Ano Bissexto</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        function ehbissexto($ano) {
                            if ($ano % 400 == 0) {
                                return true;
                            } elseif ($ano % 100 == 0) {
                                return false;
                            } elseif ($ano % 4 == 0) {
                                return true;
                            } else {
                                return false;
                            }
                        }

                        $alertType = '';
                        $alertMsg = '';
                        $proximo = '';

                        if ($_POST && isset($_POST["ano"])) {
                            $ano = intval($_POST["ano"]);
                            if ($ano > 0) {
                                if (ehbissexto($ano)) {
                                    $alertType = 'success';
                                    $alertMsg = "$ano é bissexto! ✅";
                                } else {
                                    $alertType = 'danger';
                                    $alertMsg = "$ano não é bissexto. ❌";
                                }

                                $proximo = $ano + 1;
                                while (!ehbissexto($proximo)) {
                                    $proximo++;
                                }
                                $alertMsg .= "<br><strong>Próximo ano bissexto: $proximo</strong>";
                            } else {
                                $alertType = 'warning';
                                $alertMsg = 'Por favor, insira um ano válido (maior que 0).';
                            }
                        }
                        ?>

                        <?php if ($alertMsg): ?>
                            <div class="alert alert-<?= $alertType ?> alert-dismissible fade show" role="alert">
                                <?= $alertMsg ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <form method="post">
                            <div class="mb-3">
                                <label for="ano" class="form-label">Insira o Ano:</label>
                                <input type="number" class="form-control form-control-lg" id="ano" name="ano" min="1" value="<?= htmlspecialchars($_POST['ano'] ?? '') ?>" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Verificar</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <small>Refatorado com Bootstrap 5 para design responsivo!</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
