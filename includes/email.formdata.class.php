<?php
	class Email_Formdata
	{
		var $formdata; // this is the submitted data array
		var $to_email; // this is the email address to send the data to
		var $null_fields; // this is an object sent through to the user to have fields NOT SET
		var $website_name; // optional field to set if you wish to define the website name
		var $from_email; //
		var $email_title;

		function Email_Formdata($formdata, $to_email, $null_fields='', $website_name='', $from_email='', $email_title='')
		{
			$this->to_email = $to_email;
			$this->website_name = $website_name ? $website_name : $_SERVER ['SERVER_NAME'];
			$this->from_email = $from_email ? $from_email : $_SERVER ['SERVER_ADMIN'];
			$this->email_title = $email_title ? $email_title : 'Form completed on '.$this->website_name;
			$this->null_fields = $this->Set_Null_Fields($null_fields);
			$this->email_body = $this->Create_Email_Body($formdata, $this->to_email);
			$this->result = $this->Send_Email();			return $this->result;
		}

		function Create_Email_Body($formdata, $null_fields)
		{
			if (is_array($formdata))
			{
				if ($formdata['first_name'])
				{
					$email_body .= $formdata['first_name'].' '.$formdata['last_name'];
				}
				elseif ($formdata['name'])
				{
					$email_body .= $formdata['name'];
				}
				elseif ($formdata['email'])
				{
					$email_body .= $formdata['email'];
				}
				else
				{
					$email_body .= $formdata['email_address'];
				}

				$email_body .= "\n------------------------------------------------------\n";

				foreach ($formdata as $field => $value)
				{
					if (!$this->null_fields->$field)
					{
						if (is_array ($value))
						{
							$email_body .= str_replace("_", " ", $field).":\n";
							
							foreach ($value as $array_field => $array_value)
							{
								$email_body .= str_replace("_", " ", $array_field).":  ".$array_value."\n";
							}
						}
						else
						{
							$email_body .= str_replace("_", " ", $field).":  ".str_replace("_", " ", $value)."\n";
						}
					}
				}

				$email_body .= "------------------------------------------------------\n";

				return $email_body;
			}
			else
			{
				return FALSE;
			}
		}

		function Set_Null_Fields($null_fields)
		{
			if (!is_object($null_fields))
			{
				$null_fields = new StdClass();
			}
			$null_fields->Submit = TRUE;
			$null_fields->submit = TRUE;
			$null_fields->submit_y = TRUE;
			$null_fields->submit_x = TRUE;
			$null_fields->prsid = TRUE;
			$null_fields->ref = TRUE;
			$null_fields->step = TRUE;
			return $null_fields;
		}

		function Send_Email()
		{
			
			if (strtoupper(substr(PHP_OS,0,3)=='WIN')) { 
  				$eol="\r\n"; 
			} 
			elseif (strtoupper(substr(PHP_OS,0,3)=='MAC')) { 
  				$eol="\r"; 
			} 
			else { 
  				$eol="\n"; 
			}
			if ($this->to_email && $this->email_body)
			{
				$to = $formdata ['first_name'].' '.$formdata ['last_name'].' <'.$formdata ['email_address'].'>';
				$headers	=	"From: ".$this->from_email.$eol;				
				$headers	.=	"Content-type: text/plain".$eol;
				$headers	.=	"Message-ID: <".time()."_TheSystem@".$_SERVER['SERVER_NAME'].">".$eol; 
				$headers	.=	"X-Mailer: PHP v".phpversion().$eol;
				$success = mail($this->to_email, $this->email_title, $this->email_body, $headers);
				return $success;
			}
		}
	}
?>