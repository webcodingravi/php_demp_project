<?php
function getErrors() {
    $errors = $_SESSION["errors"] ?? [];
    unset($_SESSION['errors']);
    return $errors;
}

function old($key) {
    return $_SESSION['old'][$key] ?? '';
}

function clearOld() {
    unset($_SESSION['old']);
}

function getErrorMessage() {
    $msg = $_SESSION['error-message'] ?? '';
    unset($_SESSION['error-message']);
    return $msg;
}

function getSuccessMessage() {
    $msg = $_SESSION['success-message'] ?? '';
    unset($_SESSION['success-message']);
    return $msg;
}



?>