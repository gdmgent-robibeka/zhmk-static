<?php
if (isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "inge.decanck@arteveldehs.be";
    $email_subject = "Aanvraag workshop";

    if (isset($_POST['name'])) $name = $_POST['name'];
    if (isset($_POST['firstname'])) $firstname = $_POST['firstname'];
    if (isset($_POST['phone'])) $phone = $_POST['phone'];
    if (isset($_POST['email'])) $email = $_POST['email'];
    if (isset($_POST['school'])) $school = $_POST['school'];
    if (isset($_POST['function'])) $function = $_POST['function'];
    if (isset($_POST['address'])) $address = $_POST['address'];
    if (isset($_POST['postal_code'])) $postal_code = $_POST['postal_code'];
    if (isset($_POST['city'])) $city = $_POST['city'];

    if (isset($_POST['3D'])) $threeD = $_POST['3D'];
    if (isset($_POST['image'])) $image = $_POST['image'];
    if (isset($_POST['programming'])) $programming = $_POST['programming'];
    if (isset($_POST['wot'])) $wot = $_POST['wot'];
    if (isset($_POST['sound'])) $sound = $_POST['sound'];
    if (isset($_POST['color'])) $color = $_POST['color'];
    if (isset($_POST['entrepreneur'])) $entrepreneur = $_POST['entrepreneur'];
    if (isset($_POST['print'])) $print = $_POST['print'];
    if (isset($_POST['deepfake'])) $deepfake = $_POST['deepfake'];
    if (isset($_POST['extra'])) $extra = $_POST['extra'];
    
    if (isset($_POST['location'])) $location = $_POST['location'];
    if (isset($_POST['remarks'])) $remarks = $_POST['remarks'];

    $email_message = "Beste,\n\nGraag had ik meer informatie gekregen over de workshop(s):\n";

    if (isset($threeD)) $email_message .= "- Zeg het met 3D\n";
    if (isset($image)) $email_message .= "- Vertel het met... Beeld!\n";
    if (isset($programming)) $email_message .= "- Start-to-Code: Creative Programming\n";
    if (isset($wot)) $email_message .= "- Start-to-Code: Web of Things\n";
    if (isset($sound)) $email_message .= "- Vertel het met... Geluid!\n";
    if (isset($color)) $email_message .= "- Zeg het met kleur: Een oog op kleur\n";
    if (isset($entrepreneur)) $email_message .= "- Zeg het met kleur: Zet je onderneming in kleur\n";
    if (isset($print)) $email_message .= "- Zeg het met kleur: Jouw kleurproject in kleur\n";
    if (isset($deepfake)) $email_message .= "- Deepdive into Deepfakes\n";
    if (isset($extra)) $email_message .= "- Gastles thema: Domeinoverschrijdend\n";

    $email_message .= "\nDit bij voorkeur op de " . $location . "\n";
    if (!empty($remarks)) $email_message .= "\nBericht: " . $remarks . "\n";

    $email_message .= "\nNaam: " . $firstname . $name . "\n";
    $email_message .= "E-mail: " . $email . "\n";
    $email_message .= "Telefoonnummber: " . $phone . "\n";
    $email_message .= "School: " . $school . "\n";
    $email_message .= "Adres: " . $address . ", " . $postal_code . " " . $city . "\n";
    $email_message .= "Functie " . $function . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'Content-Type: text/plain; charset=utf-8' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
}
header('Location: ../form-submitted.html');
die();
?>