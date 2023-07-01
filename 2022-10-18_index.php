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
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="mobile_number">Country code</label>
                                                                        <div class="form-control-wrap">
                                                                        <select name="student_countrycode" id="" class="js-example-basic-single">
                                                                        <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                                                                        <option data-countryCode="US" value="1">USA (+1)</option>
                                                                        <optgroup label="Other countries">
                                                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                                                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                                        </optgroup>
                                                                    </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="mobile_number">Student mobile number</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="" name="mobile_number" maxlength="10">
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
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="mobile_number">Country code</label>
                                                                        <div class="form-control-wrap">
                                                                        <select name="father_countrycode" id="" class="js-example-basic-single">
                                                                        <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                                                                        <option data-countryCode="US" value="1">USA (+1)</option>
                                                                        <optgroup label="Other countries">
                                                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                                                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                                        </optgroup>
                                                                    </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="father_phone">Father's phone</label>
                                                                    <div class="form-group">
                                                                        <input type="text" maxlength="10" class="form-control" id="" name="father_phone" placeholder="Father phone">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="mobile_number">Country code</label>
                                                                        <div class="form-control-wrap">
                                                                        <select name="father_wapp_countrycode" id="" class="js-example-basic-single">
                                                                        <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                                                                        <option data-countryCode="US" value="1">USA (+1)</option>
                                                                        <optgroup label="Other countries">
                                                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                                                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                                        </optgroup>
                                                                    </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Father's whatsapp no</label>
                                                                    <div class="form-group">
                                                                        <input type="text" maxlength="10" class="form-control" id="" name="father_whtsapp" placeholder="Father whatsapp no">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="mobile_number">Country code</label>
                                                                        <div class="form-control-wrap">
                                                                        <select name="father_viber_countrycode" id="" class="js-example-basic-single">
                                                                        <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                                                                        <option data-countryCode="US" value="1">USA (+1)</option>
                                                                        <optgroup label="Other countries">
                                                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                                                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                                        </optgroup>
                                                                    </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Father's viber No</label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" maxlength="10" id="" name="father_viber" placeholder="Father viber no">
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
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="mobile_number">Country code</label>
                                                                        <div class="form-control-wrap">
                                                                        <select name="mother_countrycode" id="" class="js-example-basic-single">
                                                                        <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                                                                        <option data-countryCode="US" value="1">USA (+1)</option>
                                                                        <optgroup label="Other countries">
                                                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                                                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                                        </optgroup>
                                                                    </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Mother's phone </label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" maxlength="10" id="" name="mother_phone" placeholder="Mother's phone">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="mobile_number">Country code</label>
                                                                        <div class="form-control-wrap">
                                                                        <select name="mother_wapp_countrycode" id="" class="js-example-basic-single">
                                                                        <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                                                                        <option data-countryCode="US" value="1">USA (+1)</option>
                                                                        <optgroup label="Other countries">
                                                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                                                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                                        </optgroup>
                                                                    </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Mother's whatsapp No</label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" maxlength="10" id="" name="mother_whtsapp" placeholder="Mother's whatsapp no">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="mobile_number">Country code</label>
                                                                        <div class="form-control-wrap">
                                                                        <select name="mother_viber_countrycode" id="" class="js-example-basic-single">
                                                                        <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                                                                        <option data-countryCode="US" value="1">USA (+1)</option>
                                                                        <optgroup label="Other countries">
                                                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                                                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                                        </optgroup>
                                                                    </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Mother's viber no</label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" maxlength="10" id="" name="mother_viber" placeholder="Mother's viber no">
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
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="mobile_number">Country code</label>
                                                                        <div class="form-control-wrap">
                                                                        <select name="guardian_countrycode" id="" class="js-example-basic-single">
                                                                        <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                                                                        <option data-countryCode="US" value="1">USA (+1)</option>
                                                                        <optgroup label="Other countries">
                                                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                                                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                                        </optgroup>
                                                                    </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Guardian's phone <span class="text-danger">*</span></label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" maxlength="10" id="" name="guardian_phone" placeholder="Guardian name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="mobile_number">Country code</label>
                                                                        <div class="form-control-wrap">
                                                                        <select name="guardian_wapp_countrycode" id="" class="js-example-basic-single">
                                                                        <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                                                                        <option data-countryCode="US" value="1">USA (+1)</option>
                                                                        <optgroup label="Other countries">
                                                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                                                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                                        </optgroup>
                                                                    </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Guardian's whatsapp no <span class="text-danger">*</span></label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" maxlength="10" id="" name="guardian_whtsapp" placeholder="Guardian whatsapp no">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="mobile_number">Country code</label>
                                                                        <div class="form-control-wrap">
                                                                        <select name="guardian_viber_countrycode" id="" class="js-example-basic-single">
                                                                        <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                                                                        <option data-countryCode="US" value="1">USA (+1)</option>
                                                                        <optgroup label="Other countries">
                                                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                                                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                                        </optgroup>
                                                                    </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label class="form-label" for="default-1-02">Guardian's viber no <span class="text-danger">*</span></label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" maxlength="10" id="" name="guardian_viber" placeholder="Guardian viber no">
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