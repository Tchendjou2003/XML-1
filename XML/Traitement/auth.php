<?php 
include('../donnees/Manager.php');
Manager::init_session();
class Auth
{
	public static function login()
	{
		if(isset($_POST))
		{
			$username = htmlspecialchars($_POST['login']);
			$password = htmlspecialchars($_POST['password']);
			$res = Manager::get_unique('username', $username, 'doctor');

			$test = password_verify($password, $res['password']);
			if($test==1) 
			{
				$_SESSION['username']=$username;
				$_SESSION['isAdmin']=$res['isAdmin'];
				$_SESSION['id']=$res['id_doctor'];
				header('location:../presentation/accueil.php');
			}
			else
			{
				header("Location: ../presentation/index.php");
			}
		}
	}
}

Auth::login();

?>

