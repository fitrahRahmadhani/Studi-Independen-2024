<?php
include 'Mahasiswa.php';
include 'Dosen.php';
include 'KRS.php';
include 'Matakuliah.php';

// Instansiasi objek dosen
$dosen1 = new Dosen("Gada Megantara", "88708401");
$dosen2 = new Dosen("Bakda Suwarno", "75052119");
$dosen3 = new Dosen("Rahmat Ardianto", "75052119");
$dosenArray = [$dosen1, $dosen2, $dosen3];

// Instasiasi objek matakuliah
$mataKuliah1 = new MataKuliah("Pemrograman Web", "Selasa, 13.00 - 15.00", "3");
$mataKuliah2 = new MataKuliah("Basis Data", "Senin, 09.00 - 10.30", "2");
$mataKuliah3 = new MataKuliah("Jaringan Komputer", "Rabu, 08.00 - 09.30", "2");
$mataKuliahArray = [$mataKuliah1, $mataKuliah2, $mataKuliah3];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
  $nim = isset($_POST['nim']) ? htmlspecialchars($_POST['nim']) : '';
  $jurusan = isset($_POST['jurusan']) ? htmlspecialchars($_POST['jurusan']) : '';

  $mahasiswa = new Mahasiswa($nama, $nim, $jurusan);

  // Menambahkan mata kuliah yang dipilih ke dalam objek KRS mahasiswa
  if (isset($_POST["matkul"])) {
    $mataKuliahInput = $_POST["matkul"];
    foreach ($mataKuliahInput as $mataKuliahNama) {
      // Mencari objek MataKuliah yang sesuai dengan nama yang dipilih
      foreach ($mataKuliahArray as $mataKuliah) {
        if ($mataKuliah->getNama() === $mataKuliahNama) {
          $mahasiswa->tambahMataKuliah($mataKuliah);
        }
      }
    }
  }

  // Memeriksa apakah dosen dipilih
  if (isset($_POST["dosen"])) {
    $dosenNama = $_POST["dosen"];
    // Mencari objek dosen yang sesuai dengan nama yang dipilih
    foreach ($dosenArray as $dosen) {
      if ($dosen->getNama() === $dosenNama) {
        $mahasiswa->setDosenWali($dosen);
        break;
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP | Form KRS</title>

  <!-- Google Font API -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

  <!-- Google Icon API -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <section class="form-container">
    <h1>Form KRS</h1>
    <form action="" method="post">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required>
      <label for="nim">NIM:</label>
      <input type="text" id="nim" name="nim" required>
      <label for="jurusan">Jurusan:</label>
      <input type="text" id="jurusan" name="jurusan" required>
      <label for="dosen">Pilih DPA:</label>
      <select name="dosen" id="dosen">
        <option value="">Pilih DPA </option>
        <?php foreach ($dosenArray as $dosen) : ?>
          <option value="<?php echo $dosen->getNama(); ?>"><?php echo $dosen->getNama(); ?></option>
        <?php endforeach; ?>
      </select>
      <label for="matkul">Pilih Mata Kuliah:</label>
      <div id="form__checkbox">
        <?php foreach ($mataKuliahArray as $index => $mataKuliah) {
          echo '<input type="checkbox" class="form-checkbox__item" id="matkul' . ($index + 1) . '" name="matkul[]" value="' . $mataKuliah->getNama() . '"> ' . $mataKuliah->getNama() . ' | ' . $mataKuliah->getJadwal() .  ' | SKS: ' . $mataKuliah->getSks() . '<br>';
        } ?>
      </div>
      <button type="submit">Submit</button>
    </form>
  </section>

  <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($nama)) { ?>

    <div class="result-container">
      <h3>Data mahasiswa berhasil disimpan!</h3>
      <p>Nama: <?php echo $mahasiswa->getNama() ?></p>
      <p>NIM: <?php echo $mahasiswa->getNIM() ?></p>
      <p>Jurusan: <?php echo $mahasiswa->getJurusan() ?></p>
      <h4>Dosen Pembina Akademik:</h4>
      <?php if ($mahasiswa->getDosenWali()) { ?>
        <p>Nama Dosen: <?php echo $mahasiswa->getDosenWali()->getNama() ?></p>
        <p>Nama Dosen: <?php echo $mahasiswa->getDosenWali()->getNomorInduk() ?></p>
      <?php } else { ?>
        echo "<br>Belum ada Dosen Wali dipilih<br>";
      <?php } ?>
      <h4>Mata Kuliah yang Dipilih:</h4>
      <ul>
        <?php
        foreach ($mahasiswa->getKRS()->getMataKuliah() as $mataKuliah) { ?>
          <li><?php echo $mataKuliah->getNama() . " " . $mataKuliah->getJadwal(); ?></li>
        <?php  } ?>
      </ul>
    </div>
  <?php } else { ?>
    <div class="empty-container">
      <div class="empty-container__icon">
        <span class="material-symbols-outlined">
          hourglass_disabled
        </span>
      </div>
      <div class="empty-container__content">
        <h3>Objek mahasiswa belum di buat</h3>
        <p>Silahkan buat objek terlebih dahulu dengan mengisikan data pada form di samping</p>
      </div>
    </div>
  <?php } ?>
</body>

</html>