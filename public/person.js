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
