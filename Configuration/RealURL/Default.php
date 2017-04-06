<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = array (
	'_DEFAULT' => array(
		'init' => array(
			'enableCHashCache' => 1,
			'appendMissingSlash' => 'ifNotFile',
			'enableUrlDecodeCache' => 1,
			'enableUrlEncodeCache' => 1,
			'postVarSet_failureMode' => '',
		),
		'redirects' => array(),
		'preVars' => array(
			array(
				'GETvar' => 'no_cache',
				'valueMap' => array(
					'nc' => 1,
				),
				'noMatch' => 'bypass',
			),
			array(
				'GETvar' => 'L',
				'valueMap' => array(
					#'de' => '0',
					#'en' => '1',
				),
				'valueDefault' => 'de',
				'noMatch' => 'bypass',
			),
		),
		'pagePath' => array(
			'type' => 'user',
			'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
			'spaceCharacter' => '-',
			'languageGetVar' => 'L',
			'expireDays' => 7,
			'rootpage_id' => 1,
			'firstHitPathCache' => 1,
		),

		## NEWS START
		'fixedPostVars' => array(
			'newsDetailConfiguration' => array(
				array(
					'GETvar' => 'tx_news_pi1[news]',
					'lookUpTable' => array(
						'table' => 'tx_news_domain_model_news',
						'id_field' => 'uid',
						'alias_field' => 'title',
						'addWhereClause' => ' AND NOT deleted',
						'useUniqueCache' => 1,
						'useUniqueCache_conf' => array(
							'strtolower' => 1,
							'spaceCharacter' => '-'
						),
						'languageGetVar' => 'L',
						'languageExceptionUids' => '',
						'languageField' => 'sys_language_uid',
						'transOrigPointerField' => 'l10n_parent',
						'autoUpdate' => 1,
						'expireDays' => 180,
					)
				)
			),
			'newsCategoryConfiguration' => array(
				array(
					'GETvar' => 'tx_news_pi1[overwriteDemand][categories]',
					'lookUpTable' => array(
						'table' => 'tx_news_domain_model_category',
						'id_field' => 'uid',
						'alias_field' => 'title',
						'addWhereClause' => ' AND NOT deleted',
						'useUniqueCache' => 1,
						'useUniqueCache_conf' => array(
							'strtolower' => 1,
							'spaceCharacter' => '-'
						)
					)
				)
			),
			'newsTagConfiguration' => array(
				array(
					'GETvar' => 'tx_news_pi1[overwriteDemand][tags]',
					'lookUpTable' => array(
						'table' => 'tx_news_domain_model_tag',
						'id_field' => 'uid',
						'alias_field' => 'title',
						'addWhereClause' => ' AND NOT deleted',
						'useUniqueCache' => 1,
						'useUniqueCache_conf' => array(
							'strtolower' => 1,
							'spaceCharacter' => '-'
						)
					)
				)
			),
			'3' => 'newsDetailConfiguration',
		),
		'postVarSets' => array(
			'_DEFAULT' => array(
				'controller' => array(
					array(
						'GETvar' => 'tx_news_pi1[action]',
						'noMatch' => 'bypass'
					),
					array(
						'GETvar' => 'tx_news_pi1[controller]',
						'noMatch' => 'bypass'
					)
				),
				'dateFilter' => array(
					array(
						'GETvar' => 'tx_news_pi1[overwriteDemand][year]',
					),
					array(
						'GETvar' => 'tx_news_pi1[overwriteDemand][month]',
					),
				),
				'page' => array(
					array(
						'GETvar' => 'tx_news_pi1[@widget_0][currentPage]',
					),
				),
			),
		),
		## NEWS END
	),
);
?>