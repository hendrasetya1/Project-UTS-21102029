<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('prj')</title>
    <link rel= "stylesheet" href="css/style.css">
    <link rel= "stylesheet" href="css/prjstyle.css">
    

</head>
<body>
    <div class="container m">
        <ul>
            <li><a href="/utshendra/public/">PROJEK</a></li>
            <li><a href="/utshendra/public/komponen">KOMPONEN</a></li>
            <li><a href="/utshendra/public/kode">CODE</a></li>
                       
        </ul>
    </div>


    <div class="container prj">
        <h2>ALAT PENDETEKSI POLARITAS MAGNET</h2>

        <img src="prc/myprojek1.jpg" alt="my projek" width="300" height="450" style="display:block; margin:auto;">
    </div>

    <div class="container prjisi">
        <p>
        Magnet merupakan salah satu jenis logam yang mampu menarik benda tertentu. 
        Magnet diambil dari bahasa yunani “magnitis lithos” yang berarti batu magnesian. 
        Pada kesempatan kali ini akan membuat sebuah alat untuk mendeteksi polaritas dari sebuah magnet. 
        Pada dasarnya, magnet memiliki kutub-kutub atau polaritas yaitu kutub utara dan kutub selatan. 
        Namun tidak semua magnet dapat diketahui polaritasnya. 
        Ada beberapa cara sederhana untuk mengetahui kutub magnet, 
        akan tetapi tidak bisa diterapkan pada semua magnet.
    </p>

    <p>
        Alat yang dibuat saya berikan nama yaitu ”ALAT PENDETEKSI POLARITAS MAGNET MENGGUNAKAN ANALOG HALL SENSOR”.
         Untuk mengetahui polaritas dari sebuah magnet, tentu diperlukan sebuah sensor untuk mendeteksinya. 
         Salah satu sensor tersebut adalah KY035 analog hall sensor. 
         Sensor jenis ini dapat mengetahui jenis dari polaritas magnet. 
         Selain itu, diperlukan LED sebagai indikator polaritas magnet. 
         LED yang saya gunakan adalah LED 2 color karena outputan dari sensor analog hall 
         akan mengluarkan 2 hasil yaitu kutub utara dan selatan. LED akan menyala kuning jika 
         terdeteksi kutub utara dan menyala merah pada kutub sebaliknya.
    </p>

    <p>
        Alat ini bekerja ketika magnet didekatkan dengan sensor. 
        Pada gambar tersebut, letak sensor ada pada titik hitam tengah. 
        Ketika magnet didekatkan atau ditempatkan pada titik tersebut, 
        sensor akan mendeteksi kutub magnet dan akan menampilkan jenis kutubnya ke LCD juga. 
        Jadi Selain LED 2 color,terdapat juga LCD untuk menampilkan hasil.
    </p>

    </div>



    <div class="container footer">
        &copy;by Hendra Setyawan

    </div>
</body>
</html>