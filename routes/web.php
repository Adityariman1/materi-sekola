<?php
 
use Illuminate\Support\Facades\Route;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
  
Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    $nama = "adit";
    $kelas = "RPL 1";
    $umur = 17;
    $alamat = "Bandung";
    return view('halo', compact('nama','kelas','umur','alamat')) ;
});

Route::get('/biodata', function () {
    echo "<h1>Biodata</h1>";
    echo "Nama : Aditya Riman Sanjaya<br>";
    echo "TTL : Garut, 09 juni 2004<br>";
    echo "Alamat : Komplek NataEndah<br>";
    echo "Jenis Kelamin : Laki laki<br>";
    echo "Hobi : Berenang<br>";
    echo "Golongan Darah : AB";
});
  
Route::get('/input/{nama}/{ttl}/{alamat}/{jk}/{hobi}/{gd}', function($nama,$ttl,$alamat,$jk,$hobi,$gd) 
{ 
    echo "Nama : ". $nama . "<br>";
    echo "TTL : " . $ttl . "<br>";
    echo "Alamat : " . $alamat . "<br>";
    echo "Jenis Kelamin : " . $jk . "<br>";
    echo "Hobi : " . $hobi . "<br>";
    echo "Golongan Darah : " . $gd;
});
  
Route::get('/optional/{nama?}/{usia?}', function ($nama="Siapa Nama Nya",$usia=0) {
    echo "Nama : ". $nama . "<br>";
    echo "Usia : " . $usia . "<br>";
});
  
Route::get('/ujian/{nama}/{kelas}/{mtk?}/{indo?}/{inggris?}/{produktif?}', function ($nama,$kelas,$mtk=0,$indo=0,$inggris=0,$produktif=0) {
    echo "Nama : ". $nama . "<br>";
    echo "Kelas : " . $kelas . "<br>";
    echo "Nilai Matematika : ". $mtk . "<br>";
    echo "Nilai Indonesia : ". $indo . "<br>";
    echo "Nilai Inggris : ". $inggris . "<br>";
    echo "Nilai Produktif : ". $produktif . "<br>";
    $rata = ($mtk + $indo + $inggris + $produktif) / 4 ; 
    echo "Rata rata : ". $rata;
});
    
Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {
    
    if($makanan && $minuman && $cemilan != null){
        return "Anda memesan <br> 
                Makanan : $makanan <br>
                Minuman : $minuman <br>
                Cemilan : $cemilan";
    }else if($makanan && $minuman != null){
        return "Anda memesan <br> 
                Makanan : $makanan <br>
                Minuman : $minuman";
    }else if($makanan != null){
        return "Anda memesan <br>
                makanan : $makanan" ;
    }else {
        return "Anda tidak memesan silahkan pulang";
    }
});

Route::get('posting/{nama?}/{kelas?}/{jk?}', function($nama,$kelas,$jk){
    return view('post',
        [   'a' => $nama,
            'b' => $kelas,
            'c' => $jk
        ]);
});

Route::get('blog', function(){
    $data = [
        ['id' => 1, 'title' => 'Olahraga', 'content' => 'Sepak Bola'],
        ['id' => 2, 'title' => 'Ekonomi', 'content' => 'Hutang RI Ke Luar Negri']
    ];
    return view('blog', compact('data'));
});

Route::get('data-siswa', function(){
    $data = [
        ['nis' => 1, 'nama' => 'Adi', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 2', 'walikelas' => 'Bu Herna'],
        ['nis' => 2, 'nama' => 'Adit', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'walikelas' => 'Bu Herna'],
        ['nis' => 3, 'nama' => 'agung', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'walikelas' => 'Bu Herna'],
        ['nis' => 4, 'nama' => 'Jojo', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'walikelas' => 'Bu Herna'],
        ['nis' => 5, 'nama' => 'Euis', 'jk' => 'Perempuan', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'walikelas' => 'Bu Herna'],
        ['nis' => 6, 'nama' => 'Hasan', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 2', 'walikelas' => 'Miss Yanti'],
        ['nis' => 7, 'nama' => 'Nazwan', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'walikelas' => 'Bu Herna'],
        ['nis' => 8, 'nama' => 'Palah', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'walikelas' => 'Bu Herna'],
        ['nis' => 9, 'nama' => 'Cecep', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'walikelas' => 'Bu Herna'],
        ['nis' => 10, 'nama' => 'Bagas', 'jk' => 'Laki-laki', 'jurusan' => 'RPL', 'kelas' => 'XII RPL 1', 'walikelas' => 'Bu Herna'],
    ];
    return view('data-siswa', compact('data'));
});


Route::get('siswa', function(){
    $siswas = [
        [
            'id' => 1,
            'nama' => 'adit',
            'username' => 'Adit',
            'email' => 'Aditya@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Bahasa Inggris',
                'mapel3' => 'Bahasa Jepang'
            ]
        ],
    ];
    return view('siswa', compact('siswas'));
});

Route::get('hobi', function(){
    $hobis = [
        [
            'nis' => 1001,
            'nama' => 'Adzura',
            'kelas' => '12 RPL 1',
            'hobi' => [
                'hobi1' => 'Pergi Ke CC',
                'hobi2' => 'Tiktokan',
                'hobi3' => 'Makan Banyak'
            ]
        ],
        [
            'nis' => 1002,
            'nama' => 'Ikbal',
            'kelas' => '12 RPL 1',
            'hobi' => [
                'hobi1' => 'Main Bola',
                'hobi2' => 'Ngaji',
                'hobi3' => 'Memamancing',
                'hobi4' => 'Selalu Tersenyum'
            ]
        ],
    ];
    return view('hobi', compact('hobis'));
});