<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body bgcolor="#deb887">

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li style="float:right"><a href="">Form Penjual Ikan</a></li>
</ul>
<br>
<br>
<br>
<div>
  <form action="prosesget.php" method="get">
    <label for="fname">Nama Depan</label>
    <input type="text" id="fname" name="firstname" placeholder="Nama Depan">

    <label for="lname">Nama Belakang</label>
    <input type="text" id="lname" name="lastname" placeholder="Nama belakang">

    <label for="TTL">Tempat Tanggal Lahir</label>
    <input type="text" id="ttl" name="Tempattgllhr" placeholder="Tempat Tanggal Lahir">

    <label for="gender">Jenis Kelamin</label><br><br>
    <input type="radio" name="JK" value="Laki-laki">Laki-laki<br>
    <input type="radio" name="JK" value="Perempuan">Perempuan
    <br>
    <br>
    <label for="Ikan">Jenis Ikan</label>
    <select id="JenisIkan" name="JenisIkan">
      <option value="Pelagis">Pelagis</option>
      <option value="Demersal">Demersal</option>
    </select>
  
    <input type="submit" value="Submit" name="submit">
  </form>
</div>

</body>
</html>
