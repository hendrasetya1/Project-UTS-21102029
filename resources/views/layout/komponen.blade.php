<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('kmp')</title>
    <link rel= "stylesheet" href="css/style.css">
    <link rel= "stylesheet" href="css/kompstyle.css">
    

</head>
<body>
    <div class="container m">
        <ul>
            <li><a href="/utshendra/public/">PROJEK</a></li>
            <li><a href="/utshendra/public/komponen">KOMPONEN</a></li>
            <li><a href="/utshendra/public/kode">CODE</a></li>
                       
        </ul>
    </div>

    <div class="container jdl">
        <h2>KOMPONEN YANG DIGUNAKAN</h2>
    </div>

    <div class="container isi">
        <p>
            Dalam membuat alat pendeteksi polaritas magnet, ada beberapa sensor yang perlu disiapkan, antara lain:
        </p>
        
        <h4>1. Sensor Analog Hall </h4>

        <img src="prc/magnetsensor.jpg" alt ="KY035" style="display:block; margin:auto;">

        <p>
        Hall effect sensor atau sensor efek hall adalah komponen jenis transducer yang bisa mengubah 
        informasi magnetik menjadi sinyal listrik untuk pemrosesan rangkaian elektronik selanjutnya.
         Hall effect sensor ini sering digunakan sebagai sensor untuk mendeteksi kedekatan (proximity), 
         posisi (positioning), kecepatan (speed), pergerakan arah (directional) dan arus listrik 
         (current sensing). Efek hall ini ditemukan oleh Dr. Edwin Hall pada tahun 1879. 
         Untuk dapat menghasilkan perbedaan potensial diseluruh perangkat, 
         garis fluks magnetik harus tegak lurus (90 derajat) terhadap aliran 
         listrik dengan kutub yang benar. Nama “Hall” ini diambil dari nama penemu 
         efek ini yaitu Dr. Edwin Hall. Dasar dari prinsip kerja efek hall ini adalah 
         gaya Lorentz yakni gaya yang ditimbulkan oleh muatan listrik yang bergerak dalam 
         suatu medan magnet (B). Sensor ini bekerja ketika didekatkan dengan medan magnet 
         atau ditempatkan pada lokasi yang bermedan magnet, garis fluks magnetik akan menggunakan 
         gaya pada semikonduktor tersebut untuk mengalihkan muatan ke kedua sisi pelat semikonduktor.
    </p>
    
        <h4>2. LED 2 Color </h4>

        <img src="prc/led.jpg" alt= "LED2Color" style="display:block; margin:auto;" >

        <p>
        LED merupakan kependekan dari Light Emitting Diode, 
        yakni salah satu dari banyak jenis perangkat semikonduktor yang mengeluarkan 
        cahaya ketika arus listrik melewatinya. 
        LED 2 color sama halnya dengan LED pada umumnya, 
        hanya saja LED 2 color memiliki 2 warna pada satu LED nya.
        </p>
    
        <h4>3. Arduino Uno R3 </h4>

        <img src="prc/ardu.jpg" alt="Arduino" width="400" height="300" style="display:block; margin:auto;">

        <p>
        Arduino merupakan sebuah perangkat elektronik yang bersifat open source dan sering 
        digunakan untuk merancang dan membuat perangkat elektronik serta software yang mudah 
        untuk digunakan. Arduino ini dirancang sedemikian rupa untuk mempermudah penggunaan perangkat 
        elektronik di berbagai bidang. Arduino ini memiliki beberapa komponen penting di dalamnya, 
        seperti pin, mikrokontroler, dan konektor yang nanti akan dibahas lebih dalam selanjutnya. 
        Selain itu, Arduino juga sudah menggunakan bahasa pemrograman Arduino Language yang sedikit 
        mirip dengan bahasa pemrograman C++. 
        Pada projek ini, arduino digunakan sebagai mikrokontoller dari alat pendeteksi polaritas magnet. 
         </p>
    
        <h4>4. LCD 16x2 dengan I2c module  </h4>

        <img src="prc/lcd.jpg" alt="LCD I2c" height="300" width="400" style="display:block; margin:auto;">

        <p>
        LCD (Liquid Crystal Display) 16x2 adalah salah satu media penampil
         yang sangat populer digunakan sebagai interface antara mikrokontroler dengan user nya. 
         Dengan penampil LCD 16x2 ini user dapat melihat/memantau keadaan sensor ataupun keadaan jalanya program.
        Inter Integrated Circuit atau sering disebut I2C adalah standar komunikasi 
        serial dua arah menggunakan dua saluran yang didisain khusus untuk mengirim 
        maupun menerima data. Sistem I2C terdiri dari saluran SCL (Serial Clock) dan SDA 
        (Serial Data) yang membawa informasi data antara I2C dengan pengontrolnya. 
        Jika tidak memakai I2C Juga bisa untuk menampilkan text pada LCD akan tetapi
         harus merangkai semua pin yang berada pada LCD ke Arduino. Jadi disarankan 
         lebih baik menggunakan I2C saja.
        </p>
    
        <h4>5. Breadboard </h4>

        <img src="prc/bb.jpg" alr="breadboard" height="300" width="300"style="display:block; margin:auto;">

        <p>
        Breadboard adalah sejenis papan yang biasanya digunakan untuk membuat prototype rangkaian elektronik.
         Beberapa orang kadang menyebutnya project board atau bahkan  protoboard (prototype board). 
         Pada dasarnya breadboard adalah board yang digunakan untuk membuat rangkaian elektronik tanpa harus 
         merepotkan pengguna untuk menyolder. Biasanya papan 
        breadboard ini digunakan untuk membuat rangkaian elektronik sementara untuk tujuan uji coba atau prototype. 
        </p>
    
        <h4>6. Kabel Jumper </h4>

        <img src="prc/kabel.jpg" alt = "Kabel Jumper"style="display:block; margin:auto;">

        <p>
        Kabel jumper adalah kabel elektrik yang memiliki pin konektor di setiap ujungnya dan 
        memungkinkanmu untuk menghubungkan dua komponen yang melibatkan Arduino tanpa memerlukan solder. 
        Kabel Jumper memiliki beberapa jenis, diantaranya male to male, male to female, dan female to female. 
        Pada projek ini hanya menggunakan 2 jenis kabel jumper, yaitu male to male dan male to female.
        </p>
    </div>


    <div class="container footer">
        &copy;by Hendra Setyawan

    </div>


</body>
</html>