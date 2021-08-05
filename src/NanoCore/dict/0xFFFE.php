<?php
		// Group 0xFFFE
		// IT = Item
		// DI = Delimitation Item
		DicomParser\Nanodicom_Dictionary::$dict[0xFFFE][0xE000] = array('IT', '1', 'Item');
		DicomParser\Nanodicom_Dictionary::$dict[0xFFFE][0xE00D] = array('DI', '1', 'ItemDelimitationItem');
		DicomParser\Nanodicom_Dictionary::$dict[0xFFFE][0xE0DD] = array('DI', '1', 'SequenceDelimitationItem');
