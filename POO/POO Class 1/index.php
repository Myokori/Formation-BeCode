<?php
require("form.php");

$form = new Form($_POST);
echo $form->input();
echo $form->select();
echo $form->textarea();
echo $form->radio();
echo $form->checkbox();
echo $form->submit();
echo $form->endForm();