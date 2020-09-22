<?php

function colorize($text, $status) {
	$out = "";
	switch ($status) {
		case "SUCCESS":
			$out = "[1;32m"; //Green Text
			break;
		case "FAILURE":
			$out = "[41m"; //Red background
			break;
        case "FAILUREFG":
            $out = "[1;31m"; //Red Text
            break;
		case "WARNING":
			$out = "[43m"; //Yellow background
			break;
        case "WARNINGFG":
            $out = "[1;33m"; //Yellow Text
            break;
		case "NOTE":
			$out = "[1;36m"; //Cyan Text
			break;
		default:
			throw new Exception("Invalid status: " . $status);
	}
	return chr(27) . "$out" . "$text" . chr(27) . "[0m";
}

function Success($text) { return colorize($text, 'SUCCESS'); }
function Warning($text) { return colorize($text, 'WARNING'); }
function WarningFG($text) { return colorize($text, 'WARNINGFG'); }
function Fail($text) { return colorize($text, 'FAILURE'); }
function FailFG($text) { return colorize($text, 'FAILUREFG'); }
function Note($text) { return colorize($text, 'NOTE'); }