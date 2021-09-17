<?php
/**
 * HTML content parsed from the XML request.
 */
$xml_res = simplexml_load_file('response.xml');
$document = $xml_res->RESPONSE->RESPONSE_DATA->CREDIT_RESPONSE->EMBEDDED_FILE->DOCUMENT;
echo $document->asXML();
