<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('rangcode')</title>
    <link rel= "stylesheet" href="css/style.css">
    <link rel= "stylesheet" href="css/codestyle.css">
    

</head>
<body>
    <div class="container m">
        <ul>
            <li><a href="/utshendra/public/">PROJEK</a></li>
            <li><a href="/utshendra/public/komponen">KOMPONEN</a></li>
            <li><a href="/utshendra/public/kode">CODE</a></li>
                       
        </ul>
    </div>

    <div class="container jdlrang">
        <h2>RANGKAIAN</h2>

        <img src="prc/rangkaian.jpg" alt="Gambar rangkaian" width="550" height="550" style="display:block; margin:auto";>
        </div>

    <div class="container rang">
        <p>
        Adapun rangkaian dari alat pendeteksi polaritas magnet seperti pada diatas. 
        VCC dan gnn dihungkan pada breadboard untuk memudahkan pembagian sumber tegangan. 
        Pada sensor analog hal kabel merah merupakan VCC dan Hitam adalah gnd sedangkan kabel orange 
        terhubung ke pin A0 arduino. Untuk LCD pin SDA terhubung ke pin A4 arduino dengan kabel berwarna 
        hijau dan pin SCL ke pin A5 arduino pada kaleb biru, dan untuk tegangan LCD juga menganbil dari 
        breadboard yang sudah terhubung ke arduino yaitu merak sebagai VCC dan hitam sebagai gnd. 
        Dan LED 2 color, gnd pada LED terhubung pada gnd pada breadboard, 
        dan pin tengah dan ujung kanan pada LED terhubung dengan pin 5 dan 6 pada arduino.
        
        </p>

    </div>
    
    <div class="container jdlcode">

        <h2>CODE</h2>   
    </div>

    <div class="container code">
        <p>
        Berikut code dari sensor pendeteksi polaritas magnet:
        </p>        
    </div>

    <div class="container imgcode1">
        <img src="prc/code1.png" width="300" height="400">        
    </div>
    <div class="container imgcode2">
        <img src="prc/code2.png" width="250" height="400">        
    </div>

    <div class="container footer">
        &copy;by Hendra Setyawan

    </div>


</body>
</html>