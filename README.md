# PDF Merge for PHP

PDF Merge library for PHP.

Install in composer:

```json
"ninosimeon/pdf-merge": "1.0.0"
```

## Highlights

Combina documentos PDF. Basado en la librería FPDI 1.6.1, FPDF.

## Usage

```php
// Autoload classses...

// para invocar debes hacer lo siguiente
use NinoSimeon\PDFMerge\PDFMerger;
class xxx
{
	public function yyyy() {
		$pdf = new \NinoSimeon\PDFMerge\PDFMerger;
	}
}


// agrega todas las páginas que tu quieras
$pdf->addPDF('path/to/source/file.pdf', 'all', 'vertical')
  ->addPDF('path/to/source/file1.pdf', 'all')
  ->addPDF('path/to/source/file2.pdf', 'all', 'horizontal');

// al final puedes generar el archivo con este comando
$pdf->merge('file', 'path/to/export/dir/file.pdf');
```