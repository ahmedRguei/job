<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidate',
        'label' => 'first_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'first_name,last_name,address,city,phone,email,longitude,latittude,experiences,educations,skills,languages',
        'iconfile' => 'EXT:candidateresume/Resources/Public/Icons/tx_candidateresume_domain_model_candidate.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, first_name, last_name, address, city, phone, email, longitude, latittude, experiences, educations, skills, languages',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, first_name, last_name, address, city, phone, email, longitude, latittude, experiences, educations, skills, languages, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_candidateresume_domain_model_candidate',
                'foreign_table_where' => 'AND tx_candidateresume_domain_model_candidate.pid=###CURRENT_PID### AND tx_candidateresume_domain_model_candidate.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'first_name' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidate.first_name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'last_name' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidate.last_name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'address' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidate.address',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'city' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidate.city',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'phone' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidate.phone',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'email' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidate.email',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'longitude' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidate.longitude',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'latittude' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidate.latittude',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'experiences' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidate.experiences',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_candidateresume_domain_model_experience',
			    'foreign_field' => 'candidate',
			    'maxitems' => 9999,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
	    'educations' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidate.educations',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_candidateresume_domain_model_education',
			    'foreign_field' => 'candidate',
			    'maxitems' => 9999,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
	    'skills' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidate.skills',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_candidateresume_domain_model_skill',
			    'foreign_field' => 'candidate',
			    'maxitems' => 9999,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
	    'languages' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidate.languages',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_candidateresume_domain_model_language',
			    'foreign_field' => 'candidate',
			    'maxitems' => 9999,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
    ],
];
