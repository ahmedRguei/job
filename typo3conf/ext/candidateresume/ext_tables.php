<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Softtodo.Candidateresume',
            'Candidateresume',
            'Candidate Resume'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Candidate Resume Extension');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_candidateresume_domain_model_candidate', 'EXT:candidateresume/Resources/Private/Language/locallang_csh_tx_candidateresume_domain_model_candidate.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_candidateresume_domain_model_candidate');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_candidateresume_domain_model_experience', 'EXT:candidateresume/Resources/Private/Language/locallang_csh_tx_candidateresume_domain_model_experience.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_candidateresume_domain_model_experience');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_candidateresume_domain_model_education', 'EXT:candidateresume/Resources/Private/Language/locallang_csh_tx_candidateresume_domain_model_education.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_candidateresume_domain_model_education');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_candidateresume_domain_model_skill', 'EXT:candidateresume/Resources/Private/Language/locallang_csh_tx_candidateresume_domain_model_skill.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_candidateresume_domain_model_skill');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_candidateresume_domain_model_language', 'EXT:candidateresume/Resources/Private/Language/locallang_csh_tx_candidateresume_domain_model_language.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_candidateresume_domain_model_language');

    },
    $_EXTKEY
);
