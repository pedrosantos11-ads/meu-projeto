# Manual de Comandos de Seleção PHP (if/elseif/else e switch)

Este manual ensina a resolver os exercícios da **Lista de Exercícios - Comandos de Seleção**, explicando a lógica por trás de cada estrutura de controle condicional ensinada pelo professor. Vamos cobrir **if/elseif/else** e **switch**, com exemplos completos, testes e dicas importantes.

## 1. Comando if / else / elseif

A estrutura `if/elseif/else` permite executar blocos de código **condicionalmente** com base em **múltiplas condições**. A lógica é avaliada **de cima para baixo**: a primeira condição verdadeira executa seu bloco e **ignora** o resto.

### 1.1 Classificação de Notas (0 a 10)

**Lógica explicada pelo professor**: 
- Avalie condições **do maior para o menor** (ex: nota==10 antes de nota>=9) para evitar que uma condição ampla \"roube\" casos específicos.
- Use `elseif` para encadear condições mutuamente exclusivas.
- `else` captura tudo o que não se encaixa.

**Tarefa completa**:
- Aceitar nota como variável
- Nota 10: \"Perfeito!\"
- Testes: 10, 8.5, 6, 4, 0

```php
<!DOCTYPE html>
<html>
<head><title>Classificação de Notas</title></head>
<body>
<?php
// 📥 Recebe nota do formulário ou teste direto
$nota = isset($_POST['nota']) ? floatval($_POST['nota']) : 8.5; // Teste: mude para 10, 8.5, 6, 4, 0

if ($nota == 10) {
    echo \"Perfeito! 🎉<br>\";
} elseif ($nota >= 9) {
    echo \"Excelente! 👏<br>\";
} elseif ($nota >= 7) {
    echo \"Bom! 👍<br>\";
} elseif ($nota >= 5) {
    echo \"Suficiente 📚<br>\";
} elseif ($nota >= 3) {
    echo \"Insuficiente, estude mais! 📖<br>\";
} else {
    echo \"Reprovado! 😞<br>\";
}

echo \"Nota analisada: $nota\";
?>

<!-- Formulário para teste interativo -->
<form method=\"POST\">
    <label>Nota (0-10): <input type=\"number\" step=\"0.1\" min=\"0\" max=\"10\" name=\"nota\" required></label>
    <button type=\"submit\">Classificar</button>
</form>
</body>
</html>
```

**Testes esperados**:
| Nota | Saída esperada      |
|------|---------------------|
| 10   | Perfeito! 🎉       |
| 8.5  | Bom! 👍            |
| 6    | Suficiente 📚      |
| 4    | Insuficiente       |
| 0    | Reprovado! 😞      |

**⚠ Atenção**: Sempre valide entrada: `if($nota < 0 || $nota > 10) echo \"Nota inválida\";`

### 1.2 Verificador de Ano Bissexto

**Lógica explicada pelo professor** (Regra Gregoriana):
```
(ano % 4 == 0) && (ano % 100 != 0 || ano % 400 == 0)
```
- Divisível por **4** ✅
- **MAS** se divisível por **100**, deve ser por **400**
- Use **parênteses** com `&&` e `||` para priorizar corretamente!

**Tarefas**:
- Testes: 2000, 1900, 2024, 2023
- \"Próximo bissexto: X\"
- Função `ehBissexto($ano)`

```php
<!DOCTYPE html>
<html>
<head><title>Ano Bissexto</title></head>
<body>
<?php
function ehBissexto($ano) {
    return ($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0);
}

// 📥 Teste ou formulário
$ano = isset($_POST['ano']) ? intval($_POST['ano']) : 2024;

if (ehBissexto($ano)) {
    echo \"$ano é **BISSEXTO** ✅<br>\";
} else {
    echo \"$ano **NÃO** é bissexto ❌<br>\";
}

// 🔮 Próximo bissexto
$proximo = $ano + 1;
while (!ehBissexto($proximo)) $proximo++;
echo \"Próximo ano bissexto: $proximo\";

$testes = [2000, 1900, 2024, 2023];
foreach ($testes as $t) {
    echo \"<br>Teste $t: \" . (ehBissexto($t) ? 'Sim' : 'Não');
}
?>

<form method=\"POST\">
    <input type=\"number\" name=\"ano\" value=\"<?=$ano?>\" required>
    <button>Verificar</button>
</form>
</body>
</html>
```

**Testes**:
| Ano  | Bissexto? | Razão |
|------|-----------|-------|
| 2000 | ✅ Yes   | %400==0 |
| 1900 | ❌ No    | %100==0 mas não %400 |
| 2024 | ✅ Yes   | %4==0, não %100 |
| 2023 | ❌ No    | Não %4 |

## 2. Comando switch

`switch` é ideal para **múltiplas opções discretas** (ex: números 1-7, strings). Cada `case` executa até `break` ou `default`.

**💡 Dica do professor**: **Sempre use `break`**! Sem ele ocorre **fall-through** (executa próximo case).

### 2.1 Dia da Semana (1-7)

**Lógica**: Mapeie número → nome do dia. Agrupe cases para reutilizar código.

**Tarefas**:
- Agrupar 1 e 7: \"Fim de semana\"
- Teste fall-through (remova break)
- Função `nomeDia($numero)`

```php
<!DOCTYPE html>
<html><head><title>Dia da Semana</title></head><body>
<?php
function nomeDia($numero) {
    switch($numero) {
        case 1:
        case 7:
            return \"Fim de semana 🏖️\";
        case 2:
            return \"Segunda-feira 💼\";
        case 3:
            return \"Terça-feira 📅\";
        case 4:
            return \"Quarta-feira ⚖️\";
        case 5:
            return \"Quinta-feira ⏰\";
        case 6:
            return \"Sexta-feira 🎉\";
        default:
            return \"Dia inválido (1-7)! ❌\";
    }
}

$dia = isset($_POST['dia']) ? intval($_POST['dia']) : 1;
echo \"Dia $dia: \" . nomeDia($dia);
?>

<form method=\"POST\">
    <input type=\"number\" min=\"1\" max=\"7\" name=\"dia\" required>
    <button>Ver dia</button>
</form>
</body></html>
```

**Teste fall-through**: Remova `break` após case 2 → \"Dia 2\" mostra \"Segunda + Terça\"!

### 2.2 Calculadora com switch

**Lógica**: Switch no **operador** (+,-,*,/,%) → execute operação.

**⚠ Atenção do professor**: **Trate divisão por zero** ANTES!

**Tarefas**:
- Operador %
- Formate: \"10 / 3 = 3.33\"
- Teste b=0

```php
<!DOCTYPE html>
<html><head><title>Calculadora</title></head><body>
<?php
$a = isset($_POST['a']) ? floatval($_POST['a']) : 10;
$b = isset($_POST['b']) ? floatval($_POST['b']) : 3;
$op = $_POST['op'] ?? '+';

$resultado = '';
$erro = '';

switch($op) {
    case '+': $resultado = $a + $b; break;
    case '-': $resultado = $a - $b; break;
    case '*': $resultado = $a * $b; break;
    case '/':
        if($b == 0) {
            $erro = \"❌ Divisão por zero!\";
        } else {
            $resultado = $a / $b;
        }
        break;
    case '%':
        if($b == 0) {
            $erro = \"❌ Módulo por zero!\";
        } else {
            $resultado = $a % $b;
        }
        break;
    default: $erro = \"Operador inválido!\";
}

if($erro) {
    echo $erro;
} elseif($resultado !== '') {
    $formatado = number_format($resultado, $op=='/' ? 2 : 0);
    echo \"$a $op $b = $formatado\";
}
?>

<form method=\"POST\">
    <input type=\"number\" step=\"0.01\" name=\"a\" value=\"<?=$a?>\" required>
    <select name=\"op\">
        <option>+</option><option>-</option><option>*</option><option>/</option><option>%</option>
    </select>
    <input type=\"number\" step=\"0.01\" name=\"b\" value=\"<?=$b?>\" required>
    <button>=</button>
</form>
</body></html>
```

**Testes**:
- 10 / 3 = 3.33
- 10 / 0 = \"Divisão por zero!\"

## 📝 Resumo das Lições do Professor

1. **if/elseif/else**: Condições encadeadas, ordem importa!
2. **switch**: Múltiplas opções → cases + **break obrigatório**
3. **Fall-through**: Útil para agrupar (dia 1+7), perigoso sem querer
4. **Validações**: Sempre trate erros (div/0, valores inválidos)
5. **Funções**: Encapsule lógica reutilizável (`ehBissexto`, `nomeDia`)

Copie cada exemplo em arquivos `.php` e teste no XAMPP! 🚀
