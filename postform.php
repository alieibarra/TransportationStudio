<?php
    // location of the template file
    $template_file = "mail-template.html";

    // set up variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST["department"];
    $vendorName = $_POST["vName"];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $runType = $_POST['runType'];
    $details = $_POST['details'];

    // basic email information
    $email_from = 'admin@transportation.studio';
    $email_subject = "You have a new run request";
    $to = "chasen.ibarra@icloud.com";

    // create the email headers
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "MIME-Version: 1.0 \r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1 \r\n";

    // create the html message
    if(file_exists($template_file))
        $email_body = file_get_contents($template_file);
    else   
        die("unable to location template");

    // send email
    mail($to,$email_subject,$email_body,$headers);

    // redirect to thank you page
    header("Location: thank-you.html");
    exit();
?>