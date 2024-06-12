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
    public function bersuara() {
        return "Suara hewan";
    }
}

class Bebek extends Hewan {
    public function bersuara() {
        return "Kwek kwek!";
    }
}

class Kucing extends Hewan {
    // Method untuk mengeluarkan suara kucing
    public function bersuara() {
        return "Meong meong!";
    }
}

    function suaraHewan(Hewan $hewan) {
    return $hewan->bersuara();
    }    

$bebek = new Bebek();
$kucing = new Kucing();

echo suaraHewan($bebek);
echo suaraHewan($kucing);</code></pre>
</div>

    <div class="output-box">
        <pre><code class="output-content">Kwek kwek!<br>Meong meong!</code></pre>
    </div>
</main>
    <footer>
        <p>&copy; Informatika C</p>
    </footer>
</body>
</html>
