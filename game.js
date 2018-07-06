function combatSuivant() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            document.getElementById('test').innerHTML = xhr.responseText;
        }
    };
    xhr.open("GET","combats.php",true);
    xhr.send(null);
}