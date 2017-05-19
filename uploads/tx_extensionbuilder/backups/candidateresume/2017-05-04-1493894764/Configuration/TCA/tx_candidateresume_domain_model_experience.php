<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_experience',
        'label' => 'title',
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
		'searchFields' => 'title,company,start_date,end_date,description,address',
        'iconfile' => 'EXT:candidateresume/Resources/Public/Icons/tx_candidateresume_domain_model_experience.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, company, start_date, end_date, description, address',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, company, start_date, end_date, description, address, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_candidateresume_domain_model_experience',
                'foreign_table_where' => 'AND tx_candidateresume_domain_model_experience.pid=###CURRENT_PID### AND tx_candidateresume_domain_model_experience.sys_language_uid IN (-1,0)',
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
        'title' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_experience.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'company' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_experience.company',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'start_date' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_experience.start_date',
	        'config' => [
			    'dbType' => 'date',
			    'type' => 'input',
			    'size' => 7,
			    'eval' => 'date,required',
			    'default' => '0000-00-00'
			],
	    ],
	    'end_date' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_experience.end_date',
	        'config' => [
			    'dbType' => 'date',
			    'type' => 'input',
			    'size' => 7,
			    'eval' => 'date',
			    'default' => '0000-00-00'
			],
	    ],
	    'description' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_experience.description',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'address' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_experience.address',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
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
