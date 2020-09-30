function personsStore() {
    var formData = new FormData(document.getElementById("persons"));
    axios({
            method: 'post',
            url: 'personsStore',
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

function personsEdit(id) {
    var formData = new FormData(document.getElementById("persons"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'personsEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["firtsname"];
           persons.id.value=response.data["id"];
            persons.firstname.value=response.data["firtsname"];
            persons.lastname.value=response.data["lastname"];
            persons.names.value=response.data["names"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function personsUpdate() {
    var formData = new FormData(document.getElementById("persons"));
    axios({
            method: 'post',
            url: 'personsUpdate',
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

function personsDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("persons"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'personsDestroy',
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
