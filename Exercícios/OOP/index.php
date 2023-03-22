<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos de OOP</title>
</head>

<body>
    <?php

    //Definindo o objeto com a classe
    class Car {
    private $make;
    private $model;
    private $year;
    //método private só pode ser chamado na prória classe, já o métodos protect pode ser chamado também nas subclasses

    public function __construct($make, $model, $year) {
    // o método construct é chamado no inicio da classe e também das subclasses
    $this->make = $make;
    $this->model = $model;
    $this->year = $year;
    }

    public function getMake() {
    return $this->make;
    }

    public function getModel() {
    return $this->model;
    }

    public function getYear() {
    return $this->year;
    }

    public function setMake($make) {
    $this->make = $make;
    }

    public function setModel($model) {
    $this->model = $model;
    }

    public function setYear($year) {
    $this->year = $year;
    }

    public function drive() {
    echo "Dirigindo um " . $this->model . " " . $this->year.  ", da " . $this->make . "... <br>";
    }
    }

    $myCar = new Car("Toyota", "Corolla", 2022);
    $myCar->setMake("Honda");
    $myCar->drive();

//Nesse programa recebe dois números e calcula de acordo com a operação escolhida

class Calculator {
    private $num1;
    private $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function add() {
        return $this->num1 + $this->num2;
    }

    public function subtract() {
        return $this->num1 - $this->num2;
    }

    public function multiply() {
        return $this->num1 * $this->num2;
    }

    public function divide() {
        if ($this->num2 == 0) {
            throw new Exception("Não é possível dividir por zero.");
        }
        return $this->num1 / $this->num2;
    }
}

$num1 = 10;
$num2 = 5;
$operation = "add"; // Pode ser "add", "subtract", "multiply" ou "divide"

$calculator = new Calculator($num1, $num2);

switch ($operation) {
    case "add":
        $result = $calculator->add();
        break;
    case "subtract":
        $result = $calculator->subtract();
        break;
    case "multiply":
        $result = $calculator->multiply();
        break;
    case "divide":
        $result = $calculator->divide();
        break;
    default:
        throw new Exception("Operação inválida.");
}

echo "Resultado: " . $result . "<br>";
    
// Classe Abstract 

abstract class Animal {
    protected $name;
    protected $sound;
  
    public function __construct($name, $sound) {
      $this->name = $name;
      $this->sound = $sound;
    }
  
    abstract public function makeSound();
  }
  
  // Classe filha
  class Dog extends Animal {
    public function makeSound() {
      return $this->sound;
    }
  }
  
  // Instanciar o objeto Dog
  $dog = new Dog("Tonhão", "Tótó!");
  
  // Chamando o método makeSound()
  echo $dog->makeSound() . "<br>"; 

  // Classe com Interface
interface Vehicle {
    public function start();
    public function stop();
  }
  
  // CarClass implementa a interface Vehicle 
  class CarClass implements Vehicle {
    public function start() {
      echo "Carro ligou." . PHP_EOL;
    }
  
    public function stop() {
      echo "Caro parou." . PHP_EOL;
    }
  }
  
  // Bike implementando a mesna interface Vehicle
  class Bike implements Vehicle {
    public function start() {
      echo "A bicicleta começou a andar." . PHP_EOL;
    }
  
    public function stop() {
      echo "A bicileta parou." . PHP_EOL;
    }
  }
  
  // Instanciando o objeto CarClass 
  $car = new CarClass();
  
  // Chamando os métodos start e stop
  $car->start(); 
  $car->stop(); 
  
  // Instanciando o objeto Bike
  $bike = new Bike();
  
  // Chamando os métodos start() e stop() para bike 
  $bike->start();
  $bike->stop(); 

  
  

  class MyClass {
    public static $varStatic = "<br> Olá, mundo!"; // variável estática
  
    public function __construct() {
      echo " <br>Criando uma nova instância de MyClass\n";
    }
  
    public function __destruct() {
      echo "<br> Destruindo instância de MyClass\n";
    }
  
    public function metodoComum() {
      echo "<br> Este é um método comum.\n";
    }
  
    final public function metodoFinal() { // método final
      echo "<br> Este é um método final.\n";
    }
  }
  
  $instancia = new MyClass(); // criando instância de MinhaClasse
  $instancia->metodoComum(); // chamando método comum
  $instancia->metodoFinal(); // chamando método final
  
  echo MyClass::$varStatic; // acessando variável estática
    ?>



</body>

</html>