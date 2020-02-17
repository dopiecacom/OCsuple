<?php
// Heading
$_['heading_title']					 = 'First Data EMEA Web Service API';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'Rozszerzenia';
$_['text_success']					 = 'Sukces: Zmiany zostały zapisane!';
$_['text_edit']                      = 'Edycja płatności First Data EMEA Web Service API';
$_['text_card_type']				= 'Typ karty';
$_['text_enabled']					= 'Włączony';
$_['text_merchant_id']				= 'ID sklepu';
$_['text_subaccount']				= 'Subkonto';
$_['text_user_id']					= 'ID użytkownika';
$_['text_capture_ok']				= 'Przechwytywanie udane';
$_['text_capture_ok_order']			= 'Przechwytywanie udane, status zamówienia zmieniony na udane - rozliczone';
$_['text_refund_ok']				= 'Zwrot udany';
$_['text_refund_ok_order']			= 'Zwrot udany, status zamówienia zmieniony na zwrócono pieniądze';
$_['text_void_ok']					= 'Unieważnienie udane, status zamówienia zmieniony na unieważnione';
$_['text_settle_auto']				= 'Sprzedaż';
$_['text_settle_delayed']			= 'Wstępna autoryzacja';
$_['text_mastercard']				= 'Mastercard';
$_['text_visa']						= 'Visa';
$_['text_diners']					= 'Diners';
$_['text_amex']						= 'American Express';
$_['text_maestro']					= 'Maestro';
$_['text_payment_info']				= 'Informacje o płatności';
$_['text_capture_status']			= 'Płatność przechwycona';
$_['text_void_status']				= 'Płatność unieważniona';
$_['text_refund_status']			= 'Zwrócono pieniądze';
$_['text_order_ref']				= 'Numer ref zamówienia';
$_['text_order_total']				= 'Razem autoryzowanych';
$_['text_total_captured']			= 'Razem przechwyconych';
$_['text_transactions']				= 'Transakcje';
$_['text_column_amount']			= 'Ilość';
$_['text_column_type']				= 'Typ';
$_['text_column_date_added']		= 'Data dodania';
$_['text_confirm_void']				= 'Czy na pewno chcesz unieważnić płatność?';
$_['text_confirm_capture']			= 'Czy na pewno chcesz przechwycić płatność?';
$_['text_confirm_refund']			= 'Czy na pewno chcesz zwrócić płatność?';

// Entry
$_['entry_certificate_path']		= 'Ścieżka certyfikatu';
$_['entry_certificate_key_path']	= 'Ścieżka klucza prywatnego';
$_['entry_certificate_key_pw']		= 'Hasło klucza prywatnego';
$_['entry_certificate_ca_path']		= 'Ścieżka CA';
$_['entry_merchant_id']				= 'ID sklepu';
$_['entry_user_id']					= 'ID użytkownika';
$_['entry_password']				= 'Hasło';
$_['entry_total']					= 'Suma';
$_['entry_sort_order']				= 'Kolejność wyświetlania';
$_['entry_geo_zone']				= 'Strefa geograficzna';
$_['entry_status']					= 'Status';
$_['entry_debug']					= 'Logowanie debugowania';
$_['entry_auto_settle']				= 'Rodzaj rozliczenia';
$_['entry_status_success_settled']	= 'Sukces - rozliczone';
$_['entry_status_success_unsettled'] = 'Sukces - nie rozliczone';
$_['entry_status_decline']			= 'Odrzucono';
$_['entry_status_void']				= 'Unieważniono';
$_['entry_status_refund']			= 'Zwrócono pieniądze';
$_['entry_enable_card_store']		= 'Włącz przechowywanie tokenów kart';
$_['entry_cards_accepted']			= 'Akceptowane rodzaje kart';

// Help
$_['help_total']					= 'Kwota którą musi osiągnąć zamówienie aby ta metoda płatności była aktywna.';
$_['help_certificate']				= 'Certyfikaty i klucze prywatne powinny być przechowywane poza publicznymi katalogami';
$_['help_card_select']				= 'Zażądaj od użytkowników wybrania karty zanim zostanie oni przekierowani';
$_['help_notification']				= 'Musisz podać ten URL do First Data aby otrzymywać powiadomienia o płatnościach';
$_['help_debug']					= 'Włączenie debugowania spowoduje zapis wrażliwych danych do pliku dziennika. Powinieneś to wyłączyć chyba że zostaniesz poinstruowany inaczej';
$_['help_settle']					= 'Jeśli używasz wstępnej autoryzacji musisz dokonać końcowej autoryzacji w ciągu 3-5 dni, w przeciwnym razie transakcja zostanie usunięta';

// Tab
$_['tab_account']					= 'Info o API';
$_['tab_order_status']				= 'Status zamówienia';
$_['tab_payment']					= 'Ustawienia płatności';

// Button
$_['button_capture']				= 'Przechwyć';
$_['button_refund']					= 'Zwróć pieniądze';
$_['button_void']					= 'Unieważnij';

// Error
$_['error_merchant_id']				= 'ID sklepu jest wymagane';
$_['error_user_id']					= 'ID użytkownika jest wymagane';
$_['error_password']				= 'Hasło jest wymagane';
$_['error_certificate']				= 'Ścieżka certyfikatu jest wymagana';
$_['error_key']						= 'Klucz certyfikatu jest wymagany';
$_['error_key_pw']					= 'Hasło klucza certyfikatu jest wymagane';
$_['error_ca']						= 'Ścieżka CA jest wymagana';