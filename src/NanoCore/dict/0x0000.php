<?php
		// Group 0x0000
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0000] = array('UL', '1', 'GroupLength');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0001] = array('UL', '1', 'CommandLengthToEnd');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0002] = array('UI', '1', 'AffectedSOPClassUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0003] = array('UI', '1', 'RequestedSOPClassUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0010] = array('CS', '1', 'CommandRecognitionCode');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0100] = array('US', '1', 'CommandField');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0110] = array('US', '1', 'MessageID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0120] = array('US', '1', 'MessageIDBeingRespondedTo');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0200] = array('AE', '1', 'Initiator');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0300] = array('AE', '1', 'Receiver');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0400] = array('AE', '1', 'FindLocation');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0600] = array('AE', '1', 'MoveDestination');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0700] = array('US', '1', 'Priority');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0800] = array('US', '1', 'DataSetType');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0850] = array('US', '1', 'NumberOfMatches');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0860] = array('US', '1', 'ResponseSequenceNumber');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0900] = array('US', '1', 'Status');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0901] = array('AT', '1-n', 'OffendingElement');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0902] = array('LO', '1', 'ErrorComment');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0903] = array('US', '1', 'ErrorID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x0904] = array('OT', '1-n', 'ErrorInformation');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1000] = array('UI', '1', 'AffectedSOPInstanceUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1001] = array('UI', '1', 'RequestedSOPInstanceUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1002] = array('US', '1', 'EventTypeID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1003] = array('OT', '1-n', 'EventInformation');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1005] = array('AT', '1-n', 'AttributeIdentifierList');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1007] = array('AT', '1-n', 'ModificationList');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1008] = array('US', '1', 'ActionTypeID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1009] = array('OT', '1-n', 'ActionInformation');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1013] = array('UI', '1-n', 'SuccessfulSOPInstanceUIDList');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1014] = array('UI', '1-n', 'FailedSOPInstanceUIDList');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1015] = array('UI', '1-n', 'WarningSOPInstanceUIDList');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1020] = array('US', '1', 'NumberOfRemainingSuboperations');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1021] = array('US', '1', 'NumberOfCompletedSuboperations');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1022] = array('US', '1', 'NumberOfFailedSuboperations');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1023] = array('US', '1', 'NumberOfWarningSuboperations');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1030] = array('AE', '1', 'MoveOriginatorApplicationEntityTitle');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x1031] = array('US', '1', 'MoveOriginatorMessageID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x4000] = array('AT', '1', 'DialogReceiver');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x4010] = array('AT', '1', 'TerminalType');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x5010] = array('SH', '1', 'MessageSetID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x5020] = array('SH', '1', 'EndMessageSet');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x5110] = array('AT', '1', 'DisplayFormat');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x5120] = array('AT', '1', 'PagePositionID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x5130] = array('CS', '1', 'TextFormatID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x5140] = array('CS', '1', 'NormalReverse');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x5150] = array('CS', '1', 'AddGrayScale');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x5160] = array('CS', '1', 'Borders');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x5170] = array('IS', '1', 'Copies');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x5180] = array('CS', '1', 'OldMagnificationType');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x5190] = array('CS', '1', 'Erase');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x51A0] = array('CS', '1', 'Print');
		DicomParser\Nanodicom_Dictionary::$dict[0x0000][0x51B0] = array('US', '1-n', 'Overlays');