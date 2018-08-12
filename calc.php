<?php
if (isset($_GET['limpa'])) {
  header("Location: index.php");
}
if (isset($_GET['calcular'])) {

  if (!empty($_GET['num1']) or !empty($_GET['num2'])) {

  $a = $_GET['num1'];
  $b = $_GET['num2'];
  $op = $_GET['operacao'];

  class calc {
    public $a;
    public $b;
    public $op;
    public $result = null;

      public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
      }
      public function soma() {
        return $this->a + $this->b;
      }
      public function subtrai() {
        return $this->a - $this->b;
      }
      public function multiplica() {
        return $this->a * $this->b;
      }
      public function divide() {
        return $this->a / $this->b;
      }
      public function resto() {
        return $this->a % $this->b;
      }
      public function potencia() {
        return $this->a ** $this->b;
      }

        public function calcula($op) {
            switch ($op) {

              case 'selecione':
                echo "Escolha um operador!";
                break;

              case '+':
                $this->result = $this->soma();
                break;

                case '-':
                  $this->result = $this->subtrai();
                  break;

                  case '*':
                    $this->result = $this->multiplica();
                    break;

                    case '/':
                    if ($this->b == 0) {
                      echo "Não é possivel dividir por 0!";
                      exit();
                    } else {
                      $this->result = $this->divide();
                    }
                      break;

                      case '%':
                        $this->result = $this->resto();
                        break;

                      case '**':
                        $this->result = $this->potencia();
                        break;
              }
              if ($this->result !== null) {
                echo $this->result;
              }
          }
      }
  $calc = new calc($a, $b);
  $calc->calcula($op);
} else {
  echo "Indique valores!!!";
}
}
?>
