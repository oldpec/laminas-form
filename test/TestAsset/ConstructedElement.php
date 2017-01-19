<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Form\TestAsset;

use Zend\Form\Element;

class ConstructedElement extends Element
{
    public $constructedKey = null;

    public function __construct($name = null, $options = array())
    {
        if (isset($options['constructedKey'])) {
            $this->constructedKey = $options['constructedKey'];
        }
        parent::__construct($name, $options);
    }
}
