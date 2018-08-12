<!doctype html>
<html>
<head>
<title>Calculadora</title>
<meta charset="utf-8">
<style type="text/css">
  #principal {
    border-style: ridge;
    border-radius: 3px;
    border-width: 2px;
    border-color: black;
  }
</style>
</head>
<body>
<div align="center" id="principal">
  <form method="get">
    <input type="number" name="num1"><br>
    <select name="operacao">
      <option selected value="selecione">Selecione</option>
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
      <option value="%">%</option>
      <option value="**">**</option>
    </select>
    <br>
    <input type="number" name="num2"><br>
    <input type="submit" name="calcular" value="Calcular">
    <input type="submit" name="limpa" value="Limpar">
  </form>
  <br>
  <br>
  <div>
    <p><strong>Resultado</strong></p>
    <br>
    <?php include ("calc.php"); ?>
  </div>
</div>
</body>
</html>
