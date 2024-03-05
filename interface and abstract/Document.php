<?php // 2 types of document; editorial, syndicated document common is document no, different is parse of content
Abstract class Document implements DocumentInterface, StringInterface
{
    private $documentNumber;
    public abstract function getContent();
    public abstract function setContent();

    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;
    }

    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    public function __toSting($string)
    {
        return strtolower($string);
    }
}