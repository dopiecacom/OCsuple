<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Ustawienia';
$_['tab_order_status']              = 'Status zamówienia';

// Text
$_['text_extension']                = 'Rozszerzenia';
$_['text_success']	   				= 'Sukces: Zmiany zostały zapisane!';
$_['text_edit']                     = 'Edycja CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Płatność';
$_['text_authorize']                = 'Autoryzacja';
$_['text_live']                     = 'Na żywo';
$_['text_test']                     = 'Testowy';
$_['text_no_cron_time']             = 'Cron nie został jeszcze uruchomiony';
$_['text_payment_info']             = 'Dane płatności';
$_['text_payment_method']           = 'Metoda płatności';
$_['text_card']                     = 'Karta';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Referencja';
$_['text_update']                   = 'Aktualizacja';
$_['text_order_total']              = 'Suma zamówienia';
$_['text_total_captured']           = 'Razem przechwyconych';
$_['text_capture_payment']          = 'Przechwyć płatność';
$_['text_refund_payment']           = 'Zwróć płatność';
$_['text_void']                     = 'Unieważnij';
$_['text_transactions']             = 'Transakcje';
$_['text_column_type']              = 'Typ';
$_['text_column_reference']         = 'Referencja';
$_['text_column_amount']            = 'Kwota';
$_['text_column_status']            = 'Status';
$_['text_column_date_modified']     = 'Data modyfikacji';
$_['text_column_date_added']        = 'Data dodania';
$_['text_column_update']            = 'Aktualizuj';
$_['text_column_void']              = 'Unieważnij';
$_['text_confirm_capture']          = 'Czy na pewno chcesz przechwycić płatność?';
$_['text_confirm_refund']           = 'Czy na pewno chcesz zwrócić płatność?';
$_['text_inquire_success']          = 'Zapytanie udane';
$_['text_capture_success']          = 'Żądanie przechwycenia udane';
$_['text_refund_success']           = 'Żądanie zwrotu udane';
$_['text_void_success']             = 'Żądanie unieważnienia udane';

// Entry
$_['entry_merchant_id']             = 'Id handlowca';
$_['entry_api_username']            = 'Login API';
$_['entry_api_password']            = 'Hasło API';
$_['entry_token']                   = 'Tajny token';
$_['entry_transaction']             = 'Transakcja';
$_['entry_environment']             = 'Środowisko';
$_['entry_site']                    = 'Witryna';
$_['entry_store_cards']             = 'Przechowuj karty';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Suma';
$_['entry_geo_zone']                = 'Strefa geograficzna';
$_['entry_status']                  = 'Status';
$_['entry_logging']                 = 'Logowanie debugowania';
$_['entry_sort_order']      		= 'Kolejność wyświetlania';
$_['entry_cron_url']                = 'URL zadania cron';
$_['entry_cron_time']               = 'Ostatnie uruchomienie zadania cron';
$_['entry_order_status_pending']    = 'Oczekujące';
$_['entry_order_status_processing'] = 'Przetwarzane';

// Help
$_['help_merchant_id']              = 'Twoje id handlowca w koncie CardConnect.';
$_['help_api_username']             = 'Twój login do API CardConnect.';
$_['help_api_password']             = 'Twoje hasło do API CardConnect.';
$_['help_token']                    = 'Wprowadź losowy token dla bezpieczeństwa lub użyj wygenerowany.';
$_['help_transaction']              = 'Wybierz \'Płatność\' aby przechwycić płatność natychmiast lub \'Autoryzacja\' aby musieć to zatwierdzić.';
$_['help_site']                     = 'To określa pierwszą część URL API. Zmień tylko jeśli zostałeś poinstruowany aby to zrobić.';
$_['help_store_cards']              = 'Czy chcesz przechowywać karty używając tokenów.';
$_['help_echeck']                   = 'Czy chcesz oferować możliwość płatności za pomocą eCheck.';
$_['help_total']                    = 'Kwota którą musi osiągnąć zamówienie aby ta metoda płatności była aktywna. Nie wpisuj symbolu waluty.';
$_['help_logging']                  = 'Włączenie debugowania spowoduje zapis wrażliwych danych do pliku dziennika. Powinieneś to wyłączyć chyba że zostaniesz poinstruowany inaczej.';
$_['help_cron_url']                 = 'Ustaw wywołanie tego URL przez zadanie cron aby zamówienia były automatycznie aktualizowane. Jest ono zaprojektane do uruchamiania w dniu roboczym kilka godzin po ostatnim przechwyceniu.';
$_['help_cron_time']                = 'To jest czas ostatniego wywołania URL zadania cron.';
$_['help_order_status_pending']     = 'Status zamówienia gdy zamówienie musi być autoryzowane przez handlowca.';
$_['help_order_status_processing']  = 'Status zamówienia gdy zamówienie jest przechwytywane automatycznie.';

// Button
$_['button_inquire_all']            = 'Zapytaj o wszystkie';
$_['button_capture']                = 'Przechwyć';
$_['button_refund']                 = 'Zwróć';
$_['button_void_all']               = 'Unieważnij wszystkie';
$_['button_inquire']                = 'Zapytaj';
$_['button_void']                   = 'Unieważnij';

// Error
$_['error_permission']      = 'Uwaga: Nie masz uprawnień do tego działu!';
$_['error_merchant_id']             = 'Id handlowca jest wymagane!';
$_['error_api_username']            = 'Login API jest wymagany!';
$_['error_api_password']            = 'Hasło API jest wymagane!';
$_['error_token']                   = 'Tajny token jest wymagany!';
$_['error_site']                    = 'Witryna jest wymagana!';
$_['error_amount_zero']             = 'Kwota musi być większa od zera!';
$_['error_no_order']                = 'Brak zgodnych danych zamówienia!';
$_['error_invalid_response']        = 'Otrzymano nieprawidłową odpowiedź!';
$_['error_data_missing']            = 'Brak danych!';
$_['error_not_enabled']             = 'Moduł jest wyłączony!';