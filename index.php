<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hill Cipher Enskripsi / Deskripsi</title>
</head>

<body>
    <form method="post" action="hill_cipher.php">
        <table border="0" cellspacing="0" cellpadding="10" align="center">
            <tr>
                <td colspan="2" align="center">
                    <h2>Input Kunci 2x2 Matrix</h2>
                </td>
            </tr>
            <tr>
                <td><label for="key00">Baris 1, Kolom 1:</label></td>
                <td><input type="text" id="key00" name="key00" required></td>
                <td><label for="key01">Baris 1, Kolom 2:</label></td>
                <td><input type="text" id="key01" name="key01" required></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label for="key10">Baris 2, Kolom 1:</label></td>
                <td><input type="text" id="key10" name="key10" required></td>
                <td><label for="key11">Baris 2, Kolom 2:</label></td>
                <td><input type="text" id="key11" name="key11" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <h2>Plaintext</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><label for="text">Text:</label></td>
                <td colspan="2" align="center"><input type="text" id="text" name="text" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <h2>Pilih mode</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="radio" id="encrypt" name="mode" value="encrypt" checked><label for="encrypt">Encrypt</label></td>
                <td colspan="2" align="center"><input type="radio" id="decrypt" name="mode" value="decrypt"><label for="decrypt">Decrypt</label><br><br>
                <td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button type="submit" id="submit">Submit</button></td>
                <td colspan="2" align="center"><button id="kembali"><a href="home.php">Kembali</a></button></td>
            </tr>
        </table>
    </form>
</body>

</html>