

function getKabupaten(idProv) {
    var inner = "kabupaten"
    var url = "get_kabupaten.php?id_prov=" + idProv
    //TODO: write ajax getKabupaten
}


provinsi.onchange = function () {
    var xhr = new XMLHttpRequest();

    xhr.open('GET', 'get_kabupaten.php?id=' + provinsi.value)

    xhr.onload = function () {
        kabupaten.innerHTML = xhr.responseText
    }

    xhr.send()
}

resetError()