<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/ISCI.png" type="image/x-icon">

    <title>ISCI Team | challenge</title>

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/challenge.css" />

    <!-- Bootstrap JS & CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>

    <!-- SweetAlert -->
    <!-- Include the Borderless theme -->
    <link rel="stylesheet" href="node_modules/@sweetalert2/theme-borderless/borderless.css" />

    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
</head>

<body style="background-color: #0f172a;">
    <section id="banner">
        <h1 class="text-center text-sky-400" style="font-size: 2em">Hallo, selamat datang di Hacker Game</h1>
        <div class="line my-4 mx-auto"></div>
        <br />
        <h1 class="text-center text-sky-400" style="font-size: 2em">Level 5</h1>
        <br>
        <p class="text-white text-center">Temukan sandi yang tersembunyi di halaman ini yaa, agar dapat lanjut ke level
            berikutnya..</p>
        <br />
        <p class="text-sky-400 text-center">Teknik yang di pakai :</p>
        <ul class="text-white text-center">
            <li>#HTML</li>
            <li>#CSS</li>
            <li>#Javascript</li>
            <li>#steganography</li>
            <li>#SQL Injection</li>
        </ul>
        <br />
        <center>
            <div class="col-sm-6">
                <form action="" method="POST">
                    <input type="text" name="password" class="form-control" placeholder="Password" />
                    <br>
                    <button class="button btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
            <br />
        </center>
    </section>
    <?php 
if ( isset($_POST["submit"]) ) {
  $sys = $_POST["password"];

  if ( $sys == "&7Nwdn3C7!&9hVx" ) {
    echo "<script>
              Swal.fire({ title: `Mantap!`,
                          text: `Password mu benar`, 
                          icon: `success`,
                          footer: `<a href='level6' style='padding: 10px; background-color: rgb(56 189 248 / 1); color: white; border: box-shadow: 0 0 0 3px transparent; border-radius: 10px;' class='btn btn-primary'><i class='fa-solid fa-play'></i> Continue</a>` });
          </script>";
  } else {
    echo "<script>
              Swal.fire('Gagal', 'Password kamu kurang tepat nih', 'error');
          </script>";
  }
}
?>
    <!-- My JS -->
    <script src="js/default.js"></script>
    <script src="js/script.js"></script>
</body>

</html>