<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simplepoll_domain_model_iplock', 'EXT:simplepoll/Resources/Private/Language/locallang_csh_tx_simplepoll_domain_model_iplock.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simplepoll_domain_model_iplock');
