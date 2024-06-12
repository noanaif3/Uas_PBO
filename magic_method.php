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

    // Constructor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function __toString() {
        return "Mobil {$this->merk} & {$this->warna}";
    }

    public function __call($namaMetode, $argumen) {
        echo "Metode '$namaMetode';
    }

    public function __isset($warna) {
        $warna = $this->warna;
        echo "warna mobil: $warna";
    }

    public function __unset($merek) {
        $merek = $this->merk;
        echo "merek mobil: $merek";
    }

}

$mobil = new Mobil("Pajero", "Merah");

//Menggunakan __toString()
echo "Info Mobil: $mobil\n";

// Mencoba memanggil metode yang tidak ada
$mobil->metodeTidakAda();

// Mengecek apakah properti ada menggunakan __isset()
echo isset($mobil->harga);</code></pre>
</div>

    <div class="output-box">
        <pre><code class="output-content">info mobil: Mobil Pajero <br>Berwarna: Merah</code></pre>
    </div>

</main>
    <footer>
        <p>&copy; Informatika C</p>
    </footer>
</body>
</html>
