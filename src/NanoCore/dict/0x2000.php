<?php
		// Group 0x2000
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0010] = array('IS', ' 1', 'NumberOfCopies');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x001E] = array('SQ', ' 1', 'PrinterConfigurationSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0020] = array('CS', ' 1', 'PrintPriority');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0030] = array('CS', ' 1', 'MediumType');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0040] = array('CS', ' 1', 'FilmDestination');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0050] = array('LO', ' 1', 'FilmSessionLabel');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0060] = array('IS', ' 1', 'MemoryAllocation');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0061] = array('IS', ' 1', 'MaximumMemoryAllocation');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0062] = array('CS', ' 1 ', 'ColorImagePrintingFlag', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0063] = array('CS', ' 1 ', 'CollationFlag', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0065] = array('CS', ' 1 ', 'AnnotationFlag', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0067] = array('CS', ' 1 ', 'ImageOverlayFlag', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0069] = array('CS', ' 1 ', 'PresentationLUTFlag', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x006A] = array('CS', ' 1 ', 'ImageBoxPresentationLUTFlag', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x00A0] = array('US', ' 1', 'MemoryBitDepth');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x00A1] = array('US', ' 1', 'PrintingBitDepth');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x00A2] = array('SQ', ' 1', 'MediaInstalledSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x00A4] = array('SQ', ' 1', 'OtherMediaAvailableSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x00A8] = array('SQ', ' 1', 'SupportedImageDisplayFormatsSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0500] = array('SQ', ' 1', 'ReferencedFilmBoxSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x2000][0x0510] = array('SQ', ' 1 ', 'ReferencedStoredPrintSequence', 'RET');
