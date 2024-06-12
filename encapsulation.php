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
    <pre><code class="language-python">class Mobil {
    
    private $merk;
    private $warna;
    
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getWarna() {
        return $this->warna;
    }

}

$mobilSaya = new Mobil("Avanza", "Merah");
$mobilSaya->setWarna("Biru");

echo "Merk Mobil: " . $mobilSaya->getMerk();
echo "Warna Mobil: " . $mobilSaya->getWarna();</code></pre>
</div>

<div class="output-box">
    <pre><code class="output-content">merek mobil: Avanza<br>warna mobil: Biru</code></pre>
</div>
</main>
    <footer>
        <p>&copy; Informatika C</p>
    </footer>
</body>
</html>
