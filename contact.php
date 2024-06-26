<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./contactcss.css">
  <link rel="stylesheet" href="./style.css">
  <style>
    .containerkontak {
      background-color: rgb(6, 124, 160);
      padding-top: 85px;
      margin: 0;
      font-family: 'Roboto', sans-serif;
    }

    .containerkontak h1 {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 72px;
      color: white;
      text-align: center;
    }

    .containerkontak h4 {
      font-family: 'Roboto', sans-serif;
      font-weight: 400;
      font-size: 20px;
      color: #8f8f8f;
      text-align: center;
      line-height: 1.5;
    }

    .containerkontak {
      width: 100%;
      max-width: 650px;
      margin: 0 auto;
      padding: 20px;
    }

    .containerkontak .styled-input {
      position: relative;
      margin: 1rem 0;
      border-radius: 4px;
    }

    .containerkontak .styled-input.wide {
      width: 100%;
    }

    .containerkontak.styled-input label {
      color: #030303;
      position: absolute;
      top: 10px;
      left: 30px;
      transition: all 0.25s ease;
      pointer-events: none;
    }

    .containerkontak input,
    textarea {
      width: 100%;
      padding: 30px;
      border: none;
      border-radius: 4px;
      background-color: #ffffff;
      font-size: 1rem;
      color: #444442;
      box-sizing: border-box;
    }

    .containerkontak input:focus,
    textarea:focus {
      outline: none;
    }

    .containerkontak input:focus~label,
    textarea:focus~label,
    input:valid~label,
    textarea:valid~label {
      top: -5px;
      font-size: 0.75em;
      color: #999;
    }

    .containerkontak textarea {
      min-height: 150px;
    }

    .containerkontak .submit-btn {
      display: inline-block;
      padding: 10px 35px;
      background-color: #139dc0;
      color: white;
      font-size: 18px;
      border-radius: 30px;
      cursor: pointer;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.06), 0 2px 10px rgba(0, 0, 0, 0.07);
      transition: all 300ms ease;
      text-align: center;
    }

    .containerkontak .submit-btn:hover {
      transform: translateY(1px);
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.10), 0 1px 1px rgba(0, 0, 0, 0.09);
    }

    @media (max-width: 768px) {
      .containerkontak h1 {
        font-size: 48px;
      }

      .submit-btn {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <?php include "./menu/navbar.php" ?>

  <?php include "./menu/hero.php" ?>

  <div class="containerkontak">
    <div class="row">
      <h1>Kontak Kami!</h1>
    </div>
    <div class="row">
      <h4>Kami senang mendengarkan anda!</h4>
    </div>
    <div class="row input-container">
      <div class="styled-input wide">
        <input type="text" required />
        <label>Nama</label>
      </div>
      <div class="styled-input wide">
        <input type="email" required />
        <label>Email</label>
      </div>
      <div class="styled-input wide">
        <input type="text" required />
        <label>Nomor Telepon</label>
      </div>
      <div class="styled-input wide">
        <textarea required></textarea>
        <label>Pesan</label>
      </div>
      <div class="submit-btn">
        Kirim Pesan
      </div>
    </div>
  </div>



  <?php include "./menu/footer.php" ?>
  <script src="./script.js"></script>
</body>

</html>