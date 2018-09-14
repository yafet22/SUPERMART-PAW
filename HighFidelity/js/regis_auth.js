function regisAuth() {
    var Regex= /^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$/;
    var sMsg = "";

    if(document.getElementById("email").value ==="") {
        sMsg +=("\n* Anda Belum Megisikan Email");
    }

    if(document.getElementById("pwd").value ==="") {
        sMsg +=("\n* Anda Belum Megisikan Password");
    }

    else if(document.getElementById("pwd").value !== document.getElementById("c-pwd")) {
        sMsg +=("\n* Password anda tidak sama!");
    }

    if(sMsg !=""){
        alert("Peringatan:\n" +sMsg);
        location.href="regis.php"
        return false;
    }

    else {
        // alert("Berhasil Input data");
        return true;
    }
}

function backToIndex() {
    if (confirm("Anda yakin ingin membatalkan registrasi?")) {
        location.href="index.php";
        //Swindow.alert("yes");
    } else {
        //location.href='regis.php';
        //window.alert("no");
    }
}