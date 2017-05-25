<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']['_DEFAULT'] = array(
    'fileName' => array (
        'index' => array(
            'page.html' => array(
                'keyValues' => array (
                    'type' => 98,
                )
            ),
            '_DEFAULT' => array(
                'keyValues' => array(
                )
            ),
        ),
    ),
    'postVarSets' => array(
        '_DEFAULT' => array (
            'new' => array(
                array(
                    'GETvar' => 'tx_candidateresume_candidateresume[controller]',
                ),
                array(
                    'GETvar' => 'tx_candidateresume_candidateresume[action]',
                ),
            ),
            'show' => array(
                array(
                    'GETvar' => 'tx_candidateresume_candidateresume[controller]',
                ),
                array(
                    'GETvar' => 'tx_candidateresume_candidateresume[action]',
                ),
                array (
                    'GETvar' => 'tx_candidateresume_candidateresume[candidate]',
                    'lookUpTable' => array (
                        'table'		=>	'tx_candidateresume_domain_model_candidate',
                        'id_field'	=>	'uid',
                        'alias_field'	=>	'first_name',
                        'maxLength'	=>	12,
                        'addWhereClause'=>	'AND NOT deleted',
                        'useUniqueCache'=>	1,
                        'useUniqueCache_conf'	=>	array (
                            'strtolower'		=>	1,
                            'spaceCharacter'	=>	'-',
                        ),
                    ),
                ),
            ),
            'list' => array(
                array(
                    'GETvar' => 'tx_candidateresume_candidateresume[action]',
                ),
                array(
                    'GETvar' => 'tx_candidateresume_candidateresume[controller]',
                ),
            ),
            'edit' => array(
                array(
                    'GETvar' => 'tx_candidateresume_candidateresume[controller]',
                ),
                array(
                    'GETvar' => 'tx_candidateresume_candidateresume[action]',
                ),
                array (
                    'GETvar' => 'tx_candidateresume_candidateresume[candidate]',
                    'lookUpTable' => array (
                        'table'		=>	'tx_candidateresume_domain_model_candidate',
                        'id_field'	=>	'uid',
                        'alias_field'	=>	'first_name',
                        'maxLength'	=>	12,
                        'addWhereClause'=>	'AND NOT deleted',
                        'useUniqueCache'=>	1,
                        'useUniqueCache_conf'	=>	array (
                            'strtolower'		=>	1,
                            'spaceCharacter'	=>	'-',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']=unserialize('a:1:{s:8:"_DEFAULT";a:3:{s:4:"init";a:2:{s:18:"appendMissingSlash";s:18:"ifNotFile,redirect";s:19:"emptyUrlReturnValue";s:1:"/";}s:8:"pagePath";a:1:{s:11:"rootpage_id";s:1:"1";}s:8:"fileName";a:3:{s:25:"defaultToHTMLsuffixOnPrev";i:0;s:16:"acceptHTMLsuffix";i:1;s:5:"index";a:1:{s:5:"print";a:1:{s:9:"keyValues";a:1:{s:4:"type";i:98;}}}}}}');
