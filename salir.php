<?php

session_start();
//quitamos la variable global
unset($_SESSION['INGRESO']);
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
				$uri = 'https://';
			}else{
				$uri = 'http://';
			}
		   $uri .= $_SERVER['HTTP_HOST'];

		   echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";	   

 ?>