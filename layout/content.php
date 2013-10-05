<?php
require_once './../lib/PHP-on-Couch/lib/couch.php';
require_once './../lib/PHP-on-Couch/lib/couchClient.php';
require_once './../lib/PHP-on-Couch/lib/couchDocument.php';


 //Check if received message from
 if (isset($_GET['uid']) && isset($_GET['db'])) {
    $id = sanitizeString($_GET['uid']);         //!!!! need to regex to check input
    $database = sanitizeString($_GET['db']);    //!!!! need to regex to check input

    // set a new connector to the CouchDB server
    $client = new couchClient ('http://localhost:5984', $database);
    var_dump($client);

    // document fetching by ID
    try {
        $doc = $client->getDoc($id);
    } catch ( Exception $e ) {
        if ( $e->getCode() == 404 ) {
           echo "Document does not exist !";
        }
        exit(1);
    }
    echo $doc->_id . ' revision ' . $doc->_rev;
    var_dump($doc);

    printf('
        <div id="banner" class="bar-left">
            <img src="layout/images/logo.png" alt="referid"/>
        </div>

        <br />

        <div class="bar-right">
            <ul>
                <li class="navmenu"><a href="' . 'url' . '" >Product Page</a> | </li>
                <li class="navmenu"><a href="' . 'phone' . '">Contact Manufacturer</a> | </li>
                <li class="navmenu"><a href="' . 'gps' . '" >Closest Service</a> | </li>
                <li class="navmenu"><a href="' . 'user' . '" >My Page</a> | </li>
            </ul>
        </div>
        <div class="clear"></div>'
    );
 }

 /* sanitizeString is a function that is intended to sanitize input gathered
 * from forms in order to prevent injection and cross site scripting
 * $str_input is the string retrieved*/
function sanitizeString($str_input) {
    $str_input = strip_tags($str_input);
    $str_input = htmlentities($str_input);
    $str_input = stripslashes($str_input);
    return $str_input;
}

function parsejson() {
     $jsonContent = file_get_contents("C:/Users/Amanda/Desktop/test.json");
     $content = json_decode($jsonContent, true);
     var_dump($content);
 }