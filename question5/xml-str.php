<?php
/**
 * XML string built with SimpleXMLElement methods.
 */
$xmlString = new SimpleXMLElement("<REQUEST_GROUP></REQUEST_GROUP>");
$xmlString->addAttribute('MISMOVersionID', '2.3.1');

$requesting_party = $xmlString->addChild('REQUESTING_PARTY');
$requesting_party->addAttribute('_Name', 'ACG FUNDING');
$requesting_party->addAttribute('_StreetAddress', '1661 Hanover Road Suite 216');
$requesting_party->addAttribute('_City', 'City of Industry');
$requesting_party->addAttribute('_State', 'CA');
$requesting_party->addAttribute('_PostalCode', '91748');

$receiving_party = $xmlString->addChild('RECEIVING_PARTY');
$receiving_party->addAttribute('_Name', 'Credit Plus');
$receiving_party->addAttribute('_StreetAddress', '31550 Winterplace Parkway');
$receiving_party->addAttribute('_City', 'Salisbury');
$receiving_party->addAttribute('_State', 'MD');
$receiving_party->addAttribute('_PostalCode', '21804');
$receiving_party->addAttribute('_Identifier', 'AV');

$request = $xmlString->addChild('REQUEST');
$request->addAttribute('RequestDatetime', '2017-02-16T09:20:59');
$request->addAttribute('InternalAccountIdentifier', '');
$request->addAttribute('LoginAccountIdentifier', 'BeSmartee');
$request->addAttribute('LoginAccountPassword', 'Testing@Passw0rd');

$request_data = $request->addChild('REQUEST_DATA');

$credit_request = $request_data->addChild('CREDIT_REQUEST');

$mismo_version_id = $credit_request->addChild('MISMOVersionID');

$lender_case_identifier = $credit_request->addChild('LenderCaseIdentifier');

$requesting_party_requested_by_name = $credit_request->addChild('RequestingPartyRequestedByName');

$credit_request_data = $credit_request->addChild('CREDIT_REQUEST_DATA');
$credit_request_data->addAttribute('CreditRequestID', 'CreditRequest1');
$credit_request_data->addAttribute('BorrowerID', 'Borrower');
$credit_request_data->addAttribute('CreditReportRequestActionType', 'Submit');
$credit_request_data->addAttribute('CreditReportType', 'Merge');
$credit_request_data->addAttribute('CreditRequestType', 'Individual');
$credit_request_data->addAttribute('CreditRequestDateTime', '2017-02-16T09:20:59');

$credit_repository_included = $credit_request_data->addChild('CREDIT_REQUEST_DATA');
$credit_repository_included->addAttribute('_EquifaxIndicator', 'Y');
$credit_repository_included->addAttribute('_ExperianIndicator', 'Y');
$credit_repository_included->addAttribute('_TransUnionIndicator', 'Y');

$loan_application = $credit_request->addChild('LOAN_APPLICATION');

$borrower = $loan_application->addChild('BORROWER');
$borrower->addAttribute('BorrowerID', 'Borrower');
$borrower->addAttribute('_FirstName', 'Tim');
$borrower->addAttribute('_LastName', 'Testcase');
$borrower->addAttribute('_BirthDate', '1999-01-01');
$borrower->addAttribute('_HomeTelephoneNumber', '714-235-7114');
$borrower->addAttribute('_SSN', '123456789');
$borrower->addAttribute('_PrintPositionType', 'Borrower');

$residence = $borrower->addChild('_RESIDENCE');
$residence->addAttribute('_StreetAddress', '4053 Aladdin Dr');
$residence->addAttribute('_City', 'Huntington Beach');
$residence->addAttribute('_State', 'CA');
$residence->addAttribute('_PostalCode', '92649');
$residence->addAttribute('BorrowerResidencyType', 'Current');
