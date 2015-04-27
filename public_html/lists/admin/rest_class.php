<?
/**
 * Tests the REST API in phpList with common functions
 * The test is using a client rest approach with the Snoopy-object-class
 * Creating list, subscriber, message
 * And cleaning up after
 */
namespace phpListRestapi;

require_once('plugins/restapi_test/phplist_restapi_helper.php');

$url = 'http://phplist.idec.at/lists/admin/?page=call&pi=restapi';

$login='admin';
$password='phplist98';


#$GLOBALS['tmpdir']=sys_get_temp_dir();
$GLOBALS['tmpdir']='./';

$api = new Helper( $url );
   $result = $api->login( $login, $password );
   if ($result->status != 'success'){
       echo $result->data->message;
       return;
   }

$result = $api->listsGet();
    if ($result->status != 'success'){
        echo $result->data->message;
        return;
    }




?>
