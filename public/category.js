
function categoryStore() {
    var formData = new FormData(document.getElementById("category"));
    axios({
            method: 'post',
            url: 'categoryStore',
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

function categoryEdit(id) {
    var formData = new FormData(document.getElementById("category"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'categoryEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            category.id.value=response.data["id"];
            category.description.value=response.data["description"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function categoryUpdate() {
    var formData = new FormData(document.getElementById("category"));
    axios({
            method: 'post',
            url: 'categoryUpdate',
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

function categoryDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("category"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'categoryDestroy',
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

function categoryShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'categoryShow',
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