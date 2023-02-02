SELECT COUNT(*)  AS numero_prenotazioni
FROM citta
INNER JOIN clienti ON id_citta = clienti.citta
INNER JOIN prenotazioni ON id_cliente = cliente
WHERE provincia_nome IN ('Milano')
AND importo > 200