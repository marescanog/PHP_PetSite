<?php 
    require_once('./php/enum.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CEBU PET MATCH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/reset-styles.css">
    <link rel="stylesheet" href="./css/stylish-page-wrapper-styles.css">
    <link rel="stylesheet" href="./css/rehome-styles.css">
    <link rel="stylesheet" href="./css/header-styles.css">
    <link rel="stylesheet" href="./css/footer-styles.css">
    <meta name="currentPage" content="PLACEMENTS">
    <meta property="og:image" content="./images/LOGO/LOGO-BLOCK.svg" />
    <?php require './php-html-blocks/favicon.php'?>
</head>
<body >

    <?php require './php-html-blocks/header.php'?>

        <div style="background-color:#766F9B; min-height:100vh;">
            <div class="header-padding3" style="transform: translateY(15px);"></div>
            <div class="sty__left-right-margins">
                <div class="sty__header">
                    <?php include './images/LOGO/headerTitles/rehoming.svg';?>
                </div>
                <div class="sty__-paper">
                    <div class="sty__--small-head-wrapper">
                        <h2>Want to post an adoption ad for your pet?</h2>
                        <h3>Find a loving home for your pet</h3>
                        <hr>
                    </div>
                    <div class="reh_main-content-container">
                        <!--Rehoming Information section-->
                        <div class="reh_-rehome-info-container">
                            <section class="reh_--rehome-info-description">
                                <h4>Adoption Advertisment</h4>
                                <p>Take the next steps in re-homing your pet.
                                A pet is a lifetime responsibility and commitment.
                                Giving up your pet for adoption should be done
                                int the utmost responsibility and care. If you must 
                                let go of your pet, make sure you find a loving home
                                and that your pet meets the standard for adoption.
                                </p>
                            </section>
                            <section class="reh_--rehome-info-eligibility">
                                <h4>Is your pet eligible for adoption?</h4>
                                <ul>
                                    <li>Pets are recommended to be spayed/neutered. This lessens the burden of potential adopters.</li>
                                    <li>Must be healthy and up-to-date on Vaccinations.</li>
                                    <li>The pet must not be aggressive. The safety of potential adopters is important. Aggression issues
                                        must be dealt with proper rehabilitation.</li>
                                </ul>
                            </section>
                            <section class="reh_--rehome-info-options">
                                <h4>Review your options before rehoming</h4>
                                <ul>
                                    <li>If your pet is sick and you can no longer afford to look after them, consider vets that offer low 
                                        cost veterinary care.</li>
                                    <li>If your pet has behavior issues that you cannot deal with, consider behavior experts that offer
                                        training and rehabilititaion.</li>
                                    <li>If your pet had kittens or puppies that you did not want, consider institutions that offer low cost 
                                        (or free) spay/neuter surgery.</li>
                                </ul>
                            </section>
                        </div>
                         <!--END Rehoming Information section-->

                        <!--Form Section-->
                        <form class="reh_-form-container" id="rehomeForm" action="" method="post" enctype="multipart/form-data" onsubmit="rehomeSubmit(event)">
                            <!--Start Text and Selection Boxes Group-->
                            <div class="reh_--form-textbox-container">
                                <div class="reh_---form-texbox-flex-group">
                                    <div class="reh_----form-texbox-flex-group-member"> 
                                        <label for="fname" class="field1">Owner's First Name *</label>
                                        <input class="field1" type="text" name="fname" id="fname" maxlength="50" required><br> <!--Required-->
                                    </div>
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="lname" >Owner's Last Name </label>
                                        <input type="text" name="lname" id="lname" maxlength="50"><br>
                                    </div>
                                </div>

                                <div class="reh_---form-texbox-flex-group">
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="email" >Email Address *</label>
                                        <input type="email" name="email" id="email" maxlength="100" required><br> <!--Required-->
                                    </div>
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="mobile" >Mobile No. </label>
                                        <input type="tel" name="mobile" id="mobile" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}|[0-9]{11}" placeholder="09XX-XXX-XXXX"><br>
                                    </div>
                                </div>

                                <div class="reh_---form-texbox-flex-group selectbox">
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="petname" >Pet's Name *</label>
                                        <input type="text" name="petname" id="petname" maxlength="50" required><br > <!--Required-->
                                    </div>
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="specie" >Pet's Specie *</label>
                                        <select name="specie" id="specie" > <!--Required-->
                                            <option value="" disabled selected>Select Specie</option>
                                            <option value=<?php echo ENUM_SPECIES::Dog; ?>>Dog</option>
                                            <option value=<?php echo ENUM_SPECIES::Cat; ?>>Cat</option>
                                            <option value=<?php echo ENUM_SPECIES::Bird; ?>>Bird</option>
                                            <option value=<?php echo ENUM_SPECIES::Reptile; ?>>Reptile</option>
                                            <option value=<?php echo ENUM_SPECIES::Rabbit; ?>>Rabbit</option>
                                        </select><br>
                                    </div>
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="specie" >Breed </label>
                                        <input type="text" name="breed" id="breed" maxlength="50"><br> 
                                    </div>
                                </div>

                                <div class="reh_---form-texbox-flex-group">
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="age" >Age *</label>
                                        <input type="number" name="age" id="age" required><br> <!--Required-->
                                    </div>
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="Bday" >Pet's birthday</label>
                                        <input type="date" name="bday" id="bday" ><br>
                                    </div>
                                </div>

                                <div class="reh_---form-texbox-flex-group selectbox">
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="gender" >Pet's Gender *</label>
                                        <select name="gender" id="gender" required> <!--Required-->
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value=<?php echo ENUM_GENDER::male; ?>>Male</option>
                                            <option value=<?php echo ENUM_GENDER::female; ?>>Female</option>
                                        </select><br>
                                    </div>
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="city" >Pet's City *</label>
                                        <select name="city" id="city" required> <!--Required-->
                                            <option value="" disabled selected>Select City</option>
                                            <option value=<?php echo ENUM_CITY::Cebu; ?> >Cebu</option>
                                            <option value=<?php echo ENUM_CITY::Mandaue; ?> >Mandaue</option>
                                            <option value=<?php echo ENUM_CITY::Lapulapu; ?> >Lapulapu</option>
                                            <option value=<?php echo ENUM_CITY::Toledo; ?> >Toledo</option>
                                            <option value=<?php echo ENUM_CITY::Danao; ?> >Danao</option>
                                            <option value=<?php echo ENUM_CITY::Talisay; ?> >Talisay</option>
                                        </select><br>
                                    </div>
                                </div>
                            </div>
                            <!--End Text and Selection Boxes Group-->
                            <!--Start Radio Buttons Group-->
                            <div class="reh_--form-radio-buttons-group">
                                <div class="reh_---form-radio-spay">
                                    <div class="reh_----form-radio-inner-sizing">
                                        <p>Is your pet spayed or neutered? *</p>
                                        <div class="reh_-----form-radio-buttons-and-label">
                                            <input type="radio" id="spay-yes" name="spay" value="yes" required> <!--Required-->
                                            <label for="spay-yes">yes</label><br>
                                            <input type="radio" id="spay-no" name="spay" value="no">
                                            <label for="spay-no">no</label><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="reh_---form-radio-vaccinate">
                                    <div class="reh_----form-radio-inner-sizing">
                                        <p>Is your pet's vaccinations up to date? *</p>
                                        <div  class="reh_-----form-radio-buttons-and-label">
                                            <input type="radio" id="vacc-yes" name="vacc" value="yes" required> <!--Required-->
                                            <label for="vacc-yes">yes</label><br>
                                            <input type="radio" id="vacc-no" name="vacc" value="no">
                                            <label for="vacc-no">no</label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Radio Buttons Group-->
                            <!--End textarea and File upload Group-->
                            <div class="reh_--form-text-area-file-group">
                                <div class="reh_---form-file-upload-group">
                                    <p>Upload Photos: *</p>
                                    <div class="reh_----form-file-upload-area">
                                        <div >
                                            <label for="fileUpload" class="reh_-----form-file-upload-input">SELECT IMAGES</label>
                                            <input type="file" id="fileUpload" multiple accept="image/*" required><br> <!--Required-->
                                        </div>
                                        <div id="image-holder"></div>
                                    </div>
                                </div>

                                <div class="reh_---form-textarea-group">
                                    <label for="petDesc" >Pet description: *</label>
                                    <textarea id="petDesc" name="petDesc" rows="5" cols="20" maxlength="2500" required></textarea><br> <!--Required-->
                                </div>

                                <div class="reh_---form-textarea-group">
                                    <label for="reason" >Reason for rehoming: *</label>
                                    <textarea id="reason" name="reason" rows="5" cols="20" maxlength="2500" required></textarea><br> <!--Required-->
                                </div>
                            </div>
                            <!--End textarea and File upload Group-->
                            <div class="reh_---form-button-group">
                                <button type="submit" name="submit">SUBMIT</button>
                                <p>You will be notified if your request has been approved within 24-48 hours.</p>
                            </div>
                        </form>
                        <!--END Form Section-->
                    </div>
                </div>
            </div>
        </div>

        <?php require './php-html-blocks/footer.php'?>

    <script type="text/javascript" src="./javascript/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./javascript/imageUpload.js"></script>
    <script type="text/javascript" src="./javascript/formSubmission.js"></script>

    <script type="text/javascript">
    </script>

</body>
</html>