<?php
// Heading
$_['heading_title']                     = 'Import przedmiotów';
$_['text_openbay']                      = 'OpenBay Pro';
$_['text_ebay']                         = 'eBay';

// Text
$_['text_sync_import_line1']            = '<strong>Uwaga!</strong> To spowoduje zaimportowanie wszystkich Twoich produktów na eBay i zbudowanie struktury kategorii w Twoim sklepie. Zalecane jest usunięcie wszystkich kategorii i produktów przed uruchomieniem tej opcji. <br />Ta struktura kategorii pochodzi z kategorii eBay, a nie kategorii sklepowych (jeśli posiadasz sklep eBay). Możesz zmieniać nazwy, usuwać i edytować zaimportowane kategorie bez wpływu na produkty eBay.';
$_['text_sync_import_line3']            = 'Musisz mieć pewność że Twój serwer może przyjąć i przetworzyć dane POST dużych rozmiarów. 1000 produktów eBay ma rozmiar około 40Mb, musisz obliczyć ile wymagasz. Jeśli żądanie zakończy się niepowodzeniem to prawdopodobnie ustawiłeś za małą ilość. Limit pamięci PHP musi wynosić około 128Mb.';
$_['text_sync_server_size']             = 'Obecne Twój serwer może przyjąć: ';
$_['text_sync_memory_size']             = 'Limit pamięci PHP na serwerze: ';
$_['text_import_confirm']				= 'To spowoduje zaimportowanie danych z eBay jako nowe produkty, czy jesteś tego pewien? Tej operacji NIE MOŻNA cofnąć! UPEWNIJ SIĘ najpierw że masz kopię zapasową!';
$_['text_import_notify']				= 'Żądanie importu zostało wysłane do przetworzenia. Import trwa około 1 godziny na 1000 produktów.';
$_['text_import_images_msg1']           = 'obrazki oczekują na import/kopiowanie z eBay. Odśwież tą stronę jeśli liczba się nie zmniejsza, następnie';
$_['text_import_images_msg2']           = 'kliknij tutaj';
$_['text_import_images_msg3']           = 'i czekaj. Więcej informacji dlaczego tak się stało można znaleźć <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">tutaj</a>';

// Entry
$_['entry_import_item_advanced']        = 'Pobierz szczegółowe dane';
$_['entry_import_categories']         	= 'Importuj kategorie';
$_['entry_import_description']			= 'Import opisy produktów';
$_['entry_import']						= 'Import produkty eBay';

// Buttons
$_['button_import']						= 'Importuj';
$_['button_complete']					= 'Zakończ';

// Help
$_['help_import_item_advanced']        	= 'Import produktów zajmie do 10 razy dłużej. Importuje wagi, rozmiary, numery ISBN i więcej, jeśli dostępne';
$_['help_import_categories']         	= 'Buduje strukturę kategorii w Twoim sklepie na podstawie kategorii eBay';
$_['help_import_description']         	= 'To zaimportuje wszystko, łącznie z HTML, licznikami odwiedzin itd';

// Error
$_['error_import']                   	= 'Nie udało się załadować';
$_['error_maintenance']					= 'Twój sklep jest w trybie konserwacji. Import nie powiedzie się!';
$_['error_ajax_load']					= 'Nie udało się połączyć z serwerem';
$_['error_validation']					= 'Musisz się zarejestrować aby otrzymać token API i włączyć moduł.';