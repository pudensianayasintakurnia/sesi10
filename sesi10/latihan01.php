<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan01</title>
</head>
<body>
    <form name="latihan01" method="post" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" id="txNIM" name="NIM">
        </div>
         <div>
            NAMA
            <input type="text" id="txNAMA" name="NAMA">
        </div>
        <div>
            JENIS KELAMIN
            <input type="radio" id="txJKEL" name="JKEL" value="L">Laki_Laki
            <input type="radio" id="txJKEL" name="JKEL" value="P">PEREMPUAN
        </div>
        <div>
            Jurusan
            <select name="JURUSAN" id="txJUR">
                <option value="MTI">MTI</option>
                <option value="SK">SK</option>
                <option value="KAB">KAB</option>
                <option value="DKV">DKV</option>
                <option value="PAR">PAR</option>
            </select>
        </div>
        <div>
            Hobi
            <input type="checkbox"name="hobi-1">Menghanyal
            <input type="checkbox"name="hobi-2">rebahan
             <input type="checkbox"name="hobi-3">Menyanyi
        </div>
        <div>
            <button type="submit">Kirim Data</button>
        </div>
    </form>
    <script>
        function checkform(frm){
            let F = frm.elements;
            let nim = F.namedItem("NIM").value;
            let nama = F.namedItem("NAMA").value;
            let jkel = F.namedItem("JKEL").value;
            let jurusan= F.namedItem("JURUSAN").value;
            let h1= F.namedItem("hobi-1").checked;



            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JKEL: "+jkel);
            console.log("jurusan: "+jurusan);
            console.log("Hobi Menghanyal: "+h1);
            return false;
        }
    </script>
</body>
</html>