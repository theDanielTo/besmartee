<?php
/**
 * Render table using nodes of the XML response.
 */
$xml_res = simplexml_load_file('response.xml');
$credit_response = $xml_res->RESPONSE->RESPONSE_DATA->CREDIT_RESPONSE->children();

foreach ($credit_response as $node):
  if ($node->getName() === 'CREDIT_LIABILITY'){
    echo "<tr class=\"table-row\">";
    echo "<td class=\"table-data\"><a>" . $node->_CREDITOR["_Name"] . "</a></td>";
    echo "<td class=\"table-data\">" . $node["_AccountOpenedDate"] . "</td>";
    echo "<td class=\"table-data\">" . $node["_UnpaidBalanceAmount"] . "</td>";
    echo "<td class=\"table-data\">" . $node["_MonthlyPaymentAmount"] . "</td>";
    echo "<td class=\"table-data\">" . $node["_AccountType"] . "</td>";
    echo "</tr>";
  }
endforeach;
?>
