<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('TCPDF-master/tcpdf.php');
	
//	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);  
//	
//	
//        
////        $this->SetFont('droidsansfallback', 'B', 13);
//	$txt = "您好！";
//	
//	$pdf->Write(20, $txt);
////        $pdf->Write(0,$str1,'', 0, 'L', true, 0, false, false, 0);
//	
//	$pdf->Output('minimal.pdf', 'I');
//实例化 

$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false); 

 

// 设置文档信息 

$pdf->SetCreator('Helloweba'); 

$pdf->SetAuthor('yueguangguang'); 

$pdf->SetTitle('Welcome to pdf.com!'); 

$pdf->SetSubject('TCPDF Tutorial'); 

$pdf->SetKeywords('TCPDF, PDF, PHP'); 

 

// 设置页眉和页脚信息 

$pdf->SetHeaderData('', 30, '测试', '报名表',  

      array(0,64,255), array(0,64,128)); 

$pdf->setFooterData(array(0,64,0), array(0,64,128)); 

 

// 设置页眉和页脚字体 

$pdf->setHeaderFont(Array('stsongstdlight', '', '10')); 

$pdf->setFooterFont(Array('helvetica', '', '8')); 

 

// 设置默认等宽字体 

$pdf->SetDefaultMonospacedFont('courier'); 

 

// 设置间距 

$pdf->SetMargins(15, 27, 15); 

$pdf->SetHeaderMargin(5); 

$pdf->SetFooterMargin(10); 

 

// 设置分页 

$pdf->SetAutoPageBreak(TRUE, 25); 

 

// set image scale factor 

$pdf->setImageScale(1.25); 

 

// set default font subsetting mode 

$pdf->setFontSubsetting(true); 

 

//设置字体 

$pdf->SetFont('stsongstdlight', '', 14); 

 

$pdf->AddPage(); 

$one=array("test1","test2","中文测试");//这里可以在数据库取数据

$html = <<<EOD

<table border="1">

  <tr>

    <th >one</th>

    <th>two</th>

    <th>三</th>

  </tr>

  <tr>

    <td>$one[0]</td>

    <td>$one[1]</td>

    <td>$one[2]</td>

  </tr>

</table>

EOD;

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

//$pdf->Write(0,$html,'', 0, 'L', true, 0, false, false, 0); 

//$pdf->Write(0,$str1,'', 0, 'L', true, 0, false, false, 0); 

 

//输出PDF

$pdf->Output('report.pdf', 'I'); 


