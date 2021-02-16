<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use setasign\Fpdi\Fpdi;

require_once APPPATH.'third_party/fpdf/fpdf.php';
require_once APPPATH.'third_party/fpdi/src/autoload.php';

class Pdf extends FPDI
{
    function __construct()
    {
        parent::__construct();
    }
}
