<?php

class User
{
	private $m_sName;
	private $m_sEmail;
	private $m_sPass;

	public function __set($p_sProperty, $p_vValue)
	{
		switch($p_sProperty)
		{
			case "Name":
				$this->m_sName = $p_vValue;
				break;
			case "Email":
				$this->m_sEmail = $p_vValue;
				break;
			case "Pass":
				$this->m_sPass = $p_vValue;
				break;
			
		}
	}
	
	public function __get($p_sProperty)
	{
		$vResult = null;
		switch($p_sProperty)
		{
			case "Name":
				$v_Result = $this->m_sName;
				break;
			case "Email":
				$v_Result = $this->m_sEmail;
				break;
			case "Pass":
				$v_Result = $this->m_sPass;
				break;
		}
		return $vResult;
	}
	
	public function Save()
	{
		include("connection.php");
		if(!$link->connect_error)
		{
			if($link->select_db($m_sDatabase))
			{
				$sSql = "INSERT INTO Gebruiker (Naam, Paswoord, Email) 
				VALUES ('".$link->real_escape_string($this->Name)."',
				'".$link->real_escape_string($this->Pass)."',
				'".$link->real_escape_string($this->Email)."'
				);";
				
				if($rResult = $link->query($sSql))
				{
					$bResult = true;
				}
				else
				{
					throw new Exception('whoops, probleem bij het opslaan');
				}
			}
			else
			{
				throw new Exception('Db kon niet geselecteerd worden');
			}
		}
		else
		{
			//geen conn met db
			throw new Exception('no connection with db');
		}
		return $bResult;
		mysqli_close($link);
	}
	
	public function UsernameAvailable()
	{
		include("connection.php");
		
		$sSql = "SELECT Naam FROM Gebruikers WHERE Naam = '".$this->Name."'";
		$v_Result = $link->query($sSql);
		if($vResult->num_rows>0)
		{
			return(false);
			
		}
		else
		{
			return(true);
		}
		mysqli_close($link);

	}
}
?>