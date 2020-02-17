<?php
// Heading
$_['heading_title']				= 'eWAY Payment';

// Text
$_['text_extension']			= 'Rozszerzenia';
$_['text_success']					= 'Sukces: Zmiany zostały zapisane!';
$_['text_edit']						= 'Edycja eWAY';
$_['text_eway']						= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']			= 'Autoryzacja';
$_['text_sale']						= 'Sprzedaż';
$_['text_transparent']				= 'Niewidoczne przekierowanie (formularz płatności na witrynie)';
$_['text_iframe']					= 'IFrame (formularz płatności w oknie)';

// Entry
$_['entry_paymode']					= 'Tryb płatności';
$_['entry_test']					= 'Tryb testowy';
$_['entry_order_status']			= 'Status zamówienia';
$_['entry_order_status_refund']		= 'Status zrefundowanego zamówienia';
$_['entry_order_status_auth']		= 'Status autoryzowanego zamówienia';
$_['entry_order_status_fraud']		= 'Status podejrzanego zamówienia';
$_['entry_status']					= 'Status';
$_['entry_username']				= 'Klucz API eWAY';
$_['entry_password']				= 'Hasło eWAY';
$_['entry_payment_type']			= 'Typ płatności';
$_['entry_geo_zone']				= 'Strefa geograficzna';
$_['entry_sort_order']				= 'Kolejność wyświetlania';
$_['entry_transaction_method']		= 'Metoda transakcji';

// Error
$_['error_permission']      = 'Uwaga: Nie masz uprawnień do tego działu!';
$_['error_username']				= 'Klucz API eWAY jest wymagany!';
$_['error_password']				= 'Hasło eWAY jest wymagane!';
$_['error_payment_type']			= 'Wymagany jest przynajmniej jeden typ płatności!';

// Help hints
$_['help_testmode']					= 'Ustaw na Tak aby używać Sandbox eWAY.';
$_['help_username']					= 'Twój klucz API eWAY z Twojego konta MYeWAY.';
$_['help_password']					= 'Twoje hasło eWAY z Twojego konta MYeWAY.';
$_['help_transaction_method']		= 'Autoryzacja jest dostępna tylko dla australijskich banków';

// Order page - payment tab
$_['text_payment_info']				= 'Dane płatności';
$_['text_order_total']				= 'Razem autoryzowanych';
$_['text_transactions']				= 'Transakcje';
$_['text_column_transactionid']		= 'ID transakcji eWAY';
$_['text_column_amount']			= 'Kwota';
$_['text_column_type']				= 'Typ';
$_['text_column_created']			= 'Utworzono';
$_['text_total_captured']			= 'Razem przechwyconych';
$_['text_capture_status']			= 'Płatność przechwycona';
$_['text_void_status']				= 'Płatność unieważniona';
$_['text_refund_status']			= 'Płatność zwrócona';
$_['text_total_refunded']			= 'Razem zwróconych';
$_['text_refund_success']			= 'Zwrot udany!';
$_['text_capture_success']			= 'Przechwycenie udane!';
$_['text_refund_failed']			= 'Zwrot nieudany: ';
$_['text_capture_failed']			= 'Przechwycenie nieudane: ';
$_['text_unknown_failure']			= 'Nieprawidłowe zamówienie lub kwota';

$_['text_confirm_capture']			= 'Czy na pewno chcesz przechwycić płatność?';
$_['text_confirm_release']			= 'Czy na pewno chcesz uwolnić płatność?';
$_['text_confirm_refund']			= 'Czy na pewno chcesz zwrócić płatność?';

$_['text_empty_refund']				= 'Wprowadź kwotę do zwrócenia';
$_['text_empty_capture']			= 'Wprowadź kwotę do przechwycenia';

$_['btn_refund']					= 'Zwróć';
$_['btn_capture']					= 'Przechwyć';

// Validation Error codes
$_['text_card_message_V6000']		= 'Nieokreślony błąd walidacji';
$_['text_card_message_V6001'] 		= 'Nieprawidłowy IP klienta';
$_['text_card_message_V6002'] 		= 'Nieprawidłowe DeviceID';
$_['text_card_message_V6011'] 		= 'Nieprawidłowa kwota';
$_['text_card_message_V6012'] 		= 'Nieprawidłowy opis faktury';
$_['text_card_message_V6013'] 		= 'Nieprawidłowy numer faktury';
$_['text_card_message_V6014'] 		= 'Nieprawidłowa referencja faktury';
$_['text_card_message_V6015'] 		= 'Nieprawidłowy kod waluty';
$_['text_card_message_V6016'] 		= 'Płatność jest wymagana';
$_['text_card_message_V6017'] 		= 'Kod waluty płatności jest wymagany';
$_['text_card_message_V6018'] 		= 'Nieznany kod waluty płatności';
$_['text_card_message_V6021'] 		= 'Nazwisko posiadacza karty jest wymagane';
$_['text_card_message_V6022'] 		= 'Numer karty jest wymagany';
$_['text_card_message_V6023'] 		= 'CVN jest wymagany';
$_['text_card_message_V6031'] 		= 'Nieprawidłowy numer karty';
$_['text_card_message_V6032'] 		= 'Nieprawidłowy CVN';
$_['text_card_message_V6033'] 		= 'Nieprawidłowa data ważności';
$_['text_card_message_V6034'] 		= 'Nieprawidłowy numer wydania';
$_['text_card_message_V6035'] 		= 'Nieprawidłowa data wydania';
$_['text_card_message_V6036'] 		= 'Nieprawidłowy miesiąc';
$_['text_card_message_V6037'] 		= 'Nieprawidłowy rok';
$_['text_card_message_V6040'] 		= 'Nieprawidłowy token';
$_['text_card_message_V6041'] 		= 'Klient jest wymagany';
$_['text_card_message_V6042'] 		= 'Imię klienta jest wymagane';
$_['text_card_message_V6043'] 		= 'Nazwisko klienta jest wymagane';
$_['text_card_message_V6044'] 		= 'Kod kraju klienta jest wymagany';
$_['text_card_message_V6045'] 		= 'Tytuł klienta jest wymagany';
$_['text_card_message_V6046'] 		= 'Token jest wymagany';
$_['text_card_message_V6047'] 		= 'URL przekierowania jest wymagane';
$_['text_card_message_V6051'] 		= 'Nieprawidłowe imię';
$_['text_card_message_V6052'] 		= 'Nieprawidłowe nazwisko';
$_['text_card_message_V6053'] 		= 'Nieprawidłowy kod kraju';
$_['text_card_message_V6054'] 		= 'Nieprawidłowy email';
$_['text_card_message_V6055'] 		= 'Nieprawidłowy numer telefonu';
$_['text_card_message_V6056'] 		= 'Nieprawidłowy numer komórkowy';
$_['text_card_message_V6057'] 		= 'Nieprawidłowy faks';
$_['text_card_message_V6058'] 		= 'Nieprawidłowy tytuł';
$_['text_card_message_V6059'] 		= 'Nieprawidłowy URL przekierowania';
$_['text_card_message_V6060'] 		= 'Nieprawidłowy URL przekierowania';
$_['text_card_message_V6061'] 		= 'Nieprawidłowa referencja';
$_['text_card_message_V6062'] 		= 'Nieprawidłowy nazwa firmy';
$_['text_card_message_V6063'] 		= 'Nieprawidłowy opis zawodu';
$_['text_card_message_V6064'] 		= 'Nieprawidłowa ulica i nr domu';
$_['text_card_message_V6065'] 		= 'Nieprawidłowy nr lokalu';
$_['text_card_message_V6066'] 		= 'Nieprawidłowa miejscowość';
$_['text_card_message_V6067'] 		= 'Nieprawidłowy region';
$_['text_card_message_V6068'] 		= 'Nieprawidłowy kod pocztowy';
$_['text_card_message_V6069'] 		= 'Nieprawidłowy email';
$_['text_card_message_V6070'] 		= 'Nieprawidłowy numer telefonu';
$_['text_card_message_V6071'] 		= 'Nieprawidłowy numer komórkowy';
$_['text_card_message_V6072'] 		= 'Nieprawidłowa treść uwag';
$_['text_card_message_V6073'] 		= 'Nieprawidłowy faks';
$_['text_card_message_V6074'] 		= 'Nieprawidłowy url';
$_['text_card_message_V6075'] 		= 'Nieprawidłowe imię w adresie wysyłki';
$_['text_card_message_V6076'] 		= 'Nieprawidłowe nazwisko w adresie wysyłki';
$_['text_card_message_V6077'] 		= 'Nieprawidłowa ulica i nr domu w adresie wysyłki';
$_['text_card_message_V6078'] 		= 'Nieprawidłowy nr lokalu w adresie wysyłki';
$_['text_card_message_V6079'] 		= 'Nieprawidłowa miejscowość w adresie wysyłki';
$_['text_card_message_V6080'] 		= 'Nieprawidłowy region w adresie wysyłki';
$_['text_card_message_V6081'] 		= 'Nieprawidłowy kod pocztowy w adresie wysyłki';
$_['text_card_message_V6082'] 		= 'Nieprawidłowy email w adresie wysyłki';
$_['text_card_message_V6083'] 		= 'Nieprawidłowy numer telefonu w adresie wysyłki';
$_['text_card_message_V6084'] 		= 'Nieprawidłowy kraj w adresie wysyłki';
$_['text_card_message_V6091'] 		= 'Nieznany kod kraju';
$_['text_card_message_V6100'] 		= 'Nieprawidłowa nazwa karty';
$_['text_card_message_V6101'] 		= 'Nieprawidłowy miesiąc ważności karty';
$_['text_card_message_V6102'] 		= 'Nieprawidłowy rok ważności karty';
$_['text_card_message_V6103'] 		= 'Nieprawidłowy miesiąc wydania karty';
$_['text_card_message_V6104'] 		= 'Nieprawidłowy rok wydania karty';
$_['text_card_message_V6105'] 		= 'Nieprawidłowy numer wydania karty';
$_['text_card_message_V6106'] 		= 'Nieprawidłowy CVN karty';
$_['text_card_message_V6107'] 		= 'Nieprawidłowy AccessCode';
$_['text_card_message_V6108'] 		= 'Nieprawidłowy CustomerHostAddress';
$_['text_card_message_V6109'] 		= 'Nieprawidłowy UserAgent';
$_['text_card_message_V6110'] 		= 'Nieprawidłowy numer karty';
$_['text_card_message_V6111'] 		= 'Nieautoryzowany dostęp do API, konto bez certyfikatu PCI';
$_['text_card_message_V6112'] 		= 'Zbędne dane karty inne niż rokimiesiąc ważności';
$_['text_card_message_V6113'] 		= 'Nieprawidłowa transakcja dla zwrotu';
$_['text_card_message_V6114'] 		= 'Błąd walidacji bramki';
$_['text_card_message_V6115'] 		= 'Nieprawidłowy DirectRefundRequest, ID transakcja';
$_['text_card_message_V6116'] 		= 'Nieprawidłowe dane karty na oryginalnym TransactionID';
$_['text_card_message_V6124'] 		= 'Nieprawidłowe elementy liniowe. Elementy liniowe zostały podane ale sumy nie są zgodne z polem TotalAmount';
$_['text_card_message_V6125'] 		= 'Wybrany typ płatności nie jest włączony';
$_['text_card_message_V6126'] 		= 'Nieprawidłowy zaszyfrowany numer karty, odszyfrowanie nieudane';
$_['text_card_message_V6127'] 		= 'Nieprawidłowy zaszyfrowany cvn, odszyfrowanie nieudane';
$_['text_card_message_V6128'] 		= 'Nieprawidłowa metoda dla typu płatności';
$_['text_card_message_V6129'] 		= 'Transakcja nie została autoryzowana do przechwycenia/anulacji';
$_['text_card_message_V6130'] 		= 'Ogólny błąd danych klienta';
$_['text_card_message_V6131'] 		= 'Ogólny błąd danych wysyłki';
$_['text_card_message_V6132'] 		= 'Transakcja została już zakończona lub unieważniona, operacja niedozwolona';
$_['text_card_message_V6133'] 		= 'Zamówienie niedostępne dla typu płatności';
$_['text_card_message_V6134'] 		= 'Nieprawidłowe ID autoryzacji transakcji dla przechwycenia/unieważnienia';
$_['text_card_message_V6135'] 		= 'Błąd przetwarzania zwrotu PayPal';
$_['text_card_message_V6140'] 		= 'Konto sprzedawcy jest zawieszone';
$_['text_card_message_V6141'] 		= 'Nieprawidłowe dane konta PayPal lub sygnatura API';
$_['text_card_message_V6142'] 		= 'Autoryzacja niedostępna dla banku/filii';
$_['text_card_message_V6150'] 		= 'Nieprawidłowa kwota zwrotu';
$_['text_card_message_V6151'] 		= 'Kwota zwrotu większa niż oryginalna transakcja';
$_['text_card_message_D4406'] 		= 'Nieznany błąd';
$_['text_card_message_S5010'] 		= 'Nieznany błąd';