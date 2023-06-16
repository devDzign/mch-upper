<?php
namespace MCH\UpperCaseBundle\Service;
class UpperWorld implements MchUpperInterface
{
    public function upper(string $text): string
    {
        return strtoupper($text);
    }
}