<?php
// Written by Phil Banks
// Based on code from http://www.the-art-of-web.com/php/truncate/
//// Original PHP code by Chirp Internet: www.chirp.com.au. Please acknowledge use of this code by including this header.

function truncate($type='words', $string, $length, $break='.', $pad='')
{
	switch($type) {
		case 'words':
			switch($break) {
				// Split at the next end of a sentence PAST the $length. 
				case '.':
					$output = strtok($string, " \n");
					while(--$length > 0) $output .= " " . strtok(" \n");
					if (substr($output, -1) !== '.') $output .= " " . strtok(".\n") . ".";
					return $output;
				break;
				// Split at the next end of a word PAST the $length. 
				case ' ':
					$output = strtok($string, " \n");
					while(--$length > 0) $output .= " " . strtok(" \n");
					if($output != $string) $output .= $pad;
					return $output;
				break;
			}
		break;
		case 'chars':
			switch($break) {
				// Split at the next end of a sentence PAST the $length. 
				case '.':
					if(strlen($string) <= $length) return $string;
					if(false !== ($breakpoint = strpos($string, $break, $length))) {
						if($breakpoint < strlen($string) - 1) {
							$string = substr($string, 0, $breakpoint) . ". " . $pad;
						}
					} 
					return $string;
				break;
				// Split at the next end of a word PAST the $length. 
				case ' ':
					if(strlen($string) <= $length) return $string;
					if(false !== ($breakpoint = strpos($string, $break, $length))) {
						if($breakpoint < strlen($string) - 1) {
							$string = substr($string, 0, $breakpoint) . $pad;
						}
					} 
					return $string;
				break;
				// Split at the next character PAST the $length. 
				case '*':
					if(strlen($string) <= $length) return $string;
					else {
						$string = substr($string, 0, $length) . $pad;
					}
					return $string;
				break;
			}
		break;
	}
}

?>