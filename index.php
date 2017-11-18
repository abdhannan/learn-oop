<html>
    <head>
        <title>Learn OOP</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        Learn OOP
        <h1 style="text-align: center;">huhuyyy</h1>

        <?php
        // include class file
        include('classes/hewan.php');
        include('classes/ikan.php');

        // buat object dr class hewan
        // buat object kuda dan burung dengan nilai parameter contructor
        $kuda = new Hewan('rumput', 'berlari');
        $burung = new Hewan('biji-bijian', 'terbang');

        // disini bisa diakses property public
        echo 'Makanan kuda adalah = ' . $kuda->makanan;
        echo '<br>';
        echo 'Makanan burung adalah = ' . $burung->makanan;
        echo '<hr>';
        
        // tapi tidak bisa mengakses property private
        // echo 'Makanan kuda adalah = ' . $kuda->caraBergerak;
        echo '<br>';
        // echo 'Makanan burung adalah = ' . $burung->caraBergerak;
        
        // coba akses method public
        echo 'kuda : '; 
        $kuda->bergerak();
        echo '<br>';
        echo 'burung : '; 
        $burung->bergerak();
        
        // buat object ikan
        $hiu = new Ikan('Daging');
        echo '<hr>';
        echo 'Makanan hiu adalah = ' . $hiu->makanan;
        echo '<br>';
        $hiu->bergerak();
        
        // coba panggil method static
        echo '<hr>';
        Hewan::test('dari luar kelas');
        
        ?>
      
    </body>
</html>
