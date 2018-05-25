<?php
class client
{
    public function __construct()
    {
        $params = array('location' => 'http://localhost/Laravel_practice/soap/server.php',
                       'uri'=> 'urn:Laravel_practice/soap/server.php',
                       'trace'=> 1);
        $this->instance = new SoapClient(NULL, $params);
    }
    
    public function getName($id_array)
    {
        return $this->instance->__soapCall('getStudentName',$id_array);
    }
   
}
 $client = new client;
?>
