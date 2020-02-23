<?php
// Text
$_['text_new_card']                     = '+ Dodaj nową kartę';
$_['text_loading']                      = 'Ładowanie... Prosimy czekać...';
$_['text_card_details']                 = 'Szczegóły karty';
$_['text_saved_card']                   = 'Użyj zapisanej karty:';
$_['text_card_ends_in']                 = 'Zapłać istniejącą kartą %s kończącą się na XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Numer karty:';
$_['text_card_expiry']                  = 'Wygaśnięcie karty (MM/RR):';
$_['text_card_cvc']                     = 'Kod bezpieczeństwa karty (CVC):';
$_['text_card_zip']                     = 'Kod pocztowy karty:';
$_['text_card_save']                    = 'Zapisz kartę do przyszłego wykorzystania?';
$_['text_trial']                        = '%s co %s %s dla %s rat następnie ';
$_['text_recurring']                    = '%s co %s %s';
$_['text_length']                       = ' dla %s rat';
$_['text_cron_subject']                 = 'Podsumowanie zadania CRON Square';
$_['text_cron_message']                 = 'Poniżej znajduje się lista wszystkich zadań CRON wykonywanych przez Twoje rozszerzenie Square:';
$_['text_squareup_profile_suspended']   = ' Twoje płatności ratalne zostały zawieszone. Prosimy o kontakt.';
$_['text_squareup_trial_expired']       = ' Twój okres próbny wygasł.';
$_['text_squareup_recurring_expired']   = ' Twoje płatności ratalne wygasły. To była Twoja ostatnia rata.';
$_['text_cron_summary_token_heading']   = 'Odśwież token dostępu:';
$_['text_cron_summary_token_updated']   = 'Token dostępu został zaktualizowany!';
$_['text_cron_summary_error_heading']   = 'Błędy transakcji:';
$_['text_cron_summary_fail_heading']    = 'Nieudane transakcje (Profile zawieszone):';
$_['text_cron_summary_success_heading'] = 'Udane transakcje:';
$_['text_cron_fail_charge']             = 'Profil <strong>#%s</strong> nie mógł być obciążony kwotą <strong>%s</strong>';
$_['text_cron_success_charge']          = 'Profil <strong>#%s</strong> został obciążony kwotą <strong>%s</strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/RR';
$_['text_default_squareup_name']        = 'Karta kredytowa / debetowa';
$_['text_token_issue_customer_error']   = 'Występują problemy techniczne z naszym systemem płatności. Prosimy spróbować ponownie później.';
$_['text_token_revoked_subject']        = 'Twój token dostępu do Square został unieważniony!';
$_['text_token_revoked_message']        = "Dostęp do Twojego konta Square przez rozszerzenie płatności Square został unieważniony przez pulpit Square. Należy zweryfikować dostęp aplikacji w ustawieniach rozszerzenia i połączyć się ponownie.";
$_['text_token_expired_subject']        = 'Twój token dostępu do Square wygasł!';
$_['text_token_expired_message']        = "Token dostępowy rozszerzenia płatności Square, służący do połączenia go z Twoim kontem Square wygasł. Należy zweryfikować dostęp aplikacji oraz zadanie CRON w ustawieniach rozszerzenia i połączyć się ponownie.";

// Error
$_['error_browser_not_supported']       = 'Błąd: System płatności nie obsługuje już Twojej przeglądarki internetowej. Zaktualizuj lub użyj innej.';
$_['error_card_invalid']                = 'Błąd: Karta jest nieważna!';
$_['error_squareup_cron_token']         = 'Błąd: Nie można odświeżyć tokenu dostępu. Połącz swoje rozszerzenie płatności Square poprzez panel administracyjny OpenCart.';

// Warning
$_['warning_test_mode']                 = 'Uwaga: Tryb Sandbox jest aktywny! Transakcje będą figurowały jako udane, ale nie będą przeprowadzone żadne obciążenia.';

// Statuses
$_['squareup_status_comment_authorized']                = 'Transakcja kartą została autoryzowana ale nie przechwycona.';
$_['squareup_status_comment_captured']                  = 'Transakcja kartą została autoryzowana, a następnie przechwycona (tzn. zakończona).';
$_['squareup_status_comment_voided']                    = 'Transakcja kartą została autoryzowana, a następnie unieważniona (tzn. anulowana).   ';
$_['squareup_status_comment_failed']                    = 'Transakcja kartą zakończyła się niepowodzeniem.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Kraj w adresie rozliczeniowym jest nieprawidłowy. Prosimy go zmienić i spróbować ponownie.';
$_['squareup_override_error_shipping_address.country']      = 'Kraj w adresie wysyłki jest nieprawidłowy. Prosimy go zmienić i spróbować ponownie.';
$_['squareup_override_error_email_address']                 = 'Twój adres e-mail klienta jest nieprawidłowy. Prosimy go zmienić i spróbować ponownie.';
$_['squareup_override_error_phone_number']                  = 'Twój numer telefonu klienta jest nieprawidłowy. Prosimy go zmienić i spróbować ponownie.';
$_['squareup_error_field']                                  = ' Pole: %s';