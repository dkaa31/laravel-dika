<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pengisian</title>
  </head>
  <body>
    <h1>Buat Account Baru</h1>
    <form action="welcome" method="GET">
      <h3>Sign Up Form</h3>
      <label for="nama_awal">First name :</label><br />
      <input type="text" id="nama_awal" name="nama_awal" /><br /><br />
      <label for="nama_akhir">Last name :</label><br />
      <input type="text" id="nama_akhir" name="nama_akhir" /><br /><br />

      <label>Gender</label><br /><br />
      <input type="radio" id="Laki" name="Gender" value="Laki-Laki" />
      <label for="Laki">Male</label><br />
      <input type="radio" id="cewe" name="Gender" value="cewe" />
      <label for="cewe">Female</label><br /><br />

      <label for="Nasional">Nationality</label><br /><br />
      <select name="Nasional" id="Nasional">
        <option value="Indonesia">Indonesia</option>
        <option value="Rengasdengklok">Rengasdengklok</option>
        <option value="Malaysia">Malaysia</option></select
      ><br /><br />
      <label>Langueage Spoken</label><br /><br />

      <input type="checkbox" name="bahasa" id="indo" value="bahasa" />
      <label for="indo">Bahasa Indonesia</label><br />

      <input type="checkbox" name="bahasa" id="inggris" value="inggris" />
      <label for="inggris">English</label><br />

      <input type="checkbox" name="bahasa" id="outher" value="outher" />
      <label for="outher">Outher</label><br /><br />

      <label for="bio">Bio</label><br /><br />
      <textarea name="bio" id="bio" rows="10" cols="30"></textarea><br />
      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>
