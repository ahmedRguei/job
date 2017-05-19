<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Softtodo.Candidateresume',
            'Candidateresume',
            [
                'Candidate' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Candidate' => 'list, show, new, create, edit, update, delete'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					candidateresume {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_candidateresume.svg
						title = LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidateresume
						description = LLL:EXT:candidateresume/Resources/Private/Language/locallang_db.xlf:tx_candidateresume_domain_model_candidateresume.description
						tt_content_defValues {
							CType = list
							list_type = candidateresume_candidateresume
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
