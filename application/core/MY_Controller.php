<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Controller class */
require APPPATH."third_party/MX/Controller.php";
 
class MY_Controller extends MX_Controller
{
	public $title = array(
        'title' => 'ADMS - Adira Dealer Management System');
	public $breadcrumbs = array();

    function __construct()
    {
		parent::__construct();
    }
	function test()
	{
		echo "this method parent";
	}
}

class Admin_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    echo 'This is from admin controller';
  }
}

class Public_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    //echo 'This is from public controller';
  }
}