<?php
/**
 * Created by PhpStorm.
 * User: PhpStorm
 * Date: 2016-02-17
 * Time: 21:03
 */

namespace Mlib\Utils;

interface HierarchicalDataProviderInterface extends DataProviderInterface
{
    public function getCurrentPath();

    public function setCurrentPath($path);

    public function pushPath($relativePath);

    public function popPath();

    public function getPathDelimiter();

    public function setPathDelimiter($cascade_delimiter);
}
