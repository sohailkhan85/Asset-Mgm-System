<?php

	/**
	 * Include this file in your scripts that send an email and always include it after including common.php of your tool so this script has configuration constants and variable $curtoolname available
	 */
	
	//require_once(LIBPATH . 'htmlMimeMail.php');
	require_once('htmlMimeMail.php');
	
	/**
	 * This functions sends email and logs the mail sending script. Returns true if mail was send successfully else false
	 *
	 * @param string $to
	 * @param string $fromemail
	 * @param string $fromname
	 * @param string $returnpath
	 * @param string $subject
	 * @param string $messagetext
	 * @param string $messagehtml
	 * @return array where array[0] is true or false depending whether mail was sent or not and array[1] contains error message if message sending failed.
	 */
	
	function sendMail($to, $fromemail, $fromname, $returnpath, $subject, $messagetext = '', $messagehtml = '' )
	{
		
		/* 
		echo $to.'---'.$subject.'-----'.$messagetext.'----';
		 exit;
		*/
		
		//global $curtoolname;
		$ret    = array();
		
		$error = '';
		$result = 0;
		$mail	=	new htmlMimeMail;
		
		if($messagehtml)
			$mail->setHtml($messagehtml, $messagetext);
		else 
			$mail->setText($messagetext);
				
		$mail->setReturnPath($returnpath);
		$mail->setFrom("$fromname <$fromemail>");
		$mail->setSubject($subject);
		//$mail->setSMTPParams('204.15.13.10', 587);
		$mail->setSMTPParams('mail.assarain.com', 587);
		
		if($mail->send( array($to), 'smtp' ))
		{
			  echo "Inside mail ... ";
			  exit;
			$result = 1;
			$ret = array(true, '');
		}
		else 
		{
			 //echo "Inside Else ....."; exit;
			$error = implode(', ', $mail->errors);
			$ret = array(false, $error);
		}
		
/*		$debug = debug_backtrace();
		
		$dbmail = new Database();
		$dbmail->selectDB('maillog');
		
		// getting Calling Script Details
		
		$file = $dbmail->escapeString($debug['file']);
		$line = $debug['line'];
				
		// Log emails
		
		 $sql = "INSERT INTO 
					mailinglog
				SET
					toolname = '$curtoolname',
					page = '$file',
					scriptline = '$line',
					toemail = '" . $dbmail->escapeString($to) . "',					
					fromane = '" . $dbmail->escapeString($fromname) . "',
					fromemail = '" . $dbmail->escapeString($fromemail) . "',
					returnpath = '" . $dbmail->escapeString($returnpath) . "',
					messagetext = '" . $dbmail->escapeString($messagetext) . "',
					messagehtml = '" . $dbmail->escapeString($messagehtml) . "',
					subjet = '" . $dbmail->escapeString($subject) . "',
					msgdate = now()
			
				";
		$dbmail->query($sql);	
		$dbmail->close();*/
		
		return $ret;
		
	}

	/** Usage of this function
	 * 
	 * Sending multipart message that contains both text and html parts
	 * 
	 * sendMail($toemail, $fromemail, $fromname, $returnpath, $subject, $messagetext, $messagehtml );
	 * 
	 * Sending html message
	 * 
	 * sendMail($toemail, $fromemail, $fromname, $returnpath, $subject, '', $messagehtml );
	 * 
	 * Sending Text Message
	 * 
	 * sendMail($toemail, $fromemail, $fromname, $returnpath, $subject, $messagetext );
	 * 
	 */

	
	
?>
