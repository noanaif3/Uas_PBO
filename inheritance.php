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
        <pre><code class="language-python">class Hewan {
    
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function suara() {
        return "Suara hewan";
    }
}

class Anjing extends Hewan {

    public function suara() {
        return "Guk Guk!";
    }
}

$anjingSaya = new Anjing("Buddy");
echo "Nama Hewan: " . $anjingSaya->getNama();
echo "Suara Hewan: " . $anjingSaya->suara();</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">nama hewan: Buddy<br>suara hewan: Guk Guk!</code></pre>
    </div>
</main>
    <footer>
        <p>&copy; Informatika C</p>
    </footer>
</body>
</html>
