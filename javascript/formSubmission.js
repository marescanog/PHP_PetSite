
function rehomeSubmit(e){
    e.preventDefault();

    // Grab the form HTML DOM element
    let myForm = $("#rehomeForm")[0];
    
    // Place All the data in a new form data
    let formData = new FormData(myForm);

    // Grab the uploaded images
    let imageFiles = $('#fileUpload')[0].files;

    // Validation # 1 - User must upload at least 1 image
    let totalImages = imageFiles.length;

    if(totalImages < 1 ){
        alert('Please Upload at least one image');
    } else {

        // Add total number of images to Form Data
        formData.append('totalImages', imageFiles.length);

        // Append all images to form data
        for(var x = 0; x < imageFiles.length; x++){
            formData.append(`file${x}`, imageFiles[x]);
        }    
       
        $.ajax({
            type : 'POST',
            url : './php/rehomeUpload.php',
            data : formData,
            contentType: false,
            processData: false,
            success : function(response) {
                //alert(response);
                var res = JSON.parse(response);
                alert(res["message"]);
                if(res["status"] == 200){
                    myForm.reset();
                    var image_holder = $("#image-holder");
                    image_holder.empty();
                }
            }
        });
    }   
}