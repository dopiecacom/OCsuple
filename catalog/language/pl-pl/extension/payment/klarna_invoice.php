<?php
// Text
$_['text_title']				= 'Faktura Klarna - Płatna w ciągu 14 dni';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Faktura Klarna wymaga dodatkowych informacji aby przetworzyć Twoje zamówienie.';
$_['text_male']					= 'Mężczyzna';
$_['text_female']				= 'Kobieta';
$_['text_year']					= 'Rok';
$_['text_month']				= 'Miesiąc';
$_['text_day']					= 'Dzień';
$_['text_comment']				= 'ID faktury Klarna: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Płeć';
$_['entry_pno']					= 'Numer SSN';
$_['entry_dob']					= 'Data urodzenia';
$_['entry_phone_no']			= 'Numer telefonu';
$_['entry_street']				= 'Ulica';
$_['entry_house_no']			= 'Numer domu';
$_['entry_house_ext']			= 'Rozszerzenie numeru domu';
$_['entry_company']				= 'REGON';

// Help
$_['help_pno']					= 'Wprowadź swój numer ubezpieczenia.';
$_['help_phone_no']				= 'Podaj swój numer telefonu.';
$_['help_street']				= 'Miej na uwadze że wysyłka może być dostarczona tylko na zarejestrowany adres przy płatności za pomocą Klarna.';
$_['help_house_no']				= 'Podaj swój numer domu.';
$_['help_house_ext']			= 'Podaj rozszerzenie numeru domu. Np. A, B, C, Red, Blue itd.';
$_['help_company']				= 'Podaj numer REGON';

// Error
$_['error_deu_terms']			= 'Musisz zaakceptować politykę prywatności Klarna (Datenschutz)';
$_['error_address_match']		= 'Adres rozliczeniowy i adres dostawy muszą się zgadzać jeśli chcesz skorzystać z płatności Klarna';
$_['error_network']				= 'Wystąpił błąd podczas połączenia z Klarna. Spróbuj ponownie później.';