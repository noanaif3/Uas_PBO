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
    <pre><code class="language-python">class Calculator {
    
    public function __call($name, $arguments) {
        
    if ($name == 'add') {
            
     $sum = 0;
            
     foreach ($arguments as $arg) {
      $sum += $arg;
    }
        
     return $sum;
     } else {
            
    BadMethodCallException("Method $name not defined");
    }
 }
}

$calc = new Calculator();
echo "Sum of 1 and 2: " . $calc->add(1, 2);
echo "Sum of 1, 2 and 3: " . $calc->add(1, 2, 3);
echo "Sum of 1, 2, 3 and 4: " . $calc->add(1, 2, 3, 4);</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">Sum of 1 and 2: 3 <br>
Sum of 1, 2 and 3: 6 <br>
Sum of 1, 2, 3 and 4: 10</code></pre>
    </div>

</main>
    <footer>
        <p>&copy; Informatika C</p>
    </footer>
</body>
</html>
