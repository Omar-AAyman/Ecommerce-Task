<?php


if ($_SERVER['REQUEST_METHOD'] === "GET") {
    http_response_code(405);
    include_once '../../../Layouts/errors/405.php';
    die;
}
