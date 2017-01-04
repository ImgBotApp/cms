<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\errors;

use yii\base\Exception;

/**
 * Class InvalidPluginException
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license Craft License Agreement
 * @see       http://craftcms.com
 * @package   craft.app.exceptions
 * @since     3.0
 */
class InvalidPluginException extends Exception
{
    /**
     * @var string The invalid plugin handle
     */
    public $handle;

    /**
     * Constructor.
     *
     * @param string  $handle  The plugin handle that doesn’t exist or doesn’t extend/implement [[craft\base\PluginInterface]]
     * @param string  $message The error message
     * @param integer $code    The error code
     */
    public function __construct($handle, $message = null, $code = 0)
    {
        $this->handle = $handle;

        if ($message === null) {
            $message = "No plugin exists with the handle \"{$handle}\".";
        }

        parent::__construct($message, $code);
    }
}