<html>
<head>
<title>payment</title>
</head>
<body>
<?
$strTo = $_POST["txtTo"];
$strSubject = $_POST["txtSubject"];
$strid = $_POST["txtid"];
$strphone = $_POST["txtphone"];
$strdate = $_POST["txtdate"];
$strtotal = $_POST["txttotal"];
$strHeader = "Content-type: text/html; charset=windows-874\n"; // or UTF-8 //
$strHeader .= "From: ".$_POST["txtFormName"]."<".$_POST["txtFormEmail"].">\nReply-To: ".$_POST["txtFormEmail"]."";
$strMessage = nl2br($_POST["txtDescription"]);
$flgSend = @mail($strTo,$strSubject,$strid,$strphone,$strdate,$strtotal,$strMessage,$strHeader); // @ = No Show Error //
if($flgSend)
{
echo "ทางเราได้รับการแจ้งยืนยันโอนเรียบร้อยแล้ว จะทำการส่งสินค้าให้ท่านภายใน 48 ชั่วโมง";
}
else
{
echo "เกิดเหตุขัดข้อง ไม่สามารถแจ้งยืนยันการโอนเงินได้ กรุณาลองใหม่อีกครั้ง";
}
?>
</body>
</html>
