<?php
	require_once( "tfpdf/tfpdf.php" );

	$columnLabels = array( "Q1");
	$rowLabels = array( "SupaWidget" );
	$data = array(
		array( 9940),
	);
	$pdf = new tFPDF( 'P', 'mm', 'A4' );
	$pdf->AddPage();

	$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
	$pdf->AddFont('DejaVu','B','DejaVuSansCondensed-Bold.ttf',true);

	$pdf->SetFillColor(239,238,245);
	$pdf->Rect(0, 0, 210, 30, 'F' );
	$pdf->Image('logo.png',10,10,55);
	$pdf->SetFont( 'DejaVu', 'B', 12 );
	$pdf->Text( 80, 11, "Adresse:" );
	$pdf->SetFont( 'DejaVu', '', 10 );
	$pdf->Text( 80, 17, "Habsburger Straße 125," );
	$pdf->Text( 80, 23, "D79104 Freiburg im Breisgau" );

	$pdf->Text( 145, 11, "www.drk-company.de" );
	$pdf->Text( 145, 17, "info@drk-company.de" );
	$pdf->Text( 145, 23, "+49 (0) 800 409 09 08" );
	$pdf->Image('globe.png',138,8,4);
	$pdf->Image('mail.png',138,14,4);
	$pdf->Image('phone.png',138,19,4);

	$pdf->Ln( 30 );
	//таблица 1
	$pdf->SetFont( 'DejaVu', 'B', 18 );
	$pdf->Write( 0, "Auftragsformular zur Durchführung einer Analyse" );
	$pdf->Ln( 14 );
	$pdf->SetFont( 'DejaVu', 'B', 14 );
	$pdf->Write( 0, "Serviceart / Modus" );
	$pdf->Ln( 5 );$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Cell( 120, 10, "   Modus*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 20 );

	//таблица 2
	$pdf->SetFont( 'DejaVu', 'B', 14 );
	$pdf->Write( 0, "Kundenreferenz" );
	$pdf->Ln( 5 );$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Cell( 120, 10, "   Kundenreferenz*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Rechtsformen*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   UST-ID*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Firmenname*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 20 );

	//таблица 3
	$pdf->SetFont( 'DejaVu', 'B', 14 );
	$pdf->Write( 0, "Auftraggeber" );
	$pdf->Ln( 5 );$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Cell( 120, 10, "   Vorname*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Name*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Position in der Firma*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Strasse, Hausnummer*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Postleitzahl, Ort*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Land, Bundesland*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Telefon, Mobil*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   E-Mail*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Rabattierung*", 1, 0, 'L');
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 20 );

	//таблица 4
	$pdf->SetFont( 'DejaVu', 'B', 14 );
	$pdf->Write( 0, "Angaben zum Speichermedium" );
	$pdf->Ln( 5 );
	$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Write( 4, "Machen Sie im folgenden Angaben zu allen Speichermedien, die Sie an uns versenden möchten. Die Angabe aller Seriennummern ist unbedingt erforderlich! Die Seriennummer beginnt fast immer mit S/N. Fragen Sie uns, sollten Sie die Serienummer nicht finden. Beschriften Die das Speichermedium und das Zubehör entsprechend." );
	$pdf->Ln( 8 );
	$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Cell( 120, 10, "   Datenträger Typ*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Hersteller*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Model*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Kapazität des Datenträgers, GByte*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Betriebssystem*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Dateisystem*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Erkennt das Betriebssysten den Datenträger?*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Ursachen*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Symptome / Schadensverlauf*", 1, 0, 'L');
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Eigene Maßnahmen*", 1, 0, 'L');
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Was sind die wichtigsten Daten?*", 1, 0, 'L');
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 16 );

	$pdf->SetFont( 'DejaVu', '', 10 );
	$pdf->Write( 6, "Bitte legen Sie ein eigenen Ersatz-Speichermedium falls möglich bei." );
	$pdf->Ln( 16 );

	//таблица 5
	$pdf->SetFont( 'DejaVu', 'B', 14 );
	$pdf->Write( 0, "Logistik" );
	$pdf->Ln( 5 );$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Cell( 120, 10, "   Art von Logistik*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 10 );
	$pdf->Cell( 120, 10, "   Was wird mitgeliefert?*", 1, 0, 'L' );
	$pdf->Cell( 0, 10, "", 1, 0, 'L' );
	$pdf->Ln( 14);

	$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Write( 4, "Sehr geehrte Kundin, sehr geehrter Kunde, mit der Unterzeichnung und Zusendung dieses Formulars gehen Sie kein Risiko ein. Können wir Ihnen nicht helfen, erhalten Sie Ihr Speichermedium kostenfrei zurück! Um Ihren Auftrag kostengünstig bearbeiten zu können, ist es erforderlich dass alle Fragen beantwortet werden. Die Antworten beeinflussen den Ablauf einer Datenrettung. Ihre Antworten helfen uns, die richtige Arbeitsumgebung zu schaffen." );
	$pdf->Ln( 10 );

	$pdf->SetFont( 'DejaVu', 'B', 9 );
	$pdf->Write( 4, "Vielen Dank – Datenrettungsklinik" );
	$pdf->Ln( 10 );

	$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Write( 4, "«Ich habe die Informationen zum Thema Datenrettung und die Preisinformationen gelesen und mich über den Ablauf der Datenrettung informiert. Ich weiß, dass ich kein Risiko eingehe und erst bezahle, wenn meine Daten erfolgreich ausgelesen werden konnten. Mir ist bewusst, dass die Datenrettung einer defekten Festplatte aufwändig ist und oft Ersatzteile und sehr teures Equipment benötigt werden, um Daten zu retten. Selbstverständlich bin ich an eine Wiederherstellung meiner Daten interessiert. Besonders wichtige Dateien habe ich benannt. Alle Angaben, auch schriftliche oder mündliche Vereinbarungen, habe ich in das Formular eingetragen. Besonders wichtige Dateien und Verzeichnisse habe ich angegeben. Den Datenspeicher werde ich ausschließlich als < VERSICHERTES PAKET> versenden oder vorbei bringen.»" );
	$pdf->Ln( 10 );

	$pdf->SetFont( 'DejaVu', 'B', 9 );
	$pdf->Write( 4, "Einwilligungserklärung zur Erhebung / Übermittlung von personenbezogenen Daten gemäß der Europäischen Datenschutz - Grundverordnung (nachfolgend DSGVO genannt). " );
	$pdf->Ln( 5 );

	$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Write( 4, "Ich erkläre mich einverstanden, dass die Datenrettungsklinik meine personenbezogenen Daten erhoben und verarbeitet werden. Mir wurde ein Informationsblatt zum Datenschutz ausgehändigt, zu welchem ich auch Rückfragen stellen konnte.  " );
	$pdf->Ln( 5 );

	$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Write( 4, "   - über den Umfang und die Art meiner Daten" );
	$pdf->Ln( 4 );

	$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Write( 4, "   - über die Rechtsgrundlagen der Verarbeitung" );
	$pdf->Ln( 4 );

	$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Write( 4, "   - über die Möglichkeiten, Widerspruch einzulegen und über die Folgen dessen" );
	$pdf->Ln( 5 );

	$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Write( 4, "Es ist mir bekannt, dass ich diese Erklärung jederzeit ganz oder teilweise für die Zukunft widerrufen kann. Ich bin über die Folgen eines Widerrufs aufgeklärt worden." );
	$pdf->Ln( 10 );

	$pdf->SetFont( 'DejaVu', '', 9 );
	$pdf->Write( 4, "Auftrag zur Datenrettung - Datum:_______________                                                                               Unterschrift:_______________" );
	$pdf->Ln( 4 );

	$to = "zaharov4625@gmail.com"; 
	$from = "testmails124634566@gmail.com"; 
	$subject = "send email with pdf attachment"; 
	$message = "<p>Please see the attachment.</p>";

	// a random hash will be necessary to send mixed content
	$separator = md5(time());

	// carriage return type (we use a PHP end of line constant)
	$eol = PHP_EOL;

	// attachment name
	$filename = "test.pdf";

	// encode data (puts attachment in proper format)
	$pdfdoc = $pdf->Output("", "S");
	$attachment = chunk_split(base64_encode($pdfdoc));

	// main header
	$headers  = "From: ".$from.$eol;
	$headers .= "MIME-Version: 1.0".$eol; 
	$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

	// no more headers after this, we start the body! //

	$body = "--".$separator.$eol;
	$body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
	$body .= "This is a MIME encoded message.".$eol;

	// message
	$body .= "--".$separator.$eol;
	$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
	$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
	$body .= $message.$eol;

	// attachment
	$body .= "--".$separator.$eol;
	$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
	$body .= "Content-Transfer-Encoding: base64".$eol;
	$body .= "Content-Disposition: attachment".$eol.$eol;
	$body .= $attachment.$eol;
	$body .= "--".$separator."--";

	// send message
	mail($to, $subject, $body, $headers);
	echo 'wefwef';
?>
