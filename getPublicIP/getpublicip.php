<?php
/* Copyright 2024 Thomas Trautner - PHPLABOR (www.phplabor.de) under MIT License */
/**
 * Tries to find a users ip adress and returns it
 * @return string ip adress
 */
function getPublicIP()
{
    $headers = [
        "HTTP_CLIENT_IP",
        "HTTP_X_FORWARDED_FOR",
        "HTTP_X_FORWARDED",
        "HTTP_X_CLUSTER_CLIENT_IP",
        "HTTP_FORWARDED_FOR",
        "HTTP_FORWARDED",
        "REMOTE_ADDR"
    ];
    $isValidIpAddress = function ($ip) {
        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6)) {
            return true;
        }
        return false;
    };
    foreach ($headers as $key) {
        if (!empty($_SERVER[$key])) {
            $ipList = explode(',', $_SERVER[$key]); // MultipleIP
            foreach ($ipList as $ip) {
                $ip = trim($ip);
                if ($isValidIpAddress($ip)) {
                    return $ip;
                }
            }
        }
    }
    return "Invalid IP Address";
}
