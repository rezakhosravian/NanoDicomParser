<?php
		// Group 0x0004
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x0000] = array('UL', '1', 'FileSetGroupLength', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1130] = array('CS', '1', 'FileSetID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1141] = array('CS', '8', 'FileSetDescriptorFileID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1142] = array('CS', '1', 'FileSetCharacterSet');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1200] = array('UL', '1', 'RootDirectoryFirstRecord');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1202] = array('UL', '1', 'RootDirectoryLastRecord');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1212] = array('US', '1', 'FileSetConsistencyFlag');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1220] = array('SQ', '1', 'DirectoryRecordSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1400] = array('UL', '1', 'NextDirectoryRecordOffset');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1410] = array('US', '1', 'RecordInUseFlag');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1420] = array('UL', '1', 'LowerLevelDirectoryOffset');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1430] = array('CS', '1', 'DirectoryRecordType');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1432] = array('UI', '1', 'PrivateRecordUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1500] = array('CS', '8', 'ReferencedFileID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1504] = array('UL', '1', 'DirectoryRecordOffset');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1510] = array('UI', '1', 'ReferencedSOPClassUIDInFile');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1511] = array('UI', '1', 'ReferencedSOPInstanceUIDInFile');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1512] = array('UI', '1', 'ReferencedTransferSyntaxUIDInFile');
		DicomParser\Nanodicom_Dictionary::$dict[0x0004][0x1600] = array('UL', '1', 'NumberOfReferences');
