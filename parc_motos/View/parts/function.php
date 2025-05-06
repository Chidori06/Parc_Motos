<?php
//Pour afficher le 'is-invalid' dans le formulaire
function displayBsClass($name, $errors)
{
    if (array_key_exists($name, $errors)) {
        return 'is-invalid';
    }
}

//Pour garder la valeur des inputs
function keepValue($name)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        return $_POST[$name];
    }
}

//Pour afficher les messages d'erreurs
function displayErrorMessage($name, $errors)
{
    if (array_key_exists($name, $errors)) {
        echo ('<div class="invalid-feedback">' . $errors[$name] . '</div>');
    }
}