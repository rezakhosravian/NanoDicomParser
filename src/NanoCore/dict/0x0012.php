<?php
		// Group 0x0012
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0010] = array('LO', ' 1', 'ClinicalTrialSponsorName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0020] = array('LO', ' 1', 'ClinicalTrialProtocolID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0021] = array('LO', ' 1', 'ClinicalTrialProtocolName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0030] = array('LO', ' 1', 'ClinicalTrialSiteID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0031] = array('LO', ' 1', 'ClinicalTrialSiteName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0040] = array('LO', ' 1', 'ClinicalTrialSubjectID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0042] = array('LO', ' 1', 'ClinicalTrialSubjectReadingID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0050] = array('LO', ' 1', 'ClinicalTrialTimePointID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0051] = array('ST', ' 1', 'ClinicalTrialTimePointDescription');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0060] = array('LO', ' 1', 'ClinicalTrialCoordinatingCenterName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0062] = array('CS', ' 1', 'PatientIdentityRemoved');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0063] = array('LO', ' 1-n', 'DeidentificationMethod');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0064] = array('SQ', ' 1', 'DeidentificationMethodCodeSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0071] = array('LO', ' 1', 'ClinicalTrialSeriesID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0072] = array('LO', ' 1', 'ClinicalTrialSeriesDescription');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0081] = array('LO', ' 1', 'ClinicalTrialProtocolEthicsCommitteeName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0082] = array('LO', ' 1', 'ClinicalTrialProtocolEthicsCommitteeApprovalNumber');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0083] = array('SQ', ' 1', 'ConsentForClinicalTrialUseSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0084] = array('CS', ' 1', 'DistributionType');
		DicomParser\Nanodicom_Dictionary::$dict[0x0012][0x0085] = array('CS', ' 1', 'ConsentForDistributionFlag');
