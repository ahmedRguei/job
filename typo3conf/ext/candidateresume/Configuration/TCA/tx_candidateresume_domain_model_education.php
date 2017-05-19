<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_education',
        'label' => 'school',
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
		'searchFields' => 'school,degree,field_study,from_date,to_date',
        'iconfile' => 'EXT:candidateresume/Resources/Public/Icons/tx_candidateresume_domain_model_education.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, school, degree, field_study, from_date, to_date',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, school, degree, field_study, from_date, to_date, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_candidateresume_domain_model_education',
                'foreign_table_where' => 'AND tx_candidateresume_domain_model_education.pid=###CURRENT_PID### AND tx_candidateresume_domain_model_education.sys_language_uid IN (-1,0)',
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
        'school' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_education.school',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'degree' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_education.degree',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'field_study' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_education.field_study',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'from_date' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_education.from_date',
	        'config' => [
			    'type' => 'input',
			    'size' => 7,
			    'eval' => 'trim'
			],
	    ],
	    'to_date' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_education.to_date',
	        'config' => [
			    'type' => 'input',
			    'size' => 7,
			    'eval' => 'trim'
			],
	    ],
        'candidate' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
