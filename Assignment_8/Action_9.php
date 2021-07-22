
<?php
$title_1 = $_GET['title_1'];
$pub_1 = $_GET['pub_1'];
$title_2 = $_GET['title_2'];
$pub_2 = $_GET['pub_2'];
$xml = "<?xml version='1.0' encoding ='ISO-8859-1' ?>";
$xml = $xml."<BookStore>";
$xml = $xml."<Books>";
$xml = $xml."<PHP>";
$xml = $xml."<Title>";
$xml = $xml."$title_1";
$xml = $xml."</Title>";
$xml = $xml."<Publication>";
$xml = $xml."$pub_1";
$xml = $xml."</Publication>";
$xml = $xml."</PHP>";
$xml = $xml."<PHP>";
$xml = $xml."<Title>";
$xml = $xml."$title_2";
$xml = $xml."</Title>";
$xml = $xml."<Publication>";
$xml = $xml."$pub_2";
$xml = $xml."</Publication>";
$xml = $xml."</PHP>";
$xml = $xml."</Books>";
$xml = $xml."</BookStore>";
if($fp = fopen("9.xml","a+"))
{
if($wt = fwrite($fp,$xml))
{
header("location:9.xml");
}
else "file not created...";
}
else echo "file not open....";
?>