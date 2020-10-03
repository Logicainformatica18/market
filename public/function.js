function whatsapp(numero){


    let url = "https://api.whatsapp.com/send?phone=51"+ numero + "&text=*Buenas -*%0A";
    window.open(url);
}

function readImage(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result); // Renderizamos la imagen
      }
      reader.readAsDataURL(input.files[0]);
    }
  }


        function New() {
            document.getElementById("create").disabled = false;
          //  document.getElementById("new").disabled = false;
            document.getElementById("update").disabled = true;
            // form.id.value = "";
        }

        function Up() {
            document.getElementById("create").disabled = true;
        //    form.new.disabled = true;
            document.getElementById("update").disabled  = false;
        }



function category_productStore() {


     var formData = new FormData(document.getElementById("category_product"));
    axios({
               method: 'post',
               url: 'category_productStore',
               data:  formData,
               // headers: {
               //     'Content-Type': 'multipart/form-data'
               // }
           })
           .then(function(response) {
               //handle success
               var contentdiv = document.getElementById("mycontent_category_product");
               contentdiv.innerHTML = response.data;

           })
           .catch(function(response) {
               //handle error
               console.log(response);
           });

   }
   function category_productEdit(id) {

    var formData = new FormData(document.getElementById("category_product"));
   formData.append("id",id)

   axios({
              method: 'post',
              url: 'category_productEdit',
              data:  formData,
              // headers: {
              //     'Content-Type': 'multipart/form-data'
              // }
          })
          .then(function(response) {
              //handle success
              var contentdiv = document.getElementById("mycontent_category_product");
              contentdiv.innerHTML = response.data;

          })
          .catch(function(response) {
              //handle error
              console.log(response);
          });
    }

function category_productDestroy(id,product_id) {

    if(confirm("¿Quieres eliminar este registro?")){
   // var formData = new FormData(document.getElementById("category_product"));
   var formData = new FormData();
   formData.append("id",id)
   formData.append("product_id",product_id)
   axios({
              method: 'post',
              url: 'category_productDestroy',
              data:  formData,
              // headers: {
              //     'Content-Type': 'multipart/form-data'
              // }
          })
          .then(function(response) {
              //handle success
              var contentdiv = document.getElementById("mycontent_category_product");
              contentdiv.innerHTML = response.data;

          })
          .catch(function(response) {
              //handle error
              console.log(response);
          });
    }


    }






