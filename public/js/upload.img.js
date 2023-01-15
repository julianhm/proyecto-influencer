//*****************************************************//
//*********** Scripts for Upload Image ****************//
/*
// Funcion que sube una imagen
function readURL(input, pic_num) {
  //console.log("sale "+ input);  
  if (input.files && input.files[0]) {
    var reader = new FileReader(); // instance of the FileReader
    reader.onload = function(e) {

      $('.image-upload-wrap').hide();
      //entra por parametro
      $('.file-upload-image'+pic_num).attr('src', e.target.result);
      //entra por parametro
      $('.file-upload-content'+pic_num).show();

      $('.file-upload-content').show();
      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]); // read the local file

  } else {
    removeUpload(pic_num);
  }
}
*/

/*
// Funcion quita una imagen que haya sido subida
function removeUpload(pic_num) {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());

  $('.file-upload-content'+pic_num).hide();
  $('.file-upload-content').hide();
  showHideImgButton(pic_num);
  $('.image-upload-wrap').show();
  $('#uploader-input').val('');

  document.getElementById("gal-img"+pic_num).style.display = "block";
}
*/

// Check for the various File API support.
   if (window.File && window.FileReader && window.FileList && window.Blob) {

      function uploadImage(btn_selected) {

        if(event.target.files.length !== 0){
            var img = URL.createObjectURL(event.target.files[0]);   
        
            if (btn_selected == "btn-profile") {
                //console.log("single");
                var preview =document.getElementById("img-profile");
                preview.src = img;

                $('.image-upload-wrap').hide();
                $('.file-upload-content').show();
                $('.image-title').html(event.target.files[0].name);
                $('#btn-img-up').html('Cambiar Imagen');
                

                //preview.style.display = "block";
            }
            if (btn_selected == "btn-gallery") {
                //Esta restringido para 5
                for (var i = 0; i < 5; i++) {
                    if (!document.getElementById("gal-img"+i)) {
                      
                        const child = document.getElementById("gallery");

                        //let html = "<div id='gal-img"+i+"'> <div class='col gallery-profile'> <img class='upload-gal-img' src='"+img+"'> </div> <div> <a style='cursor:pointer' onclick='removeAcc(\"gal-img"+i+"\")' ><img src='img/remove-acc.png' alt='Remove'></a> </div> </div>";
                        let html = "<div id='gal-img"+i+"' class='gallery-profile-show-margin'> <div class='gallery-profile-show'> <img class='upload-gal-img' src='"+img+"'> </div> <div class='pt-2'> <a style='cursor:pointer' onclick='removeAcc(\"gal-img"+i+"\")' ><img src='img/remove-acc.png' alt='Remove'></a> </div> </div>";
                        child.insertAdjacentHTML("beforeend", html);

                        $('.image-upload-wrap').hide();
                        $('.file-upload-content').show();
                        $('.image-title').html(event.target.files[0].name);
                        $('#btn-img-up').html('Cargar otra imagen');

                        break;
                    }
                }
            }
        }       
    }
      
   } else {
      alert("Your browser is too old to support HTML5 File API");
   }


function hideInfoProfile() {
    var x = document.getElementById("info-profile").style.display = "none";
    
}

function showInfoProfile() { 
    var x = document.getElementById("info-profile").style.display = "block";
    
}

function showVidmyProfile() {
    document.getElementById("video-prev").style.display = "block";
}


// Permite arrastrar una imagen
$('.image-upload-wrap').bind('dragover', function () {
	$('.image-upload-wrap').addClass('image-dropping');
	});

$('.image-upload-wrap').bind('dragleave', function () {
	$('.image-upload-wrap').removeClass('image-dropping');
  });

// limpia el cargador para que pueda volver a cargar ua misma imagen
function cleanUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
  $('#btn-img-up').html('Cargar Imagen');
  $('#uploader-input').val('');
}

/*
//Muestra y esconde el boton de imagen
function showHideImgButton(pic_num) {
  //console.log("para abrir y cerar "+pic_num);
  //entra por parametro
  var x = document.getElementById("btn-img"+pic_num);
  
  if (x.style.display === "none") {
    x.style.display = "block";
    //entra por parametro
    document.getElementById("gal-img"+pic_num).style.display = "none";
  } else {
    x.style.display = "none";
    //entra por parametro
    document.getElementById("gal-img"+pic_num).style.display = "block";
  }
}
*/


// Permite saber que identificador de cual boton se hizo click para cargar su imagen
$(document).on("click", ".open-send", function () {
  var myPicId = $(this).data('id');
  $(".modal-body #picId").val( myPicId );
});



//*****************************************************//
//*********** Scripts for Upload Video ****************//

$(function() {
    $('.upload-video-file').on('change', function(){
      if (isVideo($(this).val())){
        $('.video-upload-wrap').hide();
        $('.file-upload-content-vid').show();
        $('.video-preview').attr('src', URL.createObjectURL(this.files[0]));
        $('.video-title').html(this.files[0].name);
        $('#btn-vid-up').html('Cambiar Video');
        //$('.video-prev').show();
      }
      else
      {
        $('.upload-video-file').val('');
        $('.video-prev').hide();
        alert("Only video files are allowed to upload.")
      }
    });
});

// If user tries to upload videos other than these extension , it will throw error.
function isVideo(filename) {
    var ext = getExtension(filename);
    switch (ext.toLowerCase()) {
    case 'm4v':
    case 'avi':
    case 'mp4':
    case 'mov':
    case 'mpg':
    case 'mpeg':
        // etc
        return true;
    }
    return false;
}

function getExtension(filename) {
    var parts = filename.split('.');
    return parts[parts.length - 1];
}

$('.video-upload-wrap').bind('dragover', function () {
  $('.video-upload-wrap').addClass('image-dropping');
  });

$('.video-upload-wrap').bind('dragleave', function () {
  $('.video-upload-wrap').removeClass('image-dropping');
  });


function hideVideoPrev() {
   var x = document.getElementById("video-prev");
    x.style.display = "none";
    $('.file-upload-content-vid').hide();
    $('.video-upload-wrap').show();
    $('#btn-vid-up').html('Cargar Video');
    $('#uploader-input-vid').val('');
}


function cleanVid() {
  hideInfoProfile();
  $('.file-upload-content-vid').hide();
  $('.video-upload-wrap').show();
  $('#btn-vid-up').html('Cargar Video');
  $('#uploader-input-vid').val('');
}

