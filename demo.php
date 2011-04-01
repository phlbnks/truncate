<?PHP

$str ="<p>Landmark research led by Dr Leo James from the LMB's PNAC Division has discovered that antibodies can fight viruses from within infected cells. This finding transforms the previous scientific understanding of our immunity to viral diseases like the common cold, 'winter vomiting' and gastroenteritis. It also gives scientists a different set of rules that pave the way to the next generation of antiviral drugs.</p>
<p>Viruses are mankind's biggest killer, responsible for twice as many  deaths each year as cancer, yet they are among the hardest of all  diseases to treat. Previously scientists believed that antibodies could  only reduce infection by attacking viruses outside cells and also by  blocking their entry into cells. LMB scientists have now shown that  antibodies remain attached when viruses enter healthy cells. Once  inside, the antibodies trigger a response, led by a protein called  TRIM21, which pulls the virus into a disposal system used by the cell to  get rid of unwanted material. This process happens quickly, before the  virus has a chance to harm the cell. The research team has further shown  that increasing the amount of TRIM21 protein in cells makes this  process even more effective, suggesting new ways of making better  antiviral drugs.</p>
<p>Leo who led the study said: Doctors have plenty of antibiotics to fight bacterial infections but few antiviral drugs. Although these are early days, and we don't yet know the range of viruses that are cleared by this mechanism, we are excited that our discoveries may open multiple avenues for developing new antiviral drugs. Sir Greg Winter, LMB's Deputy Director, said: Antibodies are formidable molecular war machines; it now appears that they can continue to attack viruses within cells. This research is not only a leap in our understanding of how and where antibodies work, but more generally in our understanding of immunity and infection.<br /><br />Leo's team is now working with MRC Technology to bring this exciting finding from laboratory bench to doctor's cabinet as quickly as possible.</p><p>Landmark research led by Dr Leo James from the LMB's PNAC Division has discovered that antibodies can fight viruses from within infected cells. This finding transforms the previous scientific understanding of our immunity to viral diseases like the common cold, 'winter vomiting' and gastroenteritis. It also gives scientists a different set of rules that pave the way to the next generation of antiviral drugs.</p>
<p>Viruses are mankind's biggest killer, responsible for twice as many  deaths each year as cancer, yet they are among the hardest of all  diseases to treat. Previously scientists believed that antibodies could  only reduce infection by attacking viruses outside cells and also by  blocking their entry into cells. LMB scientists have now shown that  antibodies remain attached when viruses enter healthy cells. Once  inside, the antibodies trigger a response, led by a protein called  TRIM21, which pulls the virus into a disposal system used by the cell to  get rid of unwanted material. This process happens quickly, before the  virus has a chance to harm the cell. The research team has further shown  that increasing the amount of TRIM21 protein in cells makes this  process even more effective, suggesting new ways of making better  antiviral drugs.</p>
<p>Leo who led the study said: Doctors have plenty of antibiotics to fight bacterial infections but few antiviral drugs. Although these are early days, and we don't yet know the range of viruses that are cleared by this mechanism, we are excited that our discoveries may open multiple avenues for developing new antiviral drugs. Sir Greg Winter, LMB's Deputy Director, said: Antibodies are formidable molecular war machines; it now appears that they can continue to attack viruses within cells. This research is not only a leap in our understanding of how and where antibodies work, but more generally in our understanding of immunity and infection.<br /><br />Leo's team is now working with MRC Technology to bring this exciting finding from laboratory bench to doctor's cabinet as quickly as possible.</p>";


/*



// Original PHP code by Chirp Internet: www.chirp.com.au
// Please acknowledge use of this code by including this header.

function restoreTags($input)
{
	$opened = array();
	// loop through opened and closed tags in order
	if(preg_match_all("/<(\/?[a-z]+)>?/i", $input, $matches)) {
	  foreach($matches[1] as $tag) {
		if(preg_match("/^[a-z]+$/i", $tag, $regs)) {
		  // a tag has been opened
		  if(strtolower($regs[0]) != 'br') $opened[] = $regs[0];
		} elseif(preg_match("/^\/([a-z]+)$/i", $tag, $regs)) {
		  // a tag has been closed
		  unset($opened[array_pop(array_keys($opened, $regs[1]))]);
		}
	  }
	}
	// close tags that are still open
	if($opened) {
	  $tagstoclose = array_reverse($opened);
	  foreach($tagstoclose as $tag) $input .= "</$tag>";
	}
	return $input;
}




// Truncate to # of Characters.
// Hits limit, then ends at next $break, then adds $pad.
// $break defaults to "." to stop at sentence end. Specify " " to stop at end of a word mid-sentence, and specify $pad as eg "..."
function truncateChars($string, $limit, $break=".", $pad="")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;
  // is $break present between $limit and the end of the string?
  if(false !== ($breakpoint = strpos($string, $break, $limit))) {
    if($breakpoint < strlen($string) - 1) {
      $string = substr($string, 0, $breakpoint) . $pad;
    }
  } 
  return $string;
}
// Truncate to # of Words.
// Hits limit, then adds "...".
function truncateWords($string, $limit, $pad="...")
{
	$output = strtok($string, " \n");
	while(--$limit > 0) $output .= " " . strtok(" \n");
	if($output != $string) $output .= $pad;
	return $output;
}
// Truncate to # of Words.
// Hits limit, then ends at next ".".
function truncateWordsS($string, $limit)
{
	$output = strtok($string, " \n");
	while(--$limit > 0) $output .= " " . strtok(" \n");
	if (substr($output, -1) !== '.') $output .= " " . strtok(".\n") . ".";
	return $output;
}


*/





include ('truncate.php');





$test1 = truncate($type='words', $str, 50, $break='.', $pad='');
echo "Test 1: 50 Words, break at sentence, no pad - " . $test1 . "<br/><br/><br/><br/>";

$test2 = truncate($type='words', $str, 50, $break=' ', $pad='...');
echo "Test 2: 50 Words, break at space, '...' pad - " . $test2 . "<br/><br/><br/><br/>";

$test3 = truncate($type='chars', $str, 50, $break='.', $pad='');
echo "Test 3: 50 Characters, break at sentence, no pad - " . $test3 . "<br/><br/><br/><br/>";

$test4 = truncate($type='chars', $str, 50, $break=' ', $pad='...');
echo "Test 4: 50 Characters, break at space, '...' pad - " . $test4 . "<br/><br/><br/><br/>";

$test5 = truncate($type='chars', $str, 50, $break='*', $pad='...');
echo "Test 5: 50 Characters, break at char, '...' pad - " . $test5 . "<br/><br/><br/><br/>";


?>