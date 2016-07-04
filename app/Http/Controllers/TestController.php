<?php

namespace shareitbaby\Http\Controllers;

/**
 *
 */
class TestController extends Controller {

  /**
   * Show the application dashboard to the user.
   *
   * @return Response
   */
  public function index()
  {
    return view('home');
  }

  /**
   * ---------------------------------- Utilisé un Controller pour faire notre route (test4)
   *
   * @method test() qui n'est autre que notre action qu'on a défini dans notre route
   * @param $name correspond au paramètre qu'on demande dans notre route
   * @return un message ainsi que notre variable $name concaténé.
   */
  public function test($name)
  {
    return 'Bonjour ' . $name;
  }

} // End class HomeController



 ?>
