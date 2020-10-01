
function customerStore() {
    var formData = new FormData(document.getElementById("customer"));
    axios({
            method: 'post',
            url: 'customerStore',
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

function customerEdit(id) {
    var formData = new FormData(document.getElementById("customer"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'customerEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            customer.id.value=response.data["id"];
            customer.description.value=response.data["description"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function customerUpdate() {
    var formData = new FormData(document.getElementById("customer"));
    axios({
            method: 'post',
            url: 'customerUpdate',
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

function customerDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("customer"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'customerDestroy',
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

function customerShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'customerShow',
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