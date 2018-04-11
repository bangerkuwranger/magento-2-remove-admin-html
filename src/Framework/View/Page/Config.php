<?php
/**
 * Copyright © 2018 Chad A. Carino. All rights reserved.
 * See LICENSE file for license details.
 */

namespace Bangerkuwranger\RemoveAdminHtml\Framework\View\Page

use Magento\Framework\App;
use Magento\Framework\View;

/**
 * An API for page configuration
 *
 * Has methods for managing properties specific to web pages:
 * - title
 * - related documents, linked static assets in particular
 * - meta info
 * - root element properties
 * - etc...
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.TooManyFields)
 *
 * @api
 */
class Config extends \Magento\Framework\View\Page\Config
{
   
    /**
     * Return empty string instead of miscellaneous scripts/styles
     *
     * @return string
     */
    public function getIncludes()
    {
        return '';
    }

}
