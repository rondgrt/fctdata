<?php
/**
 * Generations PDFs
 *
 * @author Saulo Lima <saulo@startupjob.com.br>
 * @version 1.0
 * @copyright StartupJob LTDA.
 * @link http://www.startupjob.com.br
 * @link http://www.fpdf.org/
 *
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */
require_once __DIR__.'/src/fpdf.php';

class Pdf extends FPDF
{
function Header()
{
    global $title;

	$this->SetMargins(0,0,0);
	$this->SetAutoPageBreak(false);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Calculate width of title and position
    //$w = $this->GetStringWidth($title)+6;
    //$this->SetX((210-$w)/2);
	//$this->SetX(1);
    // Colors of frame, background and text
    //$this->SetDrawColor(0,80,180);
    //$this->SetFillColor(230,230,0);
    //$this->SetTextColor(220,50,50);
    // Thickness of frame (1 mm)
    //$this->SetLineWidth(1);
    // Title
    //$this->Cell($w,9,$title,1,1,'C',true);
    // Line break
    //$this->Ln(10);
}

function Footer()
{
    // Position at 1.5 cm from bottom
    //$this->SetY(-15);
    // Arial italic 8
    //$this->SetFont('Arial','I',8);
    // Text color in gray
    //$this->SetTextColor(128);
    // Page number
    //$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

function ChapterTitle($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',12);
    // Background color
    $this->SetFillColor(200,220,255);
	
	$this->SetX(0);
	$this->SetY(0);
	
    // Title
    $this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
    // Line break
    $this->Ln(4);
}

function ChapterBody($text)
{
    // Read text file
    //$txt = file_get_contents($file);
    // Times 12
    $this->SetFont('Times','',12);

	$this->SetX(0);
	
    // Output justified text
    $this->MultiCell(0,5,$text);
    // Line break
    //$this->Ln();
    // Mention in italics
    //$this->SetFont('','I');
	$y = $this->GetY();
	
    $this->Cell(0,5,"y= $y");
}

function PrintChapter($num, $title, $text)
{
    $this->AddPage();
    $this->ChapterTitle($num,$title);
    $this->ChapterBody($text);
}

function GetHeight()
{
  return $this->GetY();
}
	
}

class Simple extends FPDF
{

function Header()
{
    global $title;

    $this->SetMargins(0,0,0);
    $this->SetAutoPageBreak(false);
}

function Footer()
{
    //
}

function ChapterTitle($num, $label)
{
    // Arial 12
    $this->SetFont('Helvetica','B',12);
    // Background color
    $this->SetFillColor(255,255,255);
	
	$this->SetX(0);
	$this->SetY(0);
	
    // Title
    $this->Cell(0,6,"$label",0,1,'L',true);
    // Line break
    $this->Ln(2);
}

function ChapterBody($text)
{
    // Read text file
    //$txt = file_get_contents($file);
    // Times 12
    $this->SetFont('Helvetica','',11);

	$this->SetX(0);
	
    // Output justified text
    $this->MultiCell(0,5,$text);
    // Line break
    //$this->Ln();
    // Mention in italics
    //$this->SetFont('','I');
    //$y = $this->GetY();
	
    //$this->Cell(0,5,"y= $y");
}

function PrintChapter($num, $title, $text)
{
    $this->AddPage();
    $this->ChapterTitle($num,$title);
    $this->ChapterBody($text);
}

function GetHeight()
{
  return $this->GetY();
}
	
}