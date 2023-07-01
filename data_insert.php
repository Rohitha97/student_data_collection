<?php
include "./connection.php";

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $complete_name = $_POST['complete_name'];
    $grade = $_POST['grade'];
    $student_gender = $_POST['student_gender'];
    $dob = $_POST['dob'];
    $birth_country = $_POST['birth_country'];
    $birth_place = $_POST['birth_place'];
    $religion = $_POST['religion'];
    $codice_fliscale = $_POST['codice_fliscale'];
    $student_passport = $_POST['student_passport'];
    $mobile_number = $_POST['mobile_number'];
    $student_email = $_POST['student_email'];
    $previous_school = $_POST['previous_school'];
    $siblings = $_POST['siblings'];
    $sibling_count = $_POST['sibling_count'];
    $al_sub = $_POST['al_sub'];
    $al_subjects_count = $_POST['al_subjects_count'];
    $as_sub = $_POST['as_sub'];
    $as_subjects_count = $_POST['as_subjects_count'];
    $father_name = $_POST['father_name'];
    $father_phone = $_POST['father_phone'];
    $father_whtsapp = $_POST['father_whtsapp'];
    $father_viber = $_POST['father_viber'];
    $father_occupation = $_POST['father_occupation'];
    $father_codice_fiscale = $_POST['father_codice_fiscale'];
    $father_passport_no = $_POST['father_passport_no'];
    $mother_name = $_POST['mother_name'];
    $mother_phone = $_POST['mother_phone'];
    $mother_whtsapp = $_POST['mother_whtsapp'];
    $mother_viber = $_POST['mother_viber'];
    $mother_occupation = $_POST['mother_occupation'];
    $mother_codice_fiscale = $_POST['mother_codice_fiscale'];
    $mother_passport_no = $_POST['mother_passport_no'];
    $guardian_relationship = $_POST['guardian_relationship'];
    $guardian_name = $_POST['guardian_name'];
    $guardian_phone = $_POST['guardian_phone'];
    $guardian_whtsapp = $_POST['guardian_whtsapp'];
    $guardian_viber = $_POST['guardian_viber'];
    $guaridan_occupation = $_POST['guaridan_occupation'];
    $guaridan_codice_fiscale = $_POST['guaridan_codice_fiscale'];
    $guaridan_email = $_POST['guaridan_email'];
    $via = $_POST['via'];
    $no = $_POST['no'];
    $city = $_POST['city'];
    $student_countrycode = $_POST['student_countrycode'];

    $father_countrycode = $_POST['father_countrycode'];
    $father_wapp_countrycode = $_POST['father_wapp_countrycode'];
    $father_viber_countrycode = $_POST['father_viber_countrycode'];
    
    $mother_countrycode = $_POST['mother_countrycode'];
    $mother_wapp_countrycode = $_POST['mother_wapp_countrycode'];
    $mother_viber_countrycode = $_POST['mother_viber_countrycode'];

    $guardian_countrycode = $_POST['guardian_countrycode'];
    $guardian_wapp_countrycode = $_POST['guardian_wapp_countrycode'];
    $guardian_viber_countrycode = $_POST['guardian_viber_countrycode'];
    //print_r($_POST['addMoreInputFields']);
    //print_r($_POST['as_subjects']);
echo $postal_code;

    if (!$con) {
        $msg = "connection failed" . mysqli_connect_error();
    } else {
        $sql = "INSERT INTO `students_data` (`first_name`,`last_name`,`complete_name`,`grade`,`student_gender`,`dob`,`birth_country`,`birth_place`,`religion`,`codice_fliscale`,`student_passport`,`mobile_number`,
                        `student_email`,`previous_school`,`siblings`,`sibling_count`,`al_sub`,`al_subjects_count`,`as_sub`,`as_subjects_count`,`father_name`,`father_phone`,`father_whtsapp`,`father_viber`,`father_occupation`,`father_codice_fiscale`,`father_passport_no`,`mother_name`,
                        `mother_phone`,`mother_whtsapp`,`mother_viber`,`mother_occupation`,`mother_codice_fiscale`,`mother_passport_no`,`guardian_relationship`,`guardian_name`,`guardian_phone`,`guardian_whtsapp`,`guardian_viber`,`guaridan_occupation`,
                        `guaridan_codice_fiscale`,`guaridan_email`,`via`,`no`,`city`,`postal_code`,`student_countrycode`,`father_countrycode`,`father_wapp_countrycode`,`father_viber_countrycode`,`mother_countrycode`,`mother_wapp_countrycode`,`mother_viber_countrycode`,`guardian_countrycode`,`guardian_wapp_countrycode`,`guardian_viber_countrycode`) 
                        VALUES ('" . $first_name . "','" . $last_name . "','" . $complete_name . "','" . $grade . "','" . $student_gender . "','" . $dob . "','" . $birth_country . "','" . $birth_place . "','" . $religion . "','" . $codice_fliscale . "','" . $student_passport . "','" . $mobile_number . "',
                        '" . $student_email . "','" . $previous_school . "','" . $siblings . "','" . $sibling_count . "','" . $al_sub . "','" . $al_subjects_count . "','" . $as_sub . "','" . $as_subjects_count . "','" . $father_name . "','" . $father_phone . "','" . $father_whtsapp . "','" . $father_viber . "','" . $father_occupation . "','" . $father_codice_fiscale . "','" . $father_passport_no . "','" . $mother_name . "',
                        '" . $mother_phone . "','" . $mother_whtsapp . "','" . $mother_viber . "','" . $mother_occupation . "','" . $mother_codice_fiscale . "','" . $mother_passport_no . "','" . $guardian_relationship . "','" . $guardian_name . "','" . $guardian_phone . "','" . $guardian_whtsapp . "','" . $guardian_viber . "','" . $guaridan_occupation . "',
                        '" . $guaridan_codice_fiscale . "','" . $guaridan_email . "','" . $via . "','" . $no . "','" . $city . "','" . $postal_code . "','" . $student_countrycode . "','" . $father_countrycode . "','" . $father_wapp_countrycode . "','" . $father_viber_countrycode . "'
                        ,'" . $mother_countrycode . "','" . $mother_wapp_countrycode . "','" . $mother_viber_countrycode . "','" . $guardian_countrycode . "','" . $guardian_wapp_countrycode . "','" . $guardian_viber_countrycode . "')";
        echo ($sql);
        $result = mysqli_query($con, $sql);
        $last_Id = $con->insert_id;
        $msg = "Data has been successfully inserted";
        if($sibling_count > 0){
            foreach ($_POST['addMoreInputFields'] as $i => $value){
                $student_id = $last_Id;
                $name = $value['student'];
                $class = $value['class'];
                $siblnig_codice_fiscale = $value['siblnig_codice_fiscale'];


                $sql2 = "INSERT INTO `siblings_data` (`student_id`,`name`,`class`,`siblnig_codice_fiscale`) VALUES ( '" . $student_id . "','" . $name . "','" . $class . "','" . $siblnig_codice_fiscale . "')";
                $result2 = mysqli_query($con, $sql2);

            }
        }
        if($al_subjects_count > 0){
            foreach ($_POST['al_subjects'] as $key => $value){
                $student_id = $last_Id;
                $subject = $_POST['al_subjects'][$key];


                $sql3 = "INSERT INTO `al_subjects` (`student_id`,`subject`) VALUES ( '" . $student_id . "','" . $subject . "')";
                echo ($sql3);
                $result3 = mysqli_query($con, $sql3);

            }
        }
        if($as_subjects_count > 0){
            foreach ($_POST['as_subjects'] as $key => $value){
                $student_id = $last_Id;
                $subject = $_POST['as_subjects'][$key];


                $sql4 = "INSERT INTO `as_subject` (`studet_id`,`subject`) VALUES ( '" . $student_id . "','" . $subject . "')";
                echo ($sql4);
                $result4 = mysqli_query($con, $sql4);

            }
        }
    }
	
    header("Location:index.php?txt=$msg");
}
