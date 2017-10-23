<?php
/**
 * Created by PhpStorm.
 * User: zhou
 * Date: 2017/10/20
 * Time: 9:52
 */
namespace Toolots\Hello\Model\Api\Data;
interface PostInterface
{
    public function getId();
    public function setId();
    public function getName();
    public function setName();
    public function getPostContent();
    public function setPostContent();
}