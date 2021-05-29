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
    <meta name="currentPage" content="ADOPT">
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
                        <form class="reh_-form-container">
                            <!--Start Text and Selection Boxes Group-->
                            <div class="reh_--form-textbox-container">
                                <div class="reh_---form-texbox-flex-group">
                                    <div class="reh_----form-texbox-flex-group-member"> 
                                        <label for="fname" class="field1">Owner's First Name *</label>
                                        <input class="field1" type="text" name="fname" id="fname" required><br>
                                    </div>
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="lname" >Owner's Last Name </label>
                                        <input type="text" name="lname" id="lname"><br>
                                    </div>
                                </div>

                                <div class="reh_---form-texbox-flex-group">
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="email" >Email Address *</label>
                                        <input type="email" name="email" id="email" required><br>
                                    </div>
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="mobile" >Mobile No. </label>
                                        <input type="tel" name="mobile" id="mobile" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}|[0-9]{11}" placeholder="09X-XXX-XXXX"><br>
                                    </div>
                                </div>

                                <div class="reh_---form-texbox-flex-group">
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="petname" >Pet's Name *</label>
                                        <input type="text" name="petname" id="petname" required><br>
                                    </div>
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="specie" >Specie *</label>
                                        <input type="text" name="specie" id="specie" required><br>
                                    </div>
                                </div>

                                <div class="reh_---form-texbox-flex-group">
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="age" >Age *</label>
                                        <input type="number" name="age" id="age" required><br>
                                    </div>
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="Bday" >Pet's birthday</label>
                                        <input type="date" name="bday" id="bday" ><br>
                                    </div>
                                </div>

                                <div class="reh_---form-texbox-flex-group selectbox">
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="gender" >Pet's Gender *</label>
                                        <select name="gender" id="gender" required>
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select><br>
                                    </div>
                                    <div class="reh_----form-texbox-flex-group-member">
                                        <label for="city" >Pet's City *</label>
                                        <select name="city" id="city" required>
                                            <option value="" disabled selected>Select City</option>
                                            <option value="Cebu">Cebu</option>
                                            <option value="Mandaue">Mandaue</option>
                                            <option value="Lapulapu">Lapulapu</option>
                                            <option value="Toledo">Toledo</option>
                                            <option value="Danao">Danao</option>
                                            <option value="female">Talisay</option>
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
                                            <input type="radio" id="spay-yes" name="spay-yes" value="yes" required>
                                            <label for="spay-yes">yes</label><br>
                                            <input type="radio" id="spay-no" name="spay-no" value="no">
                                            <label for="spay-no">no</label><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="reh_---form-radio-vaccinate">
                                    <div class="reh_----form-radio-inner-sizing">
                                        <p>Is your pet's vaccinations up to date? *</p>
                                        <div  class="reh_-----form-radio-buttons-and-label">
                                            <input type="radio" id="vacc-yes" name="vacc-yes" value="yes" required>
                                            <label for="vacc-yes">yes</label><br>
                                            <input type="radio" id="vacc-no" name="vacc-no" value="no">
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
                                            <input type="file" id="fileUpload" name="fileUpload" multiple accept="image/*" required><br>
                                        </div>
                                        <div id="image-holder"></div>
                                    </div>
                                </div>

                                <div class="reh_---form-textarea-group">
                                    <label for="petDesc" >Pet description: *</label>
                                    <textarea id="petDesc" name="petDesc" rows="5" cols="20" required></textarea><br>
                                </div>

                                <div class="reh_---form-textarea-group">
                                    <label for="reason" >Reason for rehoming: *</label>
                                    <textarea id="reason" name="reason" rows="5" cols="20" required></textarea><br>
                                </div>
                            </div>
                            <!--End textarea and File upload Group-->
                            <div class="reh_---form-button-group">
                                <button>SUBMIT</button>
                                <p>You will be notified if your request has been approved within 24-48 hours.</p>
                            </div>
                        </form>
                        <!--END Form Section-->
                    </div>
                </div>
            </div>
        </div>

        <?php require './php-html-blocks/footer.php'?>

    <script src="./javascript/jquery-3.6.0.min.js"></script>
    <script src="./javascript/imageUpload.js"></script>

    <script type="text/javascript">
    </script>

</body>
</html>