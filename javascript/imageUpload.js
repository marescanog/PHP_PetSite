$("#fileUpload").on('change', function () {
        
    /* Get count of selected files */
    var countFiles = $(this)[0].files.length;

    /* Change caption when files are selected */
    var captionFileUpload = document.getElementsByClassName('reh_-----form-file-upload-input')[0];

    /* Validate if all files uploaded are png or jpeg. Loops through all uploaded files*/
    var allHasValidExtn = true;
    for(let x = 0; x < countFiles; x++){
        let file = $(this)[0].files[x];
        var fileType = file["type"];
        var validImageTypes = ["image/gif", "image/jpeg", "image/png"];
        if ($.inArray(fileType, validImageTypes) < 0) {
            allHasValidExtn = false;
        }
    }

    /* Target the div where the images are displayed and empty current images */
    var image_holder = $("#image-holder");
    image_holder.empty();
    
    /* Default Button Caption */
    captionFileUpload.innerText = 'SELECT IMAGES';

    if(countFiles > 0 && countFiles < 5){
        if (allHasValidExtn == true) {
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
            alert("Please select only png or jpg images");
        }
    } else {
        alert("Please upload at least one Image File OR a Maximum of 4 image files");
    }

    });