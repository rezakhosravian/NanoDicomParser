<?php
		// Group 0x2010
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0010] = array('ST', ' 1', 'ImageDisplayFormat');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0030] = array('CS', ' 1', 'AnnotationDisplayFormatID');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0040] = array('CS', ' 1', 'FilmOrientation');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0050] = array('CS', ' 1', 'FilmSizeID');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0052] = array('CS', ' 1', 'PrinterResolutionID');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0054] = array('CS', ' 1', 'DefaultPrinterResolutionID');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0060] = array('CS', ' 1', 'MagnificationType');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0080] = array('CS', ' 1', 'SmoothingType');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x00A6] = array('CS', ' 1', 'DefaultMagnificationType');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x00A7] = array('CS', ' 1-n', 'OtherMagnificationTypesAvailable');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x00A8] = array('CS', ' 1', 'DefaultSmoothingType');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x00A9] = array('CS', ' 1-n', 'OtherSmoothingTypesAvailable');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0100] = array('CS', ' 1', 'BorderDensity');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0110] = array('CS', ' 1', 'EmptyImageDensity');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0120] = array('US', ' 1', 'MinDensity');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0130] = array('US', ' 1', 'MaxDensity');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0140] = array('CS', ' 1', 'Trim');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0150] = array('ST', ' 1', 'ConfigurationInformation');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0152] = array('LT', ' 1', 'ConfigurationInformationDescription');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0154] = array('IS', ' 1', 'MaximumCollatedFilms');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x015E] = array('US', ' 1', 'Illumination');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0160] = array('US', ' 1', 'ReflectedAmbientLight');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0376] = array('DS', ' 2', 'PrinterPixelSpacing');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0500] = array('SQ', ' 1', 'ReferencedFilmSessionSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0510] = array('SQ', ' 1', 'ReferencedImageBoxSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x2010][0x0520] = array('SQ', ' 1', 'ReferencedBasicAnnotationBoxSequence');
