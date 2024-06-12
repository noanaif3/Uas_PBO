<!DOCTYPE html>
<html>
<head>
    <title>UAS PBO</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <header>
        <div>
            <h1>WEBSITE NOANA</h1>
        </div>
        <nav>
            <ul>
                
                <li><a href="index.php">Home</a></li>
                <li><a href="class_method_objek.php">Class Method Object</a></li>
                <li><a href="encapsulation.php">Encapsulation</a></li>
                <li><a href="inheritance.php">Inheritance</a></li>
                <li><a href="polimorphism.php">Polimorphism</a></li>
                <li><a href="magic_method.php">Magic Method</a></li>
                <li><a href="abstraksi.php">Abstraksi</a></li>
                <li><a href="overriding.php">Overriding</a></li>
                <li><a href="overloading.php">Overloading</a></li>
            </ul>
        </nav>
    </header>
<main>
<div class="code-box">
        <pre><code class="language-python">abstract class Shape {
    abstract public function calculateArea();
    abstract public function calculatePerimeter();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }

    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }

    public function calculatePerimeter() {
        return 4 * $this->side;
    }
}

$circle = new Circle(5);
echo "Luas lingkaran:".$circle->calculateArea();
echo "Keliling lingkaran:".$circle->calculatePerimeter();

$square = new Square(4);
echo "Luas persegi:".$square->calculateArea();
echo "Keliling persegi:".$square->calculatePerimeter();</code></pre>
</div>

    <div class="output-box">
        <pre><code class="output-content">luas lingkaran: 78.539816339745<br>
keliling lingakaran: 31.415926535898<br>
luas persegi: 16<br>
keliling persegi: 16        </code></pre>
    </div>

</main>
    <footer>
        <p>&copy; Informatika C</p>
    </footer>
</body>
</html>
