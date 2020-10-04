
function colorStore() {
    var formData = new FormData(document.getElementById("color"));
    axios({
            method: 'post',
            url: 'colorStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function colorEdit(id) {
    var formData = new FormData(document.getElementById("color"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'colorEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            color.id.value=response.data["id"];
            color.description.value=response.data["description"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function colorUpdate() {
    var formData = new FormData(document.getElementById("color"));
    axios({
            method: 'post',
            url: 'colorUpdate',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function colorDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("color"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'colorDestroy',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });
}
}

function colorShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'colorShow',
            data: formData,
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
