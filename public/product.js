


function productStore() {
    var formData = new FormData(document.getElementById("product"));
    axios({
            method: 'post',
            url: 'productStore',
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

function productEdit(id) {
    var formData = new FormData(document.getElementById("product"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'productEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            product.id.value=response.data["id"];
            product.providers_id.value=response.data["providers_id"];
            product.description.value=response.data["description"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function productUpdate() {
    var formData = new FormData(document.getElementById("product"));
    axios({
            method: 'post',
            url: 'productUpdate',
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

function productDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("product"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'productDestroy',
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
