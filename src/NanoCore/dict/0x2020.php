<?php
		// Group 0x2020
		DicomParser\Nanodicom_Dictionary::$dict[0x2020][0x0010] = array('US', ' 1', 'ImageBoxPosition');
		DicomParser\Nanodicom_Dictionary::$dict[0x2020][0x0020] = array('CS', ' 1', 'Polarity');
		DicomParser\Nanodicom_Dictionary::$dict[0x2020][0x0030] = array('DS', ' 1', 'RequestedImageSize');
		DicomParser\Nanodicom_Dictionary::$dict[0x2020][0x0040] = array('CS', ' 1', 'RequestedDecimateCropBehavior');
		DicomParser\Nanodicom_Dictionary::$dict[0x2020][0x0050] = array('CS', ' 1', 'RequestedResolutionID');
		DicomParser\Nanodicom_Dictionary::$dict[0x2020][0x00A0] = array('CS', ' 1', 'RequestedImageSizeFlag');
		DicomParser\Nanodicom_Dictionary::$dict[0x2020][0x00A2] = array('CS', ' 1', 'DecimateCropResult');
		DicomParser\Nanodicom_Dictionary::$dict[0x2020][0x0110] = array('SQ', ' 1', 'BasicGrayscaleImageSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x2020][0x0111] = array('SQ', ' 1', 'BasicColorImageSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x2020][0x0130] = array('SQ', ' 1 ', 'ReferencedImageOverlayBoxSequence', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x2020][0x0140] = array('SQ', ' 1 ', 'ReferencedVOILUTBoxSequence', 'RET');
