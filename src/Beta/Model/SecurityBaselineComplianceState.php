<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityBaselineComplianceState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* SecurityBaselineComplianceState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SecurityBaselineComplianceState extends Enum
{
    /**
    * The Enum SecurityBaselineComplianceState
    */
    const UNKNOWN = "unknown";
    const SECURE = "secure";
    const NOT_APPLICABLE = "notApplicable";
    const NOT_SECURE = "notSecure";
    const ERROR = "error";
    const CONFLICT = "conflict";
}