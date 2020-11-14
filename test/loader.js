function showItem(str) {
    if (str == '') {
        document.getElementById('txtHint').innerHTML = '';
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('txtHint').innerHTML = this.responseText;
            }
        };
        xmlhttp.open('GET','getitem.php?q='+str,true);
        xmlhttp.send();
    }
}


function showSitem(strSec) {
    if (strSec == '') {
        document.getElementById('txtsHint2').innerHTML = '';
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttps = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttps = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xmlhttps.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('txtsHint2').innerHTML = this.responseText;
            }
        };
        xmlhttps.open('GET','itempos.php?p='+strSec,true);
        xmlhttps.send();
		document.frmsearch.txtsearch.value='';
		document.getElementById('srcdiv').style.display ='none';
    }
}