<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <title>Register</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
    <form action="/proses" method="POST">
        @csrf
        <fieldset>
        <h1>BUAT Account BARU</h1>
         <h5>Sign Up Form</h5>
        <p>
            <label>First Name:</label><br>
            <input type="text" id="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror" name="nama_depan" />

        </p>
         <p>
            <label>Last Name:</label><br>
            <input type="text" id="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror" name="nama_belakang"  />
        </p>

        <p>
            <label>Gender:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
            <label><input type="radio" name="jenis_kelamin" value="other" /> Other</label>
        </p>

         <label for="negara">Nationality:</label>

            <select name="negara">
              <option value="indonesia">indonesia</option>
              <option value="india">india</option>
              <option value="jepang">jepang</option>
              <option value="china">china</option>
            </select><br><br>

        <p>
            <label>Language Spoken:</label><br>
            <input type="checkbox" name="bahasa" value="indonesia">
                <label > Bhasa Indonesia</label><br>
            <input type="checkbox"  name="bahasa" value="English">
                <label > English</label><br>
            <input type="checkbox" name="bahasa" value="Other">
                <label> Other</label><br>
        </p>

        <p>
            <label>Bio:</label><br>
            <textarea name="bio" id="biografi" class="form-control @error('biografi') is-invalid @enderror"></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Daftar" />
        </p>
        </fieldset>
    </form>
</div>
</div>
</body>
</html>
