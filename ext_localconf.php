<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();


ExtensionManagementUtility::addPageTSConfig('@import "EXT:captchaeu/Configuration/CaptchaEU.tsconfig"');
