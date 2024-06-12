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
        <pre><code class="language-python">class mobil {
    private $roda = 4;

    private function jalan() {
        echo "mobil berjalan";
    }

    public function jumlahRoda() {
        echo $this->roda;
    }

    public function aktifkanJalan() {
        $this->jalan();
    }
}

$avanza = new mobil();
$avanza->jumlahRoda();
$avanza->aktivkanJalan();</code></pre>
</div>
    
<div class="output-box">
    <pre><code class="output-content">jumlah roda: 4 <br>Mobil Berjalan</code></pre>
</div>
</main>
    <footer>
        <p>&copy; Informatika C</p>
    </footer>
</body>
</html>