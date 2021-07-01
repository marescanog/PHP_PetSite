
function rehomeSubmit(e){
    e.preventDefault();
    enableRehomeFormSpinner();
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
        disableRehomeFormSpinner();
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
                disableRehomeFormSpinner();
                //alert(response);
                var res = JSON.parse(response);
                setTimeout(function() {
                    alert(res["message"]);
                },100);
                if(res["status"] == 200){
                    myForm.reset();
                    var image_holder = $("#image-holder");
                    image_holder.empty();
                }     

            },
            error: function(xhr, status, error) {
                //var err = eval("(" + xhr.responseText + ")");
                disableRehomeFormSpinner();
                setTimeout(function() {
                    //alert(err.Message);
                    alert("Something went wrong :c");
                },100);
            }
        });
        
    }   
    
}

function enableRehomeFormSpinner(){
    $('#simpleModal').css("display", "block");
}

function disableRehomeFormSpinner(){
    $('#simpleModal').css("display", "none");
}


function adoptionContactSubmit(e){
    e.preventDefault();
    enableAdoptionFormSpinner();
    
    // Grab the form HTML DOM element
    let myForm = $("#modalForm")[0];

    $.ajax({
        url: './php/modalContactFormSubmission.php',
        type: 'post',
        data: $('#modalForm').serialize(),
        success:function(response){
            console.log(response);
            var res = JSON.parse(response);
            if(res["status"] == 200){
                myForm.reset();
                //console.log("success");
                $('#sucessSubmit').css("display", "block");
                $('#spinner').css("display", "none");
                document.getElementById("refNo").innerText = res["refNo"];
            } else {
                disableAdoptionFormSpinner();
                setTimeout(function() {
                    alert(res["message"]);
                },100);
            }
        },
        error: function(xhr, status, error) {
            //var err = eval("(" + xhr.responseText + ")");
            disableAdoptionFormSpinner();
            setTimeout(function() {
                //alert(err.Message);
                alert("Something went wrong :c");
            },100);
        }
    });
}

function enableAdoptionFormSpinner(){
    $('#modalForm').css("display", "none");
    $('#spinner').css("display", "block");
}

function disableAdoptionFormSpinner(){
    $('#modalForm').css("display", "block");
    $('#spinner').css("display", "none");
}


function contactformSubmit(e){
    enableSpinner();
    e.preventDefault();
    // Grab the form HTML DOM element
    let myForm = $("#contact-form")[0];
    $(window).scrollTop(0);
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
                setTimeout(function() {
                    alert(res["message"]);
                },100);
                disableSpinner();
            }
        },
        error: function(xhr, status, error) {
            //var err = eval("(" + xhr.responseText + ")");
            disableSpinner();
            setTimeout(function() {
                //alert(err.Message);
                alert("Something went wrong :c");
            },100);
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

function disableSpinner() {
    $('#contact-form').css("display", "block");
    $('#form-sucess').css("display", "none");
    $('#spinner').css("display", "none");
}