<?php


class LoginController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function showLogin()
	{
		return View::make("login")->withCallback(Input::get('callback'));
	}

	public function logear()
	{
		$user=Empleado::where("user","=",Input::get("user"))->where("password","=",Input::get("password"))->first();
		if($user!=null) {
			$code = LoginController::generateCode();

			$oldTicket = $user->ticket;
			if (!is_null($oldTicket))
				Ticket::destroy($oldTicket->ticket);

			$ticket = new Ticket;
			$ticket->ticket = $code;
			$ticket->user = $user->id;
			$ticket->save();

			$response = Response::make("", 302);
			$response->header('Location', Input::get('callback').'#'.$code);
			return $response;
		}
		else
			return View::make("login")->withError("Credenciales no Validas")->withUser(Input::get("user"))->withCallback(Input::get('callback'));			
	}
	public function logout($ticket)
	{
		Ticket::destroy($ticket);
		$response = Response::make("", 302);
		$response->header('Location',"http://localhost/ApiTest/");
		return $response;

	}

	public function validarTicket()
	{
		$tckt = Ticket::find(Input::get('ticket'));
		if (is_null($tckt)) {
			return array('result' => 'false');
		} else {
			return array('result' => 'true', 'user' => $tckt->empleado->user);
		}
	}

	public static function generateCode(){
	    return sha1($_SERVER['SERVER_ADDR'].$_SERVER['SERVER_NAME'].$_SERVER['SERVER_PROTOCOL']).sha1($_SERVER['REQUEST_TIME_FLOAT'].$_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'].'ASFDASGRSRE');
	}

}