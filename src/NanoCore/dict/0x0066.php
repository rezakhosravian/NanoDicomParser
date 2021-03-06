<?php
		// Group 0x0066
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0001] = array('UL', ' 1', 'NumberOfSurfaces');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0002] = array('SQ', ' 1', 'SurfaceSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0003] = array('UL', ' 1', 'SurfaceNumber');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0004] = array('LT', ' 1', 'SurfaceComments');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0009] = array('CS', ' 1', 'SurfaceProcessing');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x000A] = array('FL', ' 1', 'SurfaceProcessingRatio');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x000B] = array('LO', ' 1', 'SurfaceProcessingDescription');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x000C] = array('FL', ' 1', 'RecommendedPresentationOpacity');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x000D] = array('CS', ' 1', 'RecommendedPresentationType');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x000E] = array('CS', ' 1', 'FiniteVolume');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0010] = array('CS', ' 1', 'Manifold');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0011] = array('SQ', ' 1', 'SurfacePointsSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0012] = array('SQ', ' 1', 'SurfacePointsNormalsSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0013] = array('SQ', ' 1', 'SurfaceMeshPrimitivesSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0015] = array('UL', ' 1', 'NumberOfSurfacePoints');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0016] = array('OF', ' 1', 'PointCoordinatesData');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0017] = array('FL', ' 3', 'PointPositionAccuracy');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0018] = array('FL', ' 1', 'MeanPointDistance');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0019] = array('FL', ' 1', 'MaximumPointDistance');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x001A] = array('FL', ' 6', 'PointsBoundingBoxCoordinates');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x001B] = array('FL', ' 3', 'AxisOfRotation');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x001C] = array('FL', ' 3', 'CenterOfRotation');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x001E] = array('UL', ' 1', 'NumberOfVectors');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x001F] = array('US', ' 1', 'VectorDimensionality');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0020] = array('FL', ' 1-n', 'VectorAccuracy');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0021] = array('OF', ' 1', 'VectorCoordinateData');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0023] = array('OW', ' 1', 'TrianglePointIndexList');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0024] = array('OW', ' 1', 'EdgePointIndexList');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0025] = array('OW', ' 1', 'VertexPointIndexList');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0026] = array('SQ', ' 1', 'TriangleStripSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0027] = array('SQ', ' 1', 'TriangleFanSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0028] = array('SQ', ' 1', 'LineSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0029] = array('OW', ' 1', 'PrimitivePointIndexList');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x002A] = array('UL', ' 1', 'SurfaceCount');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x002B] = array('SQ', ' 1', 'ReferencedSurfaceSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x002C] = array('UL', ' 1', 'ReferencedSurfaceNumber');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x002D] = array('SQ', ' 1', 'SegmentSurfaceGenerationAlgorithmIdentificationSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x002E] = array('SQ', ' 1', 'SegmentSurfaceSourceInstanceSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x002F] = array('SQ', ' 1', 'AlgorithmFamilyCodeSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0030] = array('SQ', ' 1', 'AlgorithmNameCodeSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0031] = array('LO', ' 1', 'AlgorithmVersion');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0032] = array('LT', ' 1', 'AlgorithmParameters');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0034] = array('SQ', ' 1', 'FacetSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0035] = array('SQ', ' 1', 'SurfaceProcessingAlgorithmIdentificationSequence');
		DicomParser\Nanodicom_Dictionary::$dict[0x0066][0x0036] = array('LO', ' 1', 'AlgorithmName');
