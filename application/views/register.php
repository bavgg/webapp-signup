<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
</head>

<body>
    <h1><?php echo $title; ?></h1>

    <?php
    echo validation_errors();
    echo form_open('register/verify');

    echo '<p><em>Personal Information</em></p>';


    echo form_label('Last Name', 'txtlname');
    echo form_input('txtlname', '', 'id = "txtlname"') . '<br>';

    echo form_label('First Name', 'txtfname');
    echo form_input('txtfname', '', 'id="txtfname"') . '<br>';

    echo form_label('Gender') . '<br>';
    echo form_radio('txtgender', 'Male', TRUE, 'id = "txtgendermale"');
    echo form_label('Male', 'txtgendermale') . '<br>';

    echo form_radio('txtgender', 'Female', FALSE, 'id = "txtgenderfemale"');
    echo form_label('Female', 'txtgenderfemale') . '<br>';

    echo form_label('Birthday', 'txtbday');
    echo '<input type="date" id="txtbday" name="txtbday"><br>';

    echo form_label('Address', 'txtaddress');
    echo form_input('txtaddress', '', 'txtaddress') . '<br>';

    echo form_label('Phone', 'txtphone');
    echo form_input('txtphone', '', 'txtphone') . '<br>';

    echo form_label('E-mail', 'txtemail');
    echo form_input('txtemail', '', 'txtemail') . '<br>';
    

    echo '<p><em>User Account credentials</em></p>';

    
    echo form_label('Username', 'txtuser');
    echo form_input('txtuser', '', 'txtuser') . '<br>';

    echo form_label('Password', 'txtpass');
    echo form_password('txtpass', '', 'txtpass') . '<br>';

    echo form_label('Re-type Password', 'txtrepass');
    echo form_password('txtrepass', '', 'txtrepass') . '<br>';

    echo form_submit('btnregister', 'Register');

    echo form_close();
    ?>
</body>

</html>