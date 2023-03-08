<html>
<head>
    <title>Aplikasai Pengaduan Masyarakat Nia</title>
    <style type="text/css" media="screen">
        @import url('https://fonts.googleapis.com/css?family=PT+Sans');
        h1{
            font-size:"10px";
        }
        h2{
  padding-top: 1.5rem;
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 40px 100px;
    width: 500px;
    background-image: linear-gradient(pink, white);
    box-shadow: 0 0 20px rgba(255,255,255,.3);
    
}
font{
    font-size: 20px;
    
}
.submit{
    background: blue;
	color: white;
	font-size: 11pt;
	width: 50%;
	border: none;
	border-radius: 20px;
	padding: 10px 20px;
}
.reset{
    background: red;
	color: white;
	font-size: 10pt;
	width: 50%;
	border: none;
	border-radius: 20px;
	padding: 10px 20px;
}
    </style>
</head>
<body style="background: url(img/bg.JPG); background-size: cover;">
<div style="border:0; padding:10px; width:760px; height:auto;">
<form class="container" action="input.php" method="POST" name="proses">
<h1 align="center">DAFTAR AKUN MASYARAKAT </h1>
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width=""> </td>
                <td width=""> </td>
        </tr>
        <tr height="46" >
            <td> </td>
            <td><font color="black">NIK</font></td>
            <td><input type="text" name="nik" size="23" required/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td><font color="black">Nama</font></td>
            <td><input type="text" name="nama" size="23"  required/></td>
        </tr>
        
        <tr height="46">
            <td> </td>
            <td><font color="black">username</font></td>
            <td><input type="text" name="username" size="23"  required/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td><font color="black">password</font></td>
            <td><input id="password" type="password" name="password"  size="23"  required/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td><font color="black">telp</font></td>
            <td><input type="text" name="telp" size="23" required/></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" name="Submit" value="Submit" class="Submit" style="width: 25%;" />&nbsp;<input type="reset" value="Reset" class="reset" style="width: 25%;" /></td>
</tr>    

<tr>
<td></td>
<td><p><a href="index.php">Kembali</a></p></td>
</tr>    
    </table>
</form>
</div>
</body>
</html>