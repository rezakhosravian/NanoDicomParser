<?php
		// Group 0x0008
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0000] = array('UL', '1', 'IdentifyingGroupLength', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0001] = array('UL', '1', 'LengthToEnd', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0005] = array('CS', '1-n', 'SpecificCharacterSet');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0006] = array('SQ', '1', 'LanguageCodeSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0008] = array('CS', '2-n', 'ImageType');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x000A] = array('US', '1', 'SequenceItemNumber'); // NA
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0010] = array('CS', '1', 'RecognitionCode', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0012] = array('DA', '1', 'InstanceCreationDate');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0013] = array('TM', '1', 'InstanceCreationTime');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0014] = array('UI', '1', 'InstanceCreatorUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0016] = array('UI', '1', 'SOPClassUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0018] = array('UI', '1', 'SOPInstanceUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x001A] = array('UI', '1-n', 'RelatedGeneralSOPClassUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x001B] = array('UI', '1', 'OriginalSpecializedSOPClassUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0020] = array('DA', '1', 'StudyDate');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0021] = array('DA', '1', 'SeriesDate');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0022] = array('DA', '1', 'AcquisitionDate');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0023] = array('DA', '1', 'ContentDate');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0024] = array('DA', '1', 'OverlayDate', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0025] = array('DA', '1', 'CurveDate', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x002A] = array('DT', '1', 'AcquisitionDatetime');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0030] = array('TM', '1', 'StudyTime');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0031] = array('TM', '1', 'SeriesTime');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0032] = array('TM', '1', 'AcquisitionTime');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0033] = array('TM', ' 1', 'ContentTime');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0034] = array('TM', ' 1 ', 'OverlayTime', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0035] = array('TM', ' 1 ', 'CurveTime', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0040] = array('US', ' 1 ', 'DataSetType', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0041] = array('LO', ' 1 ', 'DataSetSubtype', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0042] = array('CS', ' 1 ', 'NuclearMedicineSeriesType', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0050] = array('SH', ' 1', 'AccessionNumber');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0051] = array('SQ', ' 1', 'IssuerOfAccessionNumberSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0052] = array('CS', ' 1', 'QueryRetrieveLevel');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0054] = array('AE', ' 1-n', 'RetrieveAETitle');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0056] = array('CS', ' 1', 'InstanceAvailability');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0058] = array('UI', ' 1-n', 'FailedSOPInstanceUIDList');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0060] = array('CS', ' 1', 'Modality');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0061] = array('CS', ' 1-n', 'ModalitiesInStudy');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0062] = array('UI', ' 1-n', 'SOPClassesInStudy');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0064] = array('CS', ' 1', 'ConversionType');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0068] = array('CS', ' 1', 'PresentationIntentType');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0070] = array('LO', ' 1', 'Manufacturer');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0080] = array('LO', ' 1', 'InstitutionName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0081] = array('ST', ' 1', 'InstitutionAddress');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0082] = array('SQ', ' 1', 'InstitutionCodeSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0090] = array('PN', ' 1', 'ReferringPhysicianName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0092] = array('ST', ' 1', 'ReferringPhysicianAddress');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0094] = array('SH', ' 1-n', 'ReferringPhysicianTelephoneNumbers');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0096] = array('SQ', ' 1', 'ReferringPhysicianIdentificationSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0100] = array('SH', ' 1', 'CodeValue');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0102] = array('SH', ' 1', 'CodingSchemeDesignator');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0103] = array('SH', ' 1', 'CodingSchemeVersion');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0104] = array('LO', ' 1', 'CodeMeaning');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0105] = array('CS', ' 1', 'MappingResource');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0106] = array('DT', ' 1', 'ContextGroupVersion');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0107] = array('DT', ' 1', 'ContextGroupLocalVersion');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x010B] = array('CS', ' 1', 'ContextGroupExtensionFlag');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x010C] = array('UI', ' 1', 'CodingSchemeUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x010D] = array('UI', ' 1', 'ContextGroupExtensionCreatorUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x010F] = array('CS', ' 1', 'ContextIdentifier');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0110] = array('SQ', ' 1', 'CodingSchemeIdentificationSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0112] = array('LO', ' 1', 'CodingSchemeRegistry');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0114] = array('ST', ' 1', 'CodingSchemeExternalID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0115] = array('ST', ' 1', 'CodingSchemeName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0116] = array('ST', ' 1', 'CodingSchemeResponsibleOrganization');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0117] = array('UI', ' 1', 'ContextUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x0201] = array('SH', ' 1', 'TimezoneOffsetFromUTC');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1000] = array('AE', ' 1 ', 'NetworkID', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1010] = array('SH', ' 1', 'StationName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1030] = array('LO', ' 1', 'StudyDescription');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1032] = array('SQ', ' 1', 'ProcedureCodeSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x103E] = array('LO', ' 1', 'SeriesDescription');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x103F] = array('SQ', ' 1', 'SeriesDescriptionCodeSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1040] = array('LO', ' 1', 'InstitutionalDepartmentName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1048] = array('PN', ' 1-n', 'PhysiciansOfRecord');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1049] = array('SQ', ' 1', 'PhysiciansOfRecordIdentificationSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1050] = array('PN', ' 1-n', 'PerformingPhysicianName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1052] = array('SQ', ' 1', 'PerformingPhysicianIdentificationSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1060] = array('PN', ' 1-n', 'NameOfPhysiciansReadingStudy');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1062] = array('SQ', ' 1', 'PhysiciansReadingStudyIdentificationSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1070] = array('PN', ' 1-n', 'OperatorsName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1072] = array('SQ', ' 1', 'OperatorIdentificationSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1080] = array('LO', ' 1-n', 'AdmittingDiagnosesDescription');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1084] = array('SQ', ' 1', 'AdmittingDiagnosesCodeSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1090] = array('LO', ' 1', 'ManufacturerModelName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1100] = array('SQ', ' 1 ', 'ReferencedResultsSequence', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1110] = array('SQ', ' 1', 'ReferencedStudySequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1111] = array('SQ', ' 1', 'ReferencedPerformedProcedureStepSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1115] = array('SQ', ' 1', 'ReferencedSeriesSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1120] = array('SQ', ' 1', 'ReferencedPatientSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1125] = array('SQ', ' 1', 'ReferencedVisitSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1130] = array('SQ', ' 1 ', 'ReferencedOverlaySequence', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1134] = array('SQ', ' 1', 'ReferencedStereometricInstanceSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x113A] = array('SQ', ' 1', 'ReferencedWaveformSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1140] = array('SQ', ' 1', 'ReferencedImageSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1145] = array('SQ', ' 1 ', 'ReferencedCurveSequence', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x114A] = array('SQ', ' 1', 'ReferencedInstanceSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x114B] = array('SQ', ' 1', 'ReferencedRealWorldValueMappingInstanceSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1150] = array('UI', ' 1', 'ReferencedSOPClassUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1155] = array('UI', ' 1', 'ReferencedSOPInstanceUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x115A] = array('UI', ' 1-n', 'SOPClassesSupported');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1160] = array('IS', ' 1-n', 'ReferencedFrameNumber');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1161] = array('UL', ' 1-n', 'SimpleFrameList');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1162] = array('UL', ' 3-3n', 'CalculatedFrameList');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1163] = array('FD', ' 2', 'TimeRange');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1164] = array('SQ', ' 1', 'FrameExtractionSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1167] = array('UI', ' 1', 'MultiFrameSourceSOPInstanceUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1195] = array('UI', ' 1', 'TransactionUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1197] = array('US', ' 1', 'FailureReason');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1198] = array('SQ', ' 1', 'FailedSOPSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1199] = array('SQ', ' 1', 'ReferencedSOPSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1200] = array('SQ', ' 1', 'StudiesContainingOtherReferencedInstancesSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x1250] = array('SQ', ' 1', 'RelatedSeriesSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2110] = array('CS', ' 1 ', 'LossyImageCompressionRetired', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2111] = array('ST', ' 1', 'DerivationDescription');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2112] = array('SQ', ' 1', 'SourceImageSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2120] = array('SH', ' 1', 'StageName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2122] = array('IS', ' 1', 'StageNumber');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2124] = array('IS', ' 1', 'NumberOfStages');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2127] = array('SH', ' 1', 'ViewName');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2128] = array('IS', ' 1', 'ViewNumber');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2129] = array('IS', ' 1', 'NumberOfEventTimers');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x212A] = array('IS', ' 1', 'NumberOfViewsInStage');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2130] = array('DS', ' 1-n', 'EventElapsedTimes');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2132] = array('LO', ' 1-n', 'EventTimerNames');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2133] = array('SQ', ' 1', 'EventTimerSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2134] = array('FD', ' 1', 'EventTimeOffset');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2135] = array('SQ', ' 1', 'EventCodeSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2142] = array('IS', ' 1', 'StartTrim');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2143] = array('IS', ' 1', 'StopTrim');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2144] = array('IS', ' 1', 'RecommendedDisplayFrameRate');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2200] = array('CS', ' 1 ', 'TransducerPosition', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2204] = array('CS', ' 1 ', 'TransducerOrientation', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2208] = array('CS', ' 1 ', 'AnatomicStructure', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2218] = array('SQ', ' 1', 'AnatomicRegionSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2220] = array('SQ', ' 1', 'AnatomicRegionModifierSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2228] = array('SQ', ' 1', 'PrimaryAnatomicStructureSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2229] = array('SQ', ' 1', 'AnatomicStructureSpaceOrRegionSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2230] = array('SQ', ' 1', 'PrimaryAnatomicStructureModifierSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2240] = array('SQ', ' 1 ', 'TransducerPositionSequence', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2242] = array('SQ', ' 1 ', 'TransducerPositionModifierSequence', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2244] = array('SQ', ' 1 ', 'TransducerOrientationSequence', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2246] = array('SQ', ' 1 ', 'TransducerOrientationModifierSequence', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2251] = array('SQ', ' 1 ', 'AnatomicStructureSpaceOrRegionCodeSequenceTrial', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2253] = array('SQ', ' 1 ', 'AnatomicPortalOfEntranceCodeSequenceTrial', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2255] = array('SQ', ' 1 ', 'AnatomicApproachDirectionCodeSequenceTrial', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2256] = array('ST', ' 1 ', 'AnatomicPerspectiveDescriptionTrial', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2257] = array('SQ', ' 1 ', 'AnatomicPerspectiveCodeSequenceTrial', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2258] = array('ST', ' 1 ', 'AnatomicLocationOfExaminingInstrumentDescriptionTrial', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x2259] = array('SQ', ' 1 ', 'AnatomicLocationOfExaminingInstrumentCodeSequenceTrial', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x225A] = array('SQ', ' 1 ', 'AnatomicStructureSpaceOrRegionModifierCodeSequenceTrial', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x225C] = array('SQ', ' 1 ', 'OnAxisBackgroundAnatomicStructureCodeSequenceTrial', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x3001] = array('SQ', ' 1', 'AlternateRepresentationSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x3010] = array('UI', ' 1', 'IrradiationEventUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x4000] = array('LT', ' 1 ', 'IdentifyingComments', 'RET');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9007] = array('CS', ' 4', 'FrameType');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9092] = array('SQ', ' 1', 'ReferencedImageEvidenceSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9121] = array('SQ', ' 1', 'ReferencedRawDataSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9123] = array('UI', ' 1', 'CreatorVersionUID');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9124] = array('SQ', ' 1', 'DerivationImageSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9154] = array('SQ', ' 1', 'SourceImageEvidenceSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9205] = array('CS', ' 1', 'PixelPresentation');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9206] = array('CS', ' 1', 'VolumetricProperties');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9207] = array('CS', ' 1', 'VolumeBasedCalculationTechnique');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9208] = array('CS', ' 1', 'ComplexImageComponent');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9209] = array('CS', ' 1', 'AcquisitionContrast');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9215] = array('SQ', ' 1', 'DerivationCodeSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9237] = array('SQ', ' 1', 'ReferencedPresentationStateSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9410] = array('SQ', ' 1', 'ReferencedOtherPlaneSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9458] = array('SQ', ' 1', 'FrameDisplaySequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9459] = array('FL', ' 1', 'RecommendedDisplayFrameRateInFloat');
		DicomParser\Nanodicom_Dictionary::$dict[0x0008][0x9460] = array('CS', ' 1', 'SkipFrameRangeFlag');