
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

function adoptionContactSubmit(e){
    e.preventDefault();

    // Grab the form HTML DOM element
    let myForm = $("#modalForm")[0];

    $.ajax({
        url: './php/modalContactFormSubmission.php',
        type: 'post',
        data: $('#modalForm').serialize(),
        success:function(response){
            //console.log(response);
            var res = JSON.parse(response);
            if(res["status"] == 200){
                myForm.reset();
                //console.log("success");
                $('#modalForm').css("display", "none");
                $('#sucessSubmit').css("display", "block");
                document.getElementById("refNo").innerText = res["refNo"];
            } else {
                alert(res["message"]);
            }
        }
    });
}



// next to do is add a loading spinner when the Submit Button is clicked

function contactformSubmit(e){
    enableSpinner();
    e.preventDefault();

    // Grab the form HTML DOM element
    let myForm = $("#contact-form")[0];

    $.ajax({
        url: './php/generalContactFormSubmission.php',
        type: 'post',
        data: $('#contact-form').serialize(),
        success:function(response){
            //console.log(response);
            var res = JSON.parse(response);
            if(res["status"] == 200){
                myForm.reset();
                // console.log(res["emailStat"]);
                // console.log("success");
                $('#form-sucess').css("display", "block");
                $('#form-sucess-contents').css("display", "block");
                $('#spinner').css("display", "none");
                document.getElementById("refNo").innerText = res["refNo"];
            } else {
                alert(res["message"]);
                $('#contact-form').css("display", "block");
                $('#form-sucess').css("display", "none");
                $('#spinner').css("display", "none");
            }
        }
    });

}

function submitNewContactForm(){
    $('#contact-form').css("display", "block");
    $('#form-sucess').css("display", "none");
    $('#form-sucess-contents').css("display", "none");
}

function enableSpinner() {
    $('#contact-form').css("display", "none");
    $('#form-sucess').css("display", "block");
    $('#spinner').css("display", "block");
}