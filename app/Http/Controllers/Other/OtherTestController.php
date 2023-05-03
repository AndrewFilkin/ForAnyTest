<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherTestController extends Controller
{

    protected $name1;
    protected $name2;

    public function __construct($name1 = null, $name2 = null)
    {
        $this->name1 = $name1;
        $this->name2 = $name2;
    }

    private $data = array();

    public function __get($name)
    {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        } else {
            throw new Exception("Property $name not found");
        }
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
        $this->data['first'] = $this->name1;
        $this->data['last'] = $this->name2;
    }

    public function index()
    {
        $obj = new OtherTestController('Andrew', 'Ivan');
        $obj->name = 'Lalala';
        echo $obj->name . '<br>';
        echo '<pre>';
        print_r($obj);
        echo '<pre>';
    }
}
