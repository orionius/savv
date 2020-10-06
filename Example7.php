<?php
 /*
     Example7 : A filled cubic curve graph
 */

 // Standard inclusions   
 include("pChart/pData.class");
 include("pChart/pChart.class");
include 'conn.php';
include 'function.php';

$row=sqlread("SELECT * FROM account_sub");




$i=1;

$strSQL="SELECT * FROM account_sub where id_ac_sub > '2600'";
 $rs = mysql_query($strSQL);


    if (!empty ($rs) ) {
    while($row = mysql_fetch_array($rs)) {

$price=$row['price'];

$price_sale=$row['price_sale'];

$a[]=$price_sale;
$b[]=$price;

$i++;
    }}




 // Dataset definition 
 $DataSet = new pData;
 $DataSet->AddPoint($a,"Serie1");
 $DataSet->AddPoint($b,"Serie2");
 $DataSet->AddAllSeries();
 $DataSet->SetAbsciseLabelSerie();
 $DataSet->SetSerieName("January","Serie1");
 $DataSet->SetSerieName("February","Serie2");

 // Initialise the graph
 $Test = new pChart(3700,2230);
 $Test->setFontProperties("Fonts/tahoma.ttf",8);
 $Test->setGraphArea(50,30,3700,2000);
 $Test->drawFilledRoundedRectangle(7,7,693,223,5,240,240,240);
 $Test->drawRoundedRectangle(5,5,695,225,5,230,230,230);
 $Test->drawGraphArea(255,255,255,TRUE);
 $Test->drawScale($DataSet->GetData(),$DataSet->GetDataDescription(),5,150,150,150,TRUE,0,2);
 $Test->drawGrid(4,TRUE,230,230,230,50);

 // Draw the 0 line
 $Test->setFontProperties("Fonts/tahoma.ttf",6);
 $Test->drawTreshold(0,143,55,72,TRUE,TRUE);

 // Draw the cubic curve graph
 $Test->drawFilledCubicCurve($DataSet->GetData(),$DataSet->GetDataDescription(),.1,50);

 // Finish the graph
 $Test->setFontProperties("Fonts/tahoma.ttf",8);
 $Test->drawLegend(600,30,$DataSet->GetDataDescription(),255,255,255);
 $Test->setFontProperties("Fonts/tahoma.ttf",10);
 $Test->drawTitle(50,22,"Example 7",50,50,50,585);
 $Test->Render("example7.png");
?>