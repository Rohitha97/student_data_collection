<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Student information collection</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="student_data_collection/css/dashlite.css?ver=3.0.1">
    <link id="skin-default" rel="stylesheet" href="student_data_collection/css/theme.css?ver=3.0.1">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css" />

</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between bg-white py-3">
                                        <div class="nk-block-head-content">
                                            <div>
                                                <h3 class="nk-block-title page-title">Student Data Collection</h3>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content row">
                                            <div class="col-md-2">
                                                <img src="./student_data_collection/images/logo.png" width="50px" />
                                            </div>
                                            <div class="col-md-10">
                                                <h3 class="nk-block-title page-title">St.Joseph International College, Milan</h3>
                                            </div>
                                        </div><!-- .nk-block-head-content -->

                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <form method="post" action="/student_data_collection/data_insert.php" name="student_data" onsubmit="return(validate());">
                                    <div class="nk-block">
                                        <div class="row g-gs">
                                            <div class="nk-block nk-block-lg">
                                                <div class="card card-preview">
                                                    <div class="card-inner">
                                                        <div class="preview-block">
                                                            <span class="preview-title-lg overline-title">Student Details</span>
								<h3 class="text-success"><?php if(isset($_GET['txt'])) echo ($_GET['txt']) ?></h3>
                                                            <div class="row gy-4">
                                                                <div class="row my-5">
                                                                    <font color='red'>
                                                                        <div id="une"> </div>
                                                                    </font>
								
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Select Class <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select js-example-basic-single" data-ui="xl" id="grade" name="grade">
                                                                                <option value="">Select class</option>
                                                                                <option value="pg">PLAY GROUP</option>
                                                                                <option value="lkh">LKG</option>
                                                                                <option value="ukg">UKG</option>
                                                                                <option value="1">GRADE 1</option>
                                                                                <option value="2">GRADE 2</option>
                                                                                <option value="3">GRADE 3</option>
                                                                                <option value="4">GRADE 4</option>
                                                                                <option value="5">GRADE 5</option>
                                                                                <option value="6">GRADE 6</option>
                                                                                <option value="7">GRADE 7</option>
                                                                                <option value="8">GRADE 8</option>
                                                                                <option value="9">GRADE 9</option>
                                                                                <option value="10">GRADE 10</option>
                                                                                <option value="11">GRADE 11</option>
                                                                                <option value="12">IGCSE</option>
                                                                                <option value="13">AS</option>
                                                                                <option value="14">AL</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="first_name">Student first name <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="first_name" name="first_name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="last_name">Student last name <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="last_name" name="last_name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="complete_name">Student complete name (for the certificates) <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="complete_name" name="complete_name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Select gender <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select" data-ui="xl" id="student_gender" name="student_gender" >
                                                                                <option value="-1">Select Option</option>
                                                                                <option value="male">Male</option>
                                                                                <option value="female">Female</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label class="form-label" for="outlined-date-picker">Date of birth <span class="text-danger">*</span></label>
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-icon form-icon-right">
                                                                                <em class="icon ni ni-calendar-alt"></em>
                                                                            </div>
                                                                            <input type="date" class="form-control" id="dob" name="dob">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="birth_country">Birth country <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="birth_country" name="birth_country">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="birth_place">Birth place <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="birth_place" name="birth_place">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Select religion <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select" data-ui="xl" id="religion" name="religion">
                                                                                <option value="-1">Select Option</option>
                                                                                <option value="Buddhist">Buddhist</option>
                                                                                <option value="Roman Catholic">Roman Catholic</option>
                                                                                <option value="Christian">Christian</option>
                                                                                <option value="Islam">Islam</option>
                                                                                <option value="Other">Other</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="codice_fliscale">Student codice fiscale <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="codice_fliscale" name="codice_fliscale" onInput="checkcodice_fliscale()">
                                                                        </div>
									<span id="check_codice_fliscale"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="student_passport">Student passport <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="student_passport" name="student_passport">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="mobile_number">Student mobile number</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="mobile_number" name="mobile_number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="student_email">Student email <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="email" class="form-control" id="student_email" name="student_email">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="previous_school">Previous school</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="previous_school" name="previous_school">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4 row mt-4">
                                                                    <label class="form-label">Do you have any siblings? <span class="text-danger">*</span></label>
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="customRadio1" name="siblings" class="custom-control-input" value="1" onchange="siblings_sec();">
                                                                            <label class="custom-control-label" for="customRadio1">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="customRadio2" name="siblings" class="custom-control-input" value="0" onchange="siblings_sec();">
                                                                            <label class="custom-control-label" for="customRadio2">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4" id="siblings_count">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">If yes, how many sisters/ brothers do you have?</label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select" data-ui="xl" id="sibling_count" name="sibling_count">
                                                                                <option value="-1">Select</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 mt-3" id="siblings_details">
                                                                <table class="table table-bordered" id="dynamicAddRemove">
                                                                    <tr>
                                                                        <th>Student name</th>
                                                                        <th>Mobile</th>
                                                                        <th>Codice fiscale</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input type="text" name="addMoreInputFields[0][student]" placeholder="Enter name" class="form-control" />
                                                                        </td>
                                                                        <td><input type="text" name="addMoreInputFields[0][class]" placeholder="Enter class" class="form-control" />
                                                                        </td>
                                                                        <td><input type="text" name="addMoreInputFields[0][siblnig_codice_fiscale]" placeholder="Enter codice fiscale" class="form-control" />
                                                                        </td>
                                                                        <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add sibling</button></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="row mt-3" id="as" style='display:none;'>
                                                                <h6 class="text-danger">As and A/L students must fill the following details.</h6>


                                                                <div class="col-sm-4 row mt-4">
                                                                    <label class="form-label">Select your grade(s) <span class="text-danger">*</span></label>
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="al_sub" value="1" id="customCheck1" onclick="myFunction1()">
                                                                            <label class="custom-control-label" for="customCheck1">AL</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4 mt-3" id="al_subject_count" style='display:none;'>
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">No of subjects you attend</label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select" data-ui="xl" id="" name="al_subjects_count">
                                                                                <option value="-1">Select</option>
                                                                                <option value="1">3</option>
                                                                                <option value="2">4</option>
                                                                                <option value="3">5</option>
                                                                                <option value="4">6</option>
                                                                                <option value="5">more</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4 mt-3" id="al_subject" style='display:none;'>
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">choose subjcts</label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="js-example-basic-multiple form-select" name="al_subjects[]" multiple="multiple" data-ui="xl" id="">
                                                                                <option value="">Select</option>
                                                                                <option value="Maths">Maths</option>
                                                                                <option value="Physics">Physics</option>
                                                                                <option value="IT">IT</option>
                                                                                <option value="Chemistry">Chemistry</option>
                                                                                <option value="Biology">Biology</option>
                                                                                <option value="Accounting">Accounting</option>
                                                                                <option value="Business Studies">Business Studies</option>
                                                                                <option value="Psychology">Psychology</option>
                                                                                <option value="English">English</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3" id="al" style='display:none;'>
                                                                <div class="col-sm-4 row mt-4">
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck2" value="1" name="as_sub" onclick="myFunction2()">
                                                                            <label class="custom-control-label" for="customCheck2">AS</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4 mt-3" id="as_subject_count" style='display:none;'>
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">No of subjects you attend</label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select" data-ui="xl" id="" name="as_subjects_count">
                                                                                <option value="-1">Select</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">more</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4 mt-3" id="as_subject" style='display:none;'>
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">choose subjcts</label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="js-example-basic-multiple form-select" name="as_subjects[]" multiple="multiple" data-ui="xl" id="">
                                                                                <option value="">Select</option>
                                                                                <option value="Maths">Maths</option>
                                                                                <option value="Physics">Physics</option>
                                                                                <option value="IT">IT</option>
                                                                                <option value="Chemistry">Chemistry</option>
                                                                                <option value="Biology">Biology</option>
                                                                                <option value="Accounting">Accounting</option>
                                                                                <option value="Business Studies">Business Studies</option>
                                                                                <option value="Psychology">Psychology</option>
                                                                                <option value="English">English</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="preview-hr">
                                                            <span class="preview-title-lg overline-title">Parent details</span>
                                                            <div class="row gy-4">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="default-1-01">Father's name</label>
                                                                        <input type="text" class="form-control" id="" name="father_name" placeholder="Father name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="father_phone">Father's phone</label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="father_phone" name="father_phone" placeholder="Father phone">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Father's whatsapp no</label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="father_whtsapp" name="father_whtsapp" placeholder="Father whatsapp no">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Father's viber No</label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="father_viber" name="father_viber" placeholder="Father viber no">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="default-1-02">Father's occupation</label>
                                                                        <input type="text" class="form-control" id="default-1-02" name="father_occupation" placeholder="Father occupation">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="default-1-02">Father's codice fiscale</label>
                                                                        <input type="text" class="form-control" id="default-1-02" name="father_codice_fiscale" placeholder="Father's codice fiscale">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="default-1-02">Father's passport no </label>
                                                                        <input type="text" class="form-control" id="default-1-02" name="father_passport_no" placeholder="Father's passport No">
                                                                    </div>
                                                                </div>
                                                                <hr class="preview-hr">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="default-1-01">Mother's name</label>
                                                                        <input type="text" class="form-control" id="default-1-01" name="mother_name" placeholder="Mother's Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Mother's phone </label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="mother_phone" name="mother_phone" placeholder="Mother's phone">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Mother's whatsapp No</label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="mother_whtsapp" name="mother_whtsapp" placeholder="Mother's whatsapp no">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Mother's viber no</label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="mother_viber" name="mother_viber" placeholder="Mother's viber no">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <label class="form-label" for="default-1-02">Mother's occupation</label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="default-1-02" name="mother_occupation" placeholder="Mother's occupation">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="default-1-02">Mothers's codice fiscale</label>
                                                                        <input type="text" class="form-control" id="default-1-02" name="mother_codice_fiscale" placeholder="Mothers's codice fiscale">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="default-1-02">Mothers's passport no</label>
                                                                        <input type="text" class="form-control" id="default-1-02" name="mother_passport_no" placeholder="Mothers's passport no">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="preview-hr">
                                                            <div>
                                                                <h6 class="text-danger">Even if the guardian is the mother / father, please kindly add relevant details again.</h6>
                                                            </div>
                                                            <div class="row my-5">
                                                                <font color='red'>
                                                                    <div id="guard"> </div>
                                                                </font>
                                                            </div>
                                                            <div class="row gy-4 mt-3">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="">Relationship to guardian <span class="text-danger">*</span></label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select" data-ui="xl" id="guardian_relationship" name="guardian_relationship">
                                                                                <option value="-1">Select</option>
                                                                                <option value="option_select_name">Parents</option>
                                                                                <option value="option_select_name">Blood relationship</option>
                                                                                <option value="option_select_name">Legal</option>
                                                                                <option value="option_select_name">Other</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="default-1-01">Guardian's name <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" id="guardian_name" name="guardian_name" placeholder="Guardian name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Guardian's phone <span class="text-danger">*</span></label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="guardian_phone" name="guardian_phone" placeholder="Guardian name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Guardian's whatsapp no <span class="text-danger">*</span></label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="guardian_whtsapp" name="guardian_whtsapp" placeholder="Guardian whatsapp no">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Guardian's viber no <span class="text-danger">*</span></label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="guardian_viber" name="guardian_viber" placeholder="Guardian viber no">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="default-1-02">Guardian's occupation <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" id="guaridan_occupation" name="guaridan_occupation" placeholder="Guardian occupation">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="default-1-02">Guardian's codice fiscale <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" id="guaridan_codice_fiscale" name="guaridan_codice_fiscale" placeholder="Guardian's codice fiscale">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="default-1-02">Guardian's email <span class="text-danger">*</span></label>
                                                                        <input type="email" class="form-control" id="guaridan_email" name="guaridan_email" placeholder="Guardian's email">
                                                                    </div>
                                                                </div>
                                                                <div class=" row col-sm-12 mt-3">
                                                                    <label class="form-label" for="default-1-02">Guardian's permenent address <span class="text-danger">*</span></label>
                                                                    <div class="col-sm-3 form-group">
                                                                        <label class="form-label" for="default-1-02">Via</label>
                                                                        <input type="text" class="form-control" id="via" placeholder="Via" name="via">
                                                                    </div>
                                                                    <div class="col-sm-3 form-group">
                                                                        <label class="form-label" for="default-1-02">No</label>
                                                                        <input type="text" class="form-control" id="no" placeholder="No" name="no">
                                                                    </div>
                                                                    <div class="col-sm-3 form-group">
                                                                        <label class="form-label" for="default-1-02">City</label>
                                                                        <input type="text" class="form-control" id="city" placeholder="City" name="city">
                                                                    </div>
                                                                    <div class="col-sm-3 form-group">
                                                                        <label class="form-label" for="default-1-02">Postal Code</label>
                                                                        <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Postal code">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
						    <div class="col-sm-12 d-flex justify-content-end py-4">
							<div class="form-group col-sm-6">
                                                    <button class="btn btn-success text-center col-sm-12 border" id="submit" type="submit" name="submit" style="text-align:center;width: auto;">Submit</button>
                                                    	</div>
							</div>
						</div><!-- .card-preview -->
                                            </div><!-- .code-block -->
                                        </div><!-- .nk-block -->
                                    </div><!-- .row -->
                                </form>
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- content @e -->
            <!-- footer @s -->
            <div class="nk-footer">
                <div class="container-fluid">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright"> &copy; 2022 Dbeeta Web Solutions.</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->

    <!-- JavaScript -->
    <script src="student_data_collection/js/bundle.js?ver=3.0.1"></script>
    <script src="student_data_collection/js/scripts.js?ver=3.0.1"></script>
    <script src="student_data_collection/js/charts/chart-ecommerce.js?ver=3.0.1"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script>
function checkcodice_fliscale() {

            jQuery.ajax({

                url: "./student_data_collection/check_codice_fliscale.php",
                data: 'codice_fliscale=' + $("#codice_fliscale").val(),
                type: "POST",
                success: function(data) {
                    $("#check_codice_fliscale").html(data);
                },
                error: function() {}
            });
        }


        function siblings_sec() {

            if (document.student_data.siblings.value == "1") {
                console.log('not returun');
                $("#siblings_count").show();
                $("#siblings_details").show();


            } else {
                console.log('returun');
                $("#siblings_count").hide();
                $("#siblings_details").hide();
            }
        }


        function myFunction1() {
            var checkBox = document.getElementById("customCheck1");
            var al_subject = document.getElementById("al_subject");
            var al_subject_count = document.getElementById("al_subject_count");

            if (checkBox.checked == true) {
                al_subject.style.display = "block";
                al_subject_count.style.display = "block";
            } else {
                al_subject.style.display = "none";
                al_subject_count.style.display = "none";
            }
        }

        function myFunction2() {
            var checkBox = document.getElementById("customCheck2");
            var as_subject = document.getElementById("as_subject");
            var as_subject_count = document.getElementById("as_subject_count");

            if (checkBox.checked == true) {
                as_subject.style.display = "block";
                as_subject_count.style.display = "block";
            } else {
                as_subject.style.display = "none";
                as_subject_count.style.display = "none";
            }
        }
    </script>
    <script>
        $(document).on("change", "#grade", function(e) {
            e.preventDefault();
            if ($(this).val() == 13 || $(this).val() == 14) {
                $("#as").show();
                $("#al").show();
            } else {
                $("#as").hide();
                $("#al").hide();
            }
        })
    </script>
    <script>
        function validate() {

            //window.alert('clicked');

            if (document.student_data.first_name.value == "") {
                document.getElementById('une').innerHTML = "Please add student first name!";
                document.student_data.first_name.focus();
                return false;
            }

            if (document.student_data.last_name.value == "") {
                document.getElementById('une').innerHTML = "Please add student last name!";
                document.student_data.last_name.focus();
                return false;
            }
            if (document.student_data.complete_name.value == "") {
                document.getElementById('une').innerHTML = "Please add student full name!";
                document.student_data.complete_name.focus();
                return false;
            }
            if (document.student_data.student_gender.value == "-1") {
                document.getElementById('une').innerHTML = "Please select gender!";
                document.student_data.student_gender.focus();
                return false;
            }
            if (document.student_data.dob.value == "") {
                document.getElementById('une').innerHTML = "Please type birthday!";
                document.student_data.dob.focus();
                return false;
            }
            if (document.student_data.birth_country.value == "") {
                document.getElementById('une').innerHTML = "Please type birth country!";
                document.student_data.birth_country.focus();
                return false;
            }
            if (document.student_data.birth_place.value == "") {
                document.getElementById('une').innerHTML = "Please type birth place!";
                document.student_data.birth_place.focus();
                return false;
            }
            if (document.student_data.religion.value == "-1") {
                document.getElementById('une').innerHTML = "Please type religion!";
                document.student_data.religion.focus();
                return false;
            }
            if (document.student_data.codice_fliscale.value == "") {
                document.getElementById('une').innerHTML = "Please type codice fliscale!";
                document.student_data.codice_fliscale.focus();
                return false;
            }
            if (document.student_data.student_passport.value == "") {
                document.getElementById('une').innerHTML = "Please type student passport!";
                document.student_data.student_passport.focus();
                return false;
            }
            if (document.student_data.mobile_number.value == "") {
                document.getElementById('une').innerHTML = "Please type mobile number!";
                document.student_data.mobile_number.focus();
                return false;
            }
            if (document.student_data.student_email.value == "") {
                document.getElementById('une').innerHTML = "Please type student email!";
                document.student_data.student_email.focus();
                return false;
            }
            
            if (document.student_data.guardian_relationship.value == "-1") {
                document.getElementById('une').innerHTML = "Please select guardian relationship!";
                document.student_data.guardian_relationship.focus();
                return false;
            }
            if (document.student_data.guardian_relationship.value == "-1") {
                document.getElementById('une').innerHTML = "Please select guardian relationship!";
                document.student_data.guardian_relationship.focus();
                return false;
            }
            if (document.student_data.guardian_name.value == "") {
                document.getElementById('une').innerHTML = "Please type guardian name!";
                document.student_data.guardian_name.focus();
                return false;
            }
            if (document.student_data.guardian_phone.value == "") {
                document.getElementById('une').innerHTML = "Please type guardian phone number!";
                document.student_data.guardian_phone.focus();
                return false;
            }
            if (document.student_data.guardian_whtsapp.value == "") {
                document.getElementById('une').innerHTML = "Please type guardian whatsapp number!";
                document.student_data.guardian_whtsapp.focus();
                return false;
            }
            if (document.student_data.guardian_viber.value == "") {
                document.getElementById('une').innerHTML = "Please type guardian viber number!";
                document.student_data.guardian_viber.focus();
                return false;
            }
            if (document.student_data.guaridan_occupation.value == "") {
                document.getElementById('une').innerHTML = "Please type guardian occupation!";
                document.student_data.guaridan_occupation.focus();
                return false;
            }
            if (document.student_data.guaridan_codice_fiscale.value == "") {
                document.getElementById('une').innerHTML = "Please type guardian guaridan codice fiscale!";
                document.student_data.guaridan_codice_fiscale.focus();
                return false;
            }
            if (document.student_data.guaridan_email.value == "") {
                document.getElementById('une').innerHTML = "Please type guardian email!";
                document.student_data.guaridan_email.focus();
                return false;
            }
            if (document.student_data.via.value == "") {
                document.getElementById('une').innerHTML = "Please type guardian via!";
                document.student_data.via.focus();
                return false;
            }
            if (document.student_data.no.value == "") {
                document.getElementById('une').innerHTML = "Please type guardian no!";
                document.student_data.no.focus();
                return false;
            }
            if (document.student_data.city.value == "") {
                document.getElementById('une').innerHTML = "Please type guardian city!";
                document.student_data.city.focus();
                return false;
            }
            if (document.student_data.postal_code.value == "") {
                document.getElementById('une').innerHTML = "Please type guardian postal code!";
                document.student_data.postal_code.focus();
                return false;
            }



            return (true);
        }
    </script>
    <script>
        var input = document.querySelector("#father_phone");

        window.intlTelInput(input, {
            separateDialCode: true,
            excludeCountries: ["in", "il"],
            preferredCountries: ["it", "jp", "pk", "no"]
        });
    </script>
    <script>
        var input = document.querySelector("#father_whtsapp");

        window.intlTelInput(input, {
            separateDialCode: true,
            excludeCountries: ["in", "il"],
            preferredCountries: ["it", "jp", "pk", "no"]
        });
    </script>
    <script>
        var input = document.querySelector("#father_viber");

        window.intlTelInput(input, {
            separateDialCode: true,
            excludeCountries: ["in", "il"],
            preferredCountries: ["it", "jp", "pk", "no"]
        });
    </script>
    <script>
        var input = document.querySelector("#mother_phone");

        window.intlTelInput(input, {
            separateDialCode: true,
            excludeCountries: ["in", "il"],
            preferredCountries: ["it", "jp", "pk", "no"]
        });
    </script>
    <script>
        var input = document.querySelector("#mother_whtsapp");

        window.intlTelInput(input, {
            separateDialCode: true,
            excludeCountries: ["in", "il"],
            preferredCountries: ["it", "jp", "pk", "no"]
        });
    </script>
    <script>
        var input = document.querySelector("#mother_viber");

        window.intlTelInput(input, {
            separateDialCode: true,
            excludeCountries: ["in", "il"],
            preferredCountries: ["it", "jp", "pk", "no"]
        });
    </script>
    <script>
        var input = document.querySelector("#guardian_phone");

        window.intlTelInput(input, {
            separateDialCode: true,
            excludeCountries: ["in", "il"],
            preferredCountries: ["it", "jp", "pk", "no"]
        });
    </script>
    <script>
        var input = document.querySelector("#guardian_whtsapp");

        window.intlTelInput(input, {
            separateDialCode: true,
            excludeCountries: ["in", "il"],
            preferredCountries: ["it", "jp", "pk", "no"]
        });
    </script>
    <script>
        var input = document.querySelector("#guardian_viber");

        window.intlTelInput(input, {
            separateDialCode: true,
            excludeCountries: ["in", "il"],
            preferredCountries: ["it", "jp", "pk", "no"]
        });
    </script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script type="text/javascript">
        var i = 0;
        $("#dynamic-ar").click(function() {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
                '][student]" placeholder="Enter Name" class="form-control" /></td><td><input type="text" name="addMoreInputFields[' + i +
                '][class]" placeholder="Enter Mobile" class="form-control" /></td><td><input type="text" name="addMoreInputFields[' + i +
                '][siblnig_codice_fiscale]" placeholder="Enter Codice Fiscale" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
    </script>
</body>

</html>