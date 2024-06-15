
let gallery_settings_form = document.getElementById('gallery_settings_form');
let gallery_image_inp = document.getElementById('gallery_image_inp');



gallery_settings_form.addEventListener('submit',function(e){
  e.preventDefault();
  add_picture();

})
function add_picture(){
  let data = new FormData();
  data.append('picture',gallery_image_inp.files[0]);
  data.append('add_picture');


  let xhr = new XMLHttpRequest();
      xhr.open("POST", "ajax/settings_crud.php", true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onload = function() {
        var myModal = document.getElementById('gallerySettings');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if(this.responseText == 'inv_img'){
          alert('error','Only jpg and png images are allowed');
        }
        else if(this.responseText == 'inv_size'){
          alert('error','Image should be less than 2MB');
        }
        else if(this.responseText == 'update_failed'){
          alert('error','Image upload failed');
        }
        else{
          alert('success','New image added');
          gallery_image_inp.value = '';
          get_picture();
        }
        xhr.send(data);
}



    window.onload = function() {
     
    }
}