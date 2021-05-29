$("#fileUpload").on('change', function () {
        
    /* Get count of selected files */
    var countFiles = $(this)[0].files.length;

    /* Change caption when files are selected */
    var captionFileUpload = document.getElementsByClassName('reh_-----form-file-upload-input')[0];

    var imgPath = $(this)[0].value;
    var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    var image_holder = $("#image-holder");
    image_holder.empty();
    
    captionFileUpload.innerText = 'SELECT IMAGES';

    if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
        if (typeof (FileReader) != "undefined") {

            /* loop for each file selected for uploaded. */
            for (var i = 0; i < countFiles; i++) {

                var reader = new FileReader();
                reader.onload = function (e) {
                    $("<img />", {
                        "src": e.target.result,
                            "class": "reh__thumb-image"
                    }).appendTo(image_holder);
                }

                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
            }

            if(countFiles > 0){
                captionFileUpload.innerText = 'CHANGE IMAGES';
            }

        } else {
            alert("This browser does not support FileReader.");
        }
    } else {
        alert("Pls select only images");
    }
    });