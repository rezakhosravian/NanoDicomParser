<?php
		// Group 0x3004
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0001] = array('CS', ' 1', 'DVHType');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0002] = array('CS', ' 1', 'DoseUnits');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0004] = array('CS', ' 1', 'DoseType');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0006] = array('LO', ' 1', 'DoseComment');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0008] = array('DS', ' 3', 'NormalizationPoint');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x000A] = array('CS', ' 1', 'DoseSummationType');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x000C] = array('DS', ' 2-n', 'GridFrameOffsetVector');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x000E] = array('DS', ' 1', 'DoseGridScaling');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0010] = array('SQ', ' 1', 'RTDoseROISequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0012] = array('DS', ' 1', 'DoseValue');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0014] = array('CS', ' 1-3', 'TissueHeterogeneityCorrection');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0040] = array('DS', ' 3', 'DVHNormalizationPoint');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0042] = array('DS', ' 1', 'DVHNormalizationDoseValue');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0050] = array('SQ', ' 1', 'DVHSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0052] = array('DS', ' 1', 'DVHDoseScaling');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0054] = array('CS', ' 1', 'DVHVolumeUnits');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0056] = array('IS', ' 1', 'DVHNumberOfBins');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0058] = array('DS', ' 2-2n', 'DVHData');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0060] = array('SQ', ' 1', 'DVHReferencedROISequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0062] = array('CS', ' 1', 'DVHROIContributionType');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0070] = array('DS', ' 1', 'DVHMinimumDose');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0072] = array('DS', ' 1', 'DVHMaximumDose');
		DicomParser\Nanodicom_Dictionary::$dict[0x3004][0x0074] = array('DS', ' 1', 'DVHMeanDose');
