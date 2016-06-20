<?php namespace NinoSimeon\PDFMerge;

class PdfObject {
    
    public $path;
    
    // all / array of pages
    public $pages = 'all';
    
    // horizontal / vertical
    public $orientation;
    
    /**
     * Get portrait() code or landscape (L)
     * @return type
     */
    public function getOrientationCode() {
        return $this->orientation == 'horizontal' 
                || $this->orientation == 'landscape' ? 'L' : 'P';
    }
    
}
