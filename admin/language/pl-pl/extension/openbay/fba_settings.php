<?php
// Headings
$_['heading_title']        	   = 'Ustawienia';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Realizacja przez Amazon';

// Text
$_['text_success']     		   = 'Ustawienia zostały zapisane';
$_['text_status']         	   = 'Status';
$_['text_account_ok']  		   = 'Połączenie z Realizacją przez Amazon udane';
$_['text_api_ok']       	   = 'Połączenie z API udane';
$_['text_api_status']          = 'Połączenie z API';
$_['text_edit']           	   = 'Edycja ustawień realizacji przez Amazon';
$_['text_standard']            = 'Standardowa';
$_['text_expedited']           = 'Przyspieszona';
$_['text_priority']            = 'Priorytetowa';
$_['text_fillorkill']          = 'Realizuj lub anuluj';
$_['text_fillall']             = 'Realizuj wszystkie';
$_['text_fillallavailable']    = 'Realizuj wszystkie dostępne';
$_['text_prefix_warning']      = 'Nie zmieniaj tego ustawienia po wysłaniu zamówień do Amazon, ustaw to tylko przy pierwszej instalacji.';
$_['text_disabled_cancel']     = 'Wyłączone - nie anuluj realizacji automatycznie';
$_['text_validate_success']    = 'Dane Twojego API działają poprawnie! Wciśnij Zapisz aby mieć pewność, że ustawienia są zachowane.';
$_['text_register_banner']     = 'Kliknij tutaj aby zarejestrować nowe konto';

// Entry
$_['entry_api_key']            = 'Klucz API';
$_['entry_encryption_key']           = 'Klucz szyfrowania 1';
$_['entry_encryption_iv']            = 'Klucz szyfrowania 2';
$_['entry_account_id']         = 'Id konta';
$_['entry_send_orders']        = 'Wyślij zamówienia automatycznie';
$_['entry_fulfill_policy']     = 'Polityka realizacji';
$_['entry_shipping_speed']     = 'Domyślna prędkość wysyłki';
$_['entry_debug_log']          = 'Włącz logowanie debugowania';
$_['entry_new_order_status']   = 'Nowy wyzwalacz realizacji';
$_['entry_order_id_prefix']    = 'Prefiks id zamówienia';
$_['entry_only_fill_complete'] = 'Wszystkie elementy muszą być FBA';

// Help
$_['help_api_key']             = 'To jest Twój klucz API, uzyskaj go w koncie OpenBay Pro';
$_['help_encryption_key']      = 'To jest Twój klucz szyfrowania #1, uzyskaj go w koncie OpenBay Pro';
$_['help_encryption_iv']       = 'To jest Twój klucz szyfrowania #2, uzyskaj go w koncie OpenBay Pro';
$_['help_account_id']          = 'This is the account ID that matches the registered Amazon account for OpenBay Pro, obtain this from your OpenBay Pro account area';
$_['help_send_orders']  	   = 'Zamówienia zawierające zgodne produkty realizowane przez Amazon zostaną wysłane do Amazon automatycznie';
$_['help_fulfill_policy']  	   = 'Domyślna polityka realizacji (Realizuj wszystkie - wysyłane są wszystkie realizowalne elementy zamówienia. Realizowane zamówienie pozostaje w stanie przetwarzania do czasu wysłania wszystkich elementów przez Amazon lub anulowania przez sprzedawcę. Realizuj wszystkie dostępne - wysyłane są wszystkie realizowalne elementy zamówienia. Pozostałe są anulowane przez Amazon. Realizuj lub anuluj - jeśli element zamówienia jest określony jako niemożliwy do realizacji zanim jakakolwiek wysyłka w zamówieniu uzyska status Oczekująca (rozpoczął się proces pobierania z magazynu), to całe zamówienie jest uważane za niemożliwe do realizacji. Jednak, jeśli element zamówienia jest określony jako niemożliwy do realizacji po uzyskaniu przez wysyłkę statusu Oczekująca, Amazon anuluje tyle z realizowanego zamówienia, ile jest możliwe.)';
$_['help_shipping_speed']  	   = 'To jest domyślna kategoria prędkości wysyłki do zastosowania w nowych zamówieniach, różne poziomy usług mogą generować różne koszta';
$_['help_debug_log']  		   = 'To spowoduje zapisanie informacji o działaniach wykonywanych przez moduł do pliku dziennika. To powinno pozostać włączone aby pomóc znaleźć przyczyny problemów.';
$_['help_new_order_status']    = 'To jest status zamówienia który wywoła utworzenie zamówienia do realizacji. Upewnij się że wykorzystywany jest status po otrzymaniu płatności.';
$_['help_order_id_prefix']     = 'Posiadanie prefiksu zamówienia pozwoli zidentyfikować zamówienia które przyszły z Twojego sklepu a nie z innych źródeł. To jest bardzo pomocne przy sprzedaży na wielu platformachi wykorzystywaniu realizacji przez Amazon';
$_['help_only_fill_complete']  = 'To pozwoli na wysyłanie zamówień do realizacji tylko jeśli wszystkie elementy zamówienia odpowiadają elementom realizacji przez Amazon. Jeśli jakikolwiek element nie pasuje to całe zamówienie pozostanie niezrealizowane.';

// Error
$_['error_api_connect']        = 'Błąd połączenia z API';
$_['error_account_info']       = 'Nie można zweryfikować połączenia z API realizacji przez Amazon ';
$_['error_api_key']    		   = 'Nieprawidłowy klucz API';
$_['error_api_account_id']     = 'Nieprawidłowe id konta';
$_['error_encryption_key']     = 'Nieprawidłowy klucz szyfrowania #1';
$_['error_encryption_iv']      = 'Nieprawidłowy klucz szyfrowania #2';
$_['error_validation']    	   = 'Wystąpił błąd podczas weryfikacji danych';

// Tabs
$_['tab_api_info']             = 'Szczegóły API';

// Buttons
$_['button_verify']            = 'Weryfikuj dane';
