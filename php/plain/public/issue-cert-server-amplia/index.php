<!DOCTYPE html>
<html>
<head>
    <?php include '../shared/head.php' ?>
</head>
<body>

<?php include '../shared/menu.php' ?>

<div class="container content">
    <h2 class="ls-title">Issue a certificate storing the key on the server with Amplia</h2>

    <div class="ls-content">
        <form id="issueForm" action="issue-cert-server-amplia/complete.php" method="POST">
            <h4>ICP-Brasil Certificate</h4>

            <div class="form-group">
                <label>Subject Name</label>
                <div class="row">
                    <div class="col col-sm-4">
                        <input id="subjectNameField" name="subjectName" class="form-control" type="text" placeholder="Name" required />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>CPF</label>
                <div class="row">
                    <div class="col col-sm-2">
                        <input id="cpfField" name="cpf" class="form-control" type="text" placeholder="Nº CPF" required />
                    </div>
                </div>
            </div>

            <button id="issueButton" class="btn btn-primary">Issue Certificate</button>
        </form>
    </div>
</div>

<?php include '../shared/scripts.php' ?>

<?php
// The file below contains the logic for filling and validating form. It is only
// an example, feel free to alter it to meet your application's needs. You can
// also bring the code in to the javascript block below if you prefer.
?>
<script src="scripts/issue-cert-form.js"></script>
<script>
    $(document).ready(function () {
        // Once the page is ready, we call the init() function on the javascript
        // code (see issue-cert-form.js).
        issueCertForm.init({
            issueForm: $('#issueForm'),               // The form that should be submitted when the button "issueButton" is clicked.
            subjectNameField: $('#subjectNameField'), // The "subjectName" field reference.
            cpfField: $('#cpfField'),                 // The "cpf" field reference.
            issueButton: $('#issueButton')            // The button that initiates the issuing operation on server-side.
        });
    });
</script>

</body>
</html>
