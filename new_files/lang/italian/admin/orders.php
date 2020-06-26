<?php
define('TEXT_BANK', 'ingresso banca');
define('TEXT_BANK_OWNER', 'intestatario conto:');
define('TEXT_BANK_NUMBER', 'numero conto:');
define('TEXT_BANK_BLZ', 'Codice banca:');
define('TEXT_BANK_NAME', 'Banca:');
define('TEXT_BANK_BIC', 'BIC:');
define('TEXT_BANK_IBAN', 'IBAN:');
define('TEXT_BANK_FAX', 'l\'autorizzazione ingresso viene confermata tramite Fax');
define('TEXT_BANK_STATUS', 'controlla stato:');
define('TEXT_BANK_PRZ', 'procedura controllo:');
define('TEXT_BANK_OWNER_EMAIL', 'Titolare di un conto e-mail:');
define('TEXT_BANK_ERROR_1', 'Il numero conto non concorda con il codice banca!');
define('TEXT_BANK_ERROR_2', 'Per questo numero conto non &egrave; definita nessuna procedura di verifica!');
define('TEXT_BANK_ERROR_3', 'Conto numero non verificabile');
define('TEXT_BANK_ERROR_4', 'il conto numero tecnico non &egrave; verificabile!');
define('TEXT_BANK_ERROR_5', 'Codice banca non trovato!');
define('TEXT_BANK_ERROR_8', 'non &egrave; stato inserito nessun codice banca!');
define('TEXT_BANK_ERROR_9', 'non &egrave; stato inserito nessun numero banca!');
define('TEXT_BANK_ERRORCODE', 'Codice errato:');
define('HEADING_TITLE', 'Ordine');
define('HEADING_TITLE_SEARCH', 'ordine n�.:');
define('HEADING_TITLE_STATUS', 'Stato:');
define('TABLE_HEADING_COMMENTS', 'commento');
define('TABLE_HEADING_CUSTOMERS', 'Cliente');
define('TABLE_HEADING_ORDER_TOTAL', 'totale valore');
define('TABLE_HEADING_DATE_PURCHASED', 'data ordine');
define('TABLE_HEADING_ACTION', 'Azione');
define('TABLE_HEADING_QUANTITY', 'Quantit&agrave;');
define('TABLE_HEADING_PRODUCTS_MODEL', 'articolo n�.');
define('TABLE_HEADING_PRODUCTS', 'Articolo');
define('TABLE_HEADING_TAX', 'IVA.');
define('TABLE_HEADING_TOTAL', 'Totale somma');
define('TABLE_HEADING_STATUS', 'Stato');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Prezzo (escluso)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Prezzo (incluso)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Totale (escluso)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Totale');
define('TABLE_HEADING_AFTERBUY','Afterbuy');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Cliente avvisato');
define('TABLE_HEADING_DATE_ADDED', 'aggiunto il:');
define('ENTRY_CUSTOMER', 'cliente:');
define('ENTRY_SOLD_TO', 'indirizzo conto:');
define('ENTRY_TELEPHONE', 'Telefono:');
define('ENTRY_DELIVERY_TO', 'Indirizzo consegna');
define('ENTRY_SHIP_TO', 'indirizzo consegna:');
define('ENTRY_SHIPPING_ADDRESS', 'indirizzo invio:');
define('ENTRY_PICKUP_ADDRESS', 'Indirizzo per il ritiro:');
define('ENTRY_BILLING_ADDRESS', 'Indirizzo conto:');
define('ENTRY_PAYMENT_METHOD', 'Metodo pagamento:');
define('ENTRY_SHIPPING_METHOD', 'Metodo di spedizione:');
define('ENTRY_SUB_TOTAL', 'subtotale:');
define('ENTRY_TAX', 'IVA:');
define('ENTRY_SHIPPING', 'spese spedizione:');
define('ENTRY_TOTAL', 'totale:');
define('ENTRY_DATE_PURCHASED', 'data ordine:');
define('ENTRY_STATUS', 'Stato:');
define('ENTRY_DATE_LAST_UPDATED', 'ultimo aggiornamento il:');
define('ENTRY_NOTIFY_CUSTOMER', 'notifica cliente:');
define('ENTRY_NOTIFY_COMMENTS', 'invia commento:');
define('ENTRY_PRINTABLE', 'stampa conto');
define('ENTRY_STREET_ADDRESS', 'via:');
define('ENTRY_SUBURB', 'indirizzo:');
define('ENTRY_CITY', 'Citt&agrave;:');
define('ENTRY_POST_CODE', 'C.A.P.:');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_COUNTRY', 'Paese:');
define('ENTRY_EMAIL_ADDRESS', 'Indirizzo e-mail:');
define('ENTRY_CREDIT_CARD_TYPE', 'Tipo carta di credito:');
define('ENTRY_CREDIT_CARD_OWNER', 'Titolare carta di credito:');
define('ENTRY_CREDIT_CARD_NUMBER', 'numero carta di credito:');
define('ENTRY_CREDIT_CARD_CVV', 'codice protezione(CVV)):');
define('ENTRY_CREDIT_CARD_EXPIRES', 'la carta di credito &egrave; attiva dal:');
define('TEXT_INFO_HEADING_DELETE_ORDER', 'Cancella ordine');
define('TEXT_INFO_DELETE_INTRO', '&egrave; sicuro di voler cancellare quest\'ordine?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'scrivere  nel campo la quantit&agrave; di articoli');
define('TEXT_DATE_ORDER_CREATED', 'creato il:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Ultima modifica:');
define('TEXT_INFO_PAYMENT_METHOD', 'Metodo di pagamento:');
define('TEXT_INFO_SHIPPING_METHOD', 'Metodo di spedizione:');
define('TEXT_ALL_ORDERS', 'Tutti gli ordini');
define('TEXT_NO_ORDER_HISTORY', 'nessuna history ordine disponibile');
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Modifica stato dei suoi ordini');
define('EMAIL_TEXT_ORDER_NUMBER', 'ordine n�.:');
define('EMAIL_TEXT_INVOICE_URL', 'Pu&ograve; prendere visione dei suoi ordini al seguente indirizzo:');
define('EMAIL_TEXT_DATE_ORDERED', 'Data ordine:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Lo stato dei suoi ordini &egrave; stato aggiornato.' . "\n\n" . 'Nuovo stato: %s' . "\n\n" . 'Per domande relative ai suoi ordini risponda a questa e-mail.' . "\n\n" . 'Distinti saluti' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'note e commenti relative ai suoi ordini:' . "\n\n%s\n\n");
define('ERROR_ORDER_DOES_NOT_EXIST', 'Errore: l\'ordine non esiste!.');
define('SUCCESS_ORDER_UPDATED', 'Errore: l\'ordine &egrave; stato aggiornato.');
define('WARNING_ORDER_NOT_UPDATED', 'Indicazione: non verr&agrave; modificato. Questo ordine non sar&agrave; aggiornato.');
define('TABLE_HEADING_DISCOUNT','Sconto');
define('ENTRY_CUSTOMERS_GROUP','Gruppo clienti:');
define('TEXT_VALIDATING','Non confermato');
define('TEXT_PRODUCTS', 'Articolo');
//BOF - web28 - 2010-03-20 - Send Order by Admin
define('COMMENT_SEND_ORDER_BY_ADMIN' , 'La conferma d\'ordine viene inviata');
define('BUTTON_ORDER_CONFIRMATION', 'Inviare la conferma d\'ordine');
define('SUCCESS_ORDER_SEND', 'Conferma d\'ordine inviata con successo');
//EOF - web28 - 2010-03-20 - Send Order by Admin
define ('ENTRY_CUSTOMERS_ADDRESS', 'Indirizzo Cliente');
define ('TEXT_ORDER', 'ordine');
define ('TEXT_ORDER_HISTORY', 'Storia Order');
define ('TEXT_ORDER_STATUS', 'ordine:');
define ('TABLE_HEADING_ORDERS_ID', 'No. Ordine');
define ('TEXT_SHIPPING_TO', 'spedizione');
define('TABLE_HEADING_COMMENTS_SENT', 'Il commento viene inviato');
define('TABLE_HEADING_TRACK_TRACE', 'Traccia &amp; Traccia:');
define('TABLE_HEADING_CARRIER', 'Spedizione');
define('TABLE_HEADING_PARCEL_LINK', 'Numero di spedizione / numero di etichetta del pacco / numero d\'ordine / numero d\'identificazione della spedizione / numero di tracking');
define('TEXT_INFO_HEADING_REVERSE_ORDER', 'Ordine inverso');
define('TEXT_INFO_REVERSE_INTRO', 'Siete sicuri di voler invertire questo ordine?');
define('TABLE_HEADING_SHIPCLOUD', 'Shipcloud:');
define('TABLE_HEADING_PARCEL_ID', 'Identificazione del pacco');
define('TEXT_SHIPCLOUD_STANDARD', 'Standard');
define('TEXT_SHIPCLOUD_ONE_DAY', 'Esprimi');
define('TEXT_SHIPCLOUD_ONE_DAY_EARLY', 'Esprimi 10:00');
define('TEXT_SHIPCLOUD_RETURNS', 'Ritocco');
define('TEXT_SHIPCLOUD_LETTER', 'Lettera postale');
define('TEXT_SHIPCLOUD_BOOKS', 'Libro Posta');
define('TEXT_SHIPCLOUD_PARCEL_LETTER', 'Lettera postale');
define('TEXT_WEIGHT_PLACEHOLDER', 'Peso / Kg');
define('TEXT_SHIPCLOUD_INSURANCE_NO', 'assicurazione superiore no');
define('TEXT_SHIPCLOUD_INSURANCE_YES', 'assicurazione superiore s&igrave;');
define('TEXT_SHIPCLOUD_BULK', 'Massa');
define('TEXT_SHIPCLOUD_PARCEL', 'Pacco');
define('DOWNLOAD_LABEL', 'Scarica l\'etichetta');
define('CREATE_LABEL', 'Crea etichetta');
define('TEXT_DELETE_SHIPMENT_SUCCESS', 'shipcloud Label cancellato.');
define('TEXT_LABEL_CREATED', 'Etichetta creata.');
define('TEXT_CARRIER_ERROR', 'Vettore non attivato nel vostro account shipcloud o chiave API non valida.');
define('TEXT_CARRIER_PLACEHOLDER_1', 'Descrizione del pacchetto');
define('TEXT_CARRIER_PLACEHOLDER_2', 'Descrizione della spedizione');
define('TEXT_DOWNLOADS', 'Scaricare');
define('TABLE_HEADING_FILENAME', 'Nome del file');
define('TABLE_HEADING_EXPIRES', 'Data di scadenza');
define('TABLE_HEADING_DOWNLOADS', 'Numero Downloads');
define('TABLE_HEADING_DAYS', 'Numero di giorni');
define('ENTRY_SEND_TRACKING_INFO', 'Informazioni sulla spedizione:');
define('TEXT_ORDERS_STATUS_FILTER', 'Filtro dello stato degli ordini');
define('TABLE_HEADING_DATE', 'Data');
define('BUTTON_ORDER_MAIL_STEP', 'Inviare la posta dell\'ordine');
define('COMMENT_SEND_ORDER_MAIL_STEP' , 'L\'ordine viene inviato per posta');
define('SUCCESS_ORDER_MAIL_STEP_SEND', 'Ordinare la posta inviata con successo');
define('BILLPAY_ORDER_UPDATE_HIGH', 'Errore: Il nuovo valore totale non pu&ograve; essere superiore al vecchio valore totale nei pagamenti delle fatture');
?>