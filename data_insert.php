<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "./connection.php";

if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $complete_name = mysqli_real_escape_string($con, $_POST['complete_name']);
    $grade = mysqli_real_escape_string($con, $_POST['grade']);
    $student_gender = mysqli_real_escape_string($con, $_POST['student_gender']);
    $dob = $_POST['dob'];
    $birth_country = mysqli_real_escape_string($con, $_POST['birth_country']);
    $birth_place = mysqli_real_escape_string($con, $_POST['birth_place']);
    $religion = mysqli_real_escape_string($con, $_POST['religion']);
    $codice_fliscale = mysqli_real_escape_string($con, $_POST['codice_fliscale']);
    $student_passport = mysqli_real_escape_string($con, $_POST['student_passport']);
    $mobile_number = mysqli_real_escape_string($con, $_POST['mobile_number']);
    $student_email = mysqli_real_escape_string($con, $_POST['student_email']);
    $previous_school = mysqli_real_escape_string($con, $_POST['previous_school']);
    $siblings = mysqli_real_escape_string($con, $_POST['siblings']);
    $sibling_count = mysqli_real_escape_string($con, $_POST['sibling_count']);
    $al_subjects_count = $_POST['al_subjects_count'];
    $as_subjects_count = $_POST['as_subjects_count'];
    $father_name = mysqli_real_escape_string($con, $_POST['father_name']);
    $father_phone = mysqli_real_escape_string($con, $_POST['father_phone']);
    $father_whtsapp = mysqli_real_escape_string($con, $_POST['father_whtsapp']);
    $father_viber = mysqli_real_escape_string($con, $_POST['father_viber']);
    $father_occupation = mysqli_real_escape_string($con, $_POST['father_occupation']);
    $father_codice_fiscale = mysqli_real_escape_string($con, $_POST['father_codice_fiscale']);
    $father_passport_no = mysqli_real_escape_string($con, $_POST['father_passport_no']);
    $mother_name = mysqli_real_escape_string($con, $_POST['mother_name']);
    $mother_phone = mysqli_real_escape_string($con, $_POST['mother_phone']);
    $mother_whtsapp = mysqli_real_escape_string($con, $_POST['mother_whtsapp']);
    $mother_viber = mysqli_real_escape_string($con, $_POST['mother_viber']);
    $mother_occupation = mysqli_real_escape_string($con, $_POST['mother_occupation']);
    $mother_codice_fiscale = mysqli_real_escape_string($con, $_POST['mother_codice_fiscale']);
    $mother_passport_no = mysqli_real_escape_string($con, $_POST['mother_passport_no']);
    $guardian_relationship = mysqli_real_escape_string($con, $_POST['guardian_relationship']);
    $guardian_name = mysqli_real_escape_string($con, $_POST['guardian_name']);
    $guardian_phone = mysqli_real_escape_string($con, $_POST['guardian_phone']);
    $guardian_whtsapp = mysqli_real_escape_string($con, $_POST['guardian_whtsapp']);
    $guardian_viber = mysqli_real_escape_string($con, $_POST['guardian_viber']);
    $guaridan_occupation = mysqli_real_escape_string($con, $_POST['guaridan_occupation']);
    $guaridan_codice_fiscale = mysqli_real_escape_string($con, $_POST['guaridan_codice_fiscale']);
    $guaridan_email = mysqli_real_escape_string($con, $_POST['guaridan_email']);
    $via = mysqli_real_escape_string($con, $_POST['via']);
    $no = mysqli_real_escape_string($con, $_POST['no']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $student_countrycode = mysqli_real_escape_string($con, $_POST['student_countrycode']);
    $postal_code = mysqli_real_escape_string($con, $_POST['postal_code']);
    $father_countrycode = mysqli_real_escape_string($con, $_POST['father_countrycode']);
    $father_wapp_countrycode = mysqli_real_escape_string($con, $_POST['father_wapp_countrycode']);
    $father_viber_countrycode = mysqli_real_escape_string($con, $_POST['father_viber_countrycode']);
    $mother_countrycode = mysqli_real_escape_string($con, $_POST['mother_countrycode']);
    $mother_wapp_countrycode = mysqli_real_escape_string($con, $_POST['mother_wapp_countrycode']);
    $mother_viber_countrycode = mysqli_real_escape_string($con, $_POST['mother_viber_countrycode']);
    $guardian_countrycode = mysqli_real_escape_string($con, $_POST['guardian_countrycode']);
    $guardian_wapp_countrycode = mysqli_real_escape_string($con, $_POST['guardian_wapp_countrycode']);
    $guardian_viber_countrycode = mysqli_real_escape_string($con, $_POST['guardian_viber_countrycode']);


    $sql = "INSERT INTO `students_data` (`first_name`,`last_name`,`complete_name`,`grade`,`student_gender`,`dob`,`birth_country`,`birth_place`,`religion`,`codice_fliscale`,`student_passport`,`mobile_number`,
    `student_email`,`previous_school`,`siblings`,`sibling_count`,`al_sub`,`al_subjects_count`,`as_sub`,`as_subjects_count`,`father_name`,`father_phone`,`father_whtsapp`,`father_viber`,`father_occupation`,`father_codice_fiscale`,`father_passport_no`,`mother_name`,
    `mother_phone`,`mother_whtsapp`,`mother_viber`,`mother_occupation`,`mother_codice_fiscale`,`mother_passport_no`,`guardian_relationship`,`guardian_name`,`guardian_phone`,`guardian_whtsapp`,`guardian_viber`,`guaridan_occupation`,
    `guaridan_codice_fiscale`,`guaridan_email`,`via`,`no`,`city`,`postal_code`,`student_countrycode`,`father_countrycode`,`father_wapp_countrycode`,`father_viber_countrycode`,`mother_countrycode`,`mother_wapp_countrycode`,`mother_viber_countrycode`,`guardian_countrycode`,`guardian_wapp_countrycode`,`guardian_viber_countrycode`) 
    VALUES ('" . $first_name . "','" . $last_name . "','" . $complete_name . "','" . $grade . "','" . $student_gender . "','" . $dob . "','" . $birth_country . "','" . $birth_place . "','" . $religion . "','" . $codice_fliscale . "','" . $student_passport . "','" . $mobile_number . "',
    '" . $student_email . "','" . $previous_school . "','" . $siblings . "','" . $sibling_count . "','" . $al_sub . "','" . $al_subjects_count . "','" . $as_sub . "','" . $as_subjects_count . "','" . $father_name . "','" . $father_phone . "','" . $father_whtsapp . "','" . $father_viber . "','" . $father_occupation . "','" . $father_codice_fiscale . "','" . $father_passport_no . "','" . $mother_name . "',
    '" . $mother_phone . "','" . $mother_whtsapp . "','" . $mother_viber . "','" . $mother_occupation . "','" . $mother_codice_fiscale . "','" . $mother_passport_no . "','" . $guardian_relationship . "','" . $guardian_name . "','" . $guardian_phone . "','" . $guardian_whtsapp . "','" . $guardian_viber . "','" . $guaridan_occupation . "',
    '" . $guaridan_codice_fiscale . "','" . $guaridan_email . "','" . $via . "','" . $no . "','" . $city . "','" . $postal_code . "','" . $student_countrycode . "','" . $father_countrycode . "','" . $father_wapp_countrycode . "','" . $father_viber_countrycode . "'
    ,'" . $mother_countrycode . "','" . $mother_wapp_countrycode . "','" . $mother_viber_countrycode . "','" . $guardian_countrycode . "','" . $guardian_wapp_countrycode . "','" . $guardian_viber_countrycode . "')";


    $result = mysqli_query($con, $sql);
    $last_Id = $con->insert_id;

    if ($result) {
        $msg = "Data has been successfully inserted";

        if ($sibling_count > 0) {
            foreach ($_POST['addMoreInputFields'] as $i => $value) {
                $student_id = $last_Id;
                $name = $value['student'];
                $class = $value['class'];
                $sibling_codice_fiscale = $value['sibling_codice_fiscale'];
                $sql2 = "INSERT INTO `siblings_data` (`student_id`, `name`, `class`, `sibling_codice_fiscale`) VALUES ('$student_id', '$name', '$class', '$sibling_codice_fiscale')";
                $result2 = mysqli_query($con, $sql2);
            }
        }

        if ($al_subjects_count > 0) {
            foreach ($_POST['al_subjects'] as $key => $value) {
                $student_id = $last_Id;
                $subject = $value;
                $sql3 = "INSERT INTO `al_subjects` (`student_id`, `subject`) VALUES ('$student_id', '$subject')";
                $result3 = mysqli_query($con, $sql3);
            }
        }

        if ($as_subjects_count > 0) {
            foreach ($_POST['as_subjects'] as $key => $value) {
                $student_id = $last_Id;
                $subject = $value;
                $sql4 = "INSERT INTO `as_subjects` (`student_id`, `subject`) VALUES ('$student_id', '$subject')";
                $result4 = mysqli_query($con, $sql4);
            }
        }
    } else {
        $msg = "Failed to insert data: " . mysqli_error($con);
    }

    header("Location:index.php?txt=$msg");
    exit();
    // var_dump($msg);
}
