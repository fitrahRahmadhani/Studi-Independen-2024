<?php
// Start Session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
  $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
  $whatsapp = isset($_POST['whatsapp']) ? htmlspecialchars($_POST['whatsapp']) : '';
  $alamat = isset($_POST['alamat']) ? htmlspecialchars($_POST['alamat']) : '';

  $_SESSION['nama'] = $nama;
  $_SESSION['email'] = $email;
  $_SESSION['whatsapp'] = $whatsapp;
  $_SESSION['alamat'] = $alamat;
}

if (isset($_POST['hapus_session'])) {
  session_start();
  session_unset();
  session_destroy();
  header("Location: index.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form with Session</title>

  <!-- Google Font API -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

  <!-- Google Icon API -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <style>
    * {
      padding: 0;
      margin: 0;
    }
    body {
      width: 100wh;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 40px;
      background-color: #F8F8F8;
      font-family: "Inter", sans-serif;
    }
    .form-container {
      width: 600px;
      padding: 24px;
      box-sizing: border-box;
      border-radius: 20px;
      background-color: #fff;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 20px;
    }
    .form-container>h1 {
      margin: 18px 0px;
      font-size: 32px;
      letter-spacing: -1px;
      text-align: center;
    }
    .form-container form {
      display: flex;
      flex-direction: column;
    }
    .form-container form label {
      font-size: 20px;
      font-weight: 500;
      margin-bottom: 8px;
      color: #111111;
    }
    .form-container form label span {
      color: orangered;
    }
    .form-container form input {
      width: 100%;
      height: 44px;
      padding: 8px;
      font-size: 18px;
      box-sizing: border-box;
      margin-bottom: 20px;
      border: 3px solid #EEEEEE;
      border-radius: 8px;
      background-color: #F9F9F9;
    }
    .form-container form input:focus {
      outline-color: #007AFF;
    }
    .form-container form button {
      height: 48px;
      font-size: 20px;
      color: #fff;
      margin: 20px 0px;
      border: none;
      border-radius: 8px;
      background-color: #007AFF;
      transition: .3s ease-in-out;
    }
    .form-container form button:hover {
      background-color: #005EDB;
    }
    .form-container p {
      text-align: center;
      opacity: 70%;
    }
    .status {
      width: 600px;
    }
    .status .empty-session {
      display: flex;
      gap: 20px;
      padding: 24px;
      box-sizing: border-box;
      border-radius: 20px;
      border: 3px solid #D9D9D9;
      background-color: #EEEEEE;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 20px;
    }
    .status .empty-session .empty-session__icon {
      padding: 20px;
      background-color: #E1E1E1;
      border-radius: 10px;
      color: #54595E;
    }
    .status .empty-session .empty-session__content {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }
    .status .empty-session .empty-session__content h3 {
      color: #54595E;
    }
    .status .empty-session .empty-session__content p {
      opacity: 60%;
    }
    .status .session-active {
      display: flex;
      flex-direction: column;
      gap: 20px;
      padding: 24px;
      box-sizing: border-box;
      border-radius: 20px;
      border: 3px solid #7CD362;
      background-color: #D6FCD2;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 20px;
    }
    .status .session-active__container {
      display: flex;
      gap: 20px;
      flex-direction: row;
    }
    .status .session-active .session-active__icon {
      width: 64px;
      height: 64px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #A7F9A7;
      border-radius: 10px;
    }
    .status .session-active .session-active__icon span {
      font-size: 28px;
      color: #129050;
    }
    .status .session-active .session-active__content {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }
    .status .session-active .session-active__content h3 {
      color: #129050;
    }
    .status .session-active .session-active__content p {
      color: #129050;
      opacity: 80%;
    }
    .session-active form{
      display: block;
      width: 100%;
    }
    .session-active form button {
      width: 100%;
      height: 38px;
      font-size: 18px;
      color: #fff;
      border: none;
      border-radius: 8px;
      background-color: #129050;
      opacity: 50%;
      transition: .3s ease-in-out;
    }
    .session-active form button:hover {
      opacity: 100%;
    }
  </style>
</head>

<body>
  <section class="form-container">
    <h1>Simpan data Session</h1>
    <form action="" method="post">
      <label for="nama">Nama<span>*</span></label>
      <input type="text" name="nama" id="nama" required>
      <label for="email">Email<span>*</span></label>
      <input type="email" name="email" id="email" required>
      <label for="whatsapp">WhatsApp<span>*</span></label>
      <input type="tel" name="whatsapp" id="whatsapp" required>
      <label for="alamat">Alamat<span>*</span></label>
      <input type="text" name="alamat" id="alamat" required>
      <button type="submit">Simpan!</button>
    </form>
    <p>Made with🔥Fitrah Rahmadhani Ahmad</p>
  </section>
  <section class="status">
    <?php
    if (isset($_SESSION['nama'])) {
    ?>
      <div class="session-active">
        <div class="session-active__container">
          <div class="session-active__icon">
            <span class="material-symbols-outlined">
              check_circle
            </span>
          </div>
          <div class="session-active__content">
            <h3>Session Aktif</h3>
            <p>Nama: <?php echo $_SESSION['nama'] ?></p>
            <p>Email: <?php echo $_SESSION['email'] ?></p>
            <p>WhatsApp: <?php echo $_SESSION['whatsapp'] ?></p>
            <p>Alamat: <?php echo $_SESSION['alamat'] ?></p>
          </div>
        </div>
        <form action="" method="post">
          <button type="submit" name="hapus_session">Hapus Session</button>
        </form>
      </div>
      
    <?php
    } else {
    ?>
      <div class="empty-session">
        <div class="empty-session__icon">
          <span class="material-symbols-outlined">
            hourglass_disabled
          </span>
        </div>
        <div class="empty-session__content">
          <h3>Session belum di buat</h3>
          <p>Silahkan buat session terlebih dahulu dengan mengisikan data pada form di atas</p>
        </div>
      </div>
    <?php
    }
    ?>
  </section>
</body>

</html>