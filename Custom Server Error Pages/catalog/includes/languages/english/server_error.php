<?php
/*
  $Id: filenames.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Server Error');
define('HEADING_TITLE', 'Server Error');
define('IMAGE_BUTTON_HOME', 'Home');
// 0 Unknown Erorr
$number=0; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Unknown Error';
$server_error_text[$number]='This server incountered an unknown error due to malformed syntax';

// 400 Bad request
$number=400; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Bad request';
$server_error_text[$number]='This server could not understand the request due to malformed syntax or request cannot be fulfilled';

// 401 Authorization Required
$number=401; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Authorization Required';
$server_error_text[$number]='This server could not verify that you are authorized to access the document requested. Either you supplied the wrong credentials (e.g., bad password), or your browser doesn\'t understand how to supply the credentials required';

//402 Payment Required (Not used yet)
$number=402; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Payment Required';
$server_error_text[$number]='The server could not verify your payment';

//403 Forbiddent
$number=403; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Forbiddent';
$server_error_text[$number]='You don\'t have permission to access this area on the server';

//404 Page Not Found
$number=404; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Page Not Found';
$server_error_text[$number]='This server could not the document requested. Either document requested is temporarily unavailable or you have entered the document name incorrectly';

//405 Method Not Allowed
$number=405; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Method Not Allowed';
$server_error_text[$number]='You, the user, or your client have tried to request a resource using an invalid HTTP method for service on this site. No appropriate substitution could be determined by your client. This is a permanent error, retrying your request will result in failure';

//406 Not Acceptable (encoding)
$number=406; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Not Acceptable (encoding)';
$server_error_text[$number]='The server would not accept your request';

//407 Proxy Authentication Required
$number=407; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Proxy Authentication Required';
$server_error_text[$number]='The server requires proxy authentication to process your request';

//408 Request Timed Out
$number=408; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Request Timed Out';
$server_error_text[$number]='You have failed to continue the request or closed/moved the windows associated with this request';

//409 Conflicting Request
$number=409; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Conflicting Request';
$server_error_text[$number]='The server received conflicting request';

//410 Gone
$number=410; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Gone';
$server_error_text[$number]='This server could not the document requested. Either document requested is temporarily unavailable or you have entered the document name incorrectly';

//411 Content Length Required
$number=411; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Content Length Required';
$server_error_text[$number]='The server could not determine the length of your request';

//412 Precondition Failed
$number=412; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Precondition Failed';
$server_error_text[$number]='The server incountered a preconditioning error';

//413 Request Entity Too Long
$number=413; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Request Entity Too Long';
$server_error_text[$number]='The request entity is too long for the server to process';

//414 Request URI Too Long
$number=414; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Request URI Too Long';
$server_error_text[$number]='The Universal Resource Identifier is too long';

//415 Unsupported Media Type
$number=415; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Unsupported Media Type';
$server_error_text[$number]='The server does not support the requested media type';

//416 Requested Range Not Satisfiable
$number=416; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Requested Range Not Satisfiable';
$server_error_text[$number]='The request called for a portion of the file, which the server will not supply';

//417 Expectation Failed 
$number=417; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Expectation Failed ';
$server_error_text[$number]='The server encounted a expectation failure';

//421 To Many Connections
$number=421; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='To Many Connections';
$server_error_text[$number]='There are too many connections from your internet address ';

//422 Unprocessable Entity (WebDAV)
$number=422; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Unprocessable Entity';
$server_error_text[$number]='The request was well-formed but was unable to be followed due to semantic errors';

//423 Locked (WebDAV)
$number=423; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Locked';
$server_error_text[$number]='The resource that is being accessed is locked';

//424 Failed Dependency (WebDAV)
$number=424; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Failed Dependency';
$server_error_text[$number]='The request failed due to failure of a previous request';

//425 Unordered Collection (Defined in drafts of WebDav Advanced Collections)
$number=425; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Unordered Collection ';
$server_error_text[$number]='The request specifies a collection position in an unordered collection or in a collection with a server-maintained ordering.';

//426 Upgrade Required
$number=426; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Upgrade Required';
$server_error_text[$number]='The client should switch to TLS/1.0';

//449 Retry With (A Microsoft extension)
$number=449; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Retry With';
$server_error_text[$number]='The request should be retried after required action is complete action';

//500 Internal Server Error
$number=500; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Internal Server Error';
$server_error_text[$number]='';

//501 Not Implemented
$number=501; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Not Implemented';
$server_error_text[$number]='';

//502 Bad Gateway
$number=502; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Bad Gateway';
$server_error_text[$number]='';

//503 Service Unavailable
$number=503; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Service Unavailable';
$server_error_text[$number]='';

//504 Gateway Timeout
$number=504; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Gateway Timeout';
$server_error_text[$number]='';

//505 HTTP Version Not Supported
$number=505; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='HTTP Version Not Supported';
$server_error_text[$number]='';

//506 Variant Also Negotiates 
$number=506; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Variant Also Negotiates';
$server_error_text[$number]='';

//507 Insufficient Storage  (WebDAV)
$number=507; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Insufficient Storage';
$server_error_text[$number]='';

//508 Not Used
//$number=508; //DO NOT EDIT
//$server_error_number[$number]=$number; //DO NOT EDIT
//$server_error_title[$number]='';
//$server_error_text[$number]='';

//509 Bandwidth Limit Exceeded (This status code, while used by many servers, is not an official HTTP status code)
$number=509; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Bandwidth Limit Exceeded';
$server_error_text[$number]='';

//510 Not Extended
$number=510; //DO NOT EDIT
$server_error_number[$number]=$number; //DO NOT EDIT
$server_error_title[$number]='Not Extended';
$server_error_text[$number]='';

define('SERVER_ERROR_NUMBER',' $server_error_number[$error_id]');
define('SERVER_ERROR_TITLE',' $server_error_title[$error_id]');
define('SERVER_ERROR_TEXT',' $server_error_text[$error_id]');
?>