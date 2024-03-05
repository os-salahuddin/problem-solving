<?php // 2 types of document; editorial, syndicated document common is document no, different is parse of content
Interface DocumentInterface
{
    public function setDocumentNumber($documentNumber);
    public function getDocumentNumber();
}