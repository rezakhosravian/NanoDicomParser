<?php
		// Group 0x0400
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0005] = array('US', ' 1', 'MACIDNumber');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0010] = array('UI', ' 1', 'MACCalculationTransferSyntaxUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0015] = array('CS', ' 1', 'MACAlgorithm');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0020] = array('AT', ' 1-n', 'DataElementsSigned');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0100] = array('UI', ' 1', 'DigitalSignatureUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0105] = array('DT', ' 1', 'DigitalSignatureDateTime');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0110] = array('CS', ' 1', 'CertificateType');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0115] = array('OB', ' 1', 'CertificateOfSigner');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0120] = array('OB', ' 1', 'Signature');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0305] = array('CS', ' 1', 'CertifiedTimestampType');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0310] = array('OB', ' 1', 'CertifiedTimestamp');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0401] = array('SQ', ' 1', 'DigitalSignaturePurposeCodeSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0402] = array('SQ', ' 1', 'ReferencedDigitalSignatureSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0403] = array('SQ', ' 1', 'ReferencedSOPInstanceMACSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0404] = array('OB', ' 1', 'MAC');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0500] = array('SQ', ' 1', 'EncryptedAttributesSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0510] = array('UI', ' 1', 'EncryptedContentTransferSyntaxUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0520] = array('OB', ' 1', 'EncryptedContent');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0550] = array('SQ', ' 1', 'ModifiedAttributesSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0561] = array('SQ', ' 1', 'OriginalAttributesSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0562] = array('DT', ' 1', 'AttributeModificationDateTime');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0563] = array('LO', ' 1', 'ModifyingSystem');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0564] = array('LO', ' 1', 'SourceOfPreviousValues');
		DicomParser\Nanodicom_Dictionary::$dict[0x0400][0x0565] = array('CS', ' 1', 'ReasonForTheAttributeModification');
